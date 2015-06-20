<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataSalidaHerramienta{

	function DataSalidaHerramienta(){
	}

	function insertar($herramienta){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call salidaHerramientaInsertar(
			".$herramienta->get_idHerramienta().",		
			'".$herramienta->get_fecha()."',
			".$herramienta->get_cantidad().",
			'".$herramienta->get_detalle()."')";	
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_SalidaHerramientas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call salidaherramientaSeleccionarTodo";
		  
         $result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$btn='<input type="button" class="enviar"  onclick="modificar('.$row[0].')" value="Editar">';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$btn);	
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
			$query = "call salidaHerramientaSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);	
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
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call salidaHerramientaEliminar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $herramienta){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call salidaHerramientaModificar (
		".$herramienta->get_id().", 
		".$herramienta->get_idHerramienta().",
		'".$herramienta->get_marca()."', 
		'".$herramienta->get_descripcion()."',		
		'".$herramienta->get_fecha()."',
		".$herramienta->get_cantidad().",
		'".$herramienta->get_detalle()."',$id) ";
	//	echo "procedure <br>".$query;
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