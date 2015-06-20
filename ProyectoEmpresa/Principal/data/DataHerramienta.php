<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataHerramienta{

	function DataHerramienta(){
	}

	function insertar($herramienta){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call herramientaInsertar(
			'".$herramienta->get_nombre()."',
			'".$herramienta->get_marca()."',
			'".$herramienta->get_descripcion()."')";		
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_herramientas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call herramientaSelecionarTodo";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$id = $row[0];
		        $btnEliminar = "<input type='button' onclick='eliminar(".$id.")'  value='Eliminar'>";
				$btnModificar = "<input type='button' onclick='modificar(".$id.")' value='Modificar'>";
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_herramienta($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call herramientaSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}

	function eliminar($id){
		try
		{
			$con = new DBConexion;
			if($con->conectar()==true){
				$query = "Call herramientaEliminar($id)";
				$result = @mysql_query($query);	
				echo "<br>".$query;
				if (!$result){
					return false;
				}else{
					return $result;
				}
			}
		}catch (Exception $e) {
			echo $e;
		}
	}
	
	
	function modificar($id, $herramienta){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="Call herramientaModificar(".$herramienta->get_id().", 
		'".$herramienta->get_nombre()."',
		'".$herramienta->get_marca()."', 
		'".$herramienta->get_descripcion()."',$id)";
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
}


?>