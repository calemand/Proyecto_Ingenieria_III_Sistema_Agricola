<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataSalidaInsumo{

	function DataSalidaInsumo(){
	}

	function insertar($salida){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call salidainsumoInsertar(
			".$salida->get_idInsumo().",
			'".$salida->get_cultivo()."',
			'".$salida->get_fecha()."',
			".$salida->get_cantidad().")";		
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_insumos(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "SELECT idInsumo,nombreInsumo FROM tbinsumo ORDER BY nombreInsumo ASC";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0],$row[1]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}


	function get_salidas(){

	$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			
			$query = "call salidaInsumoSeleccionarTodo";
           
        
           $result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				  $btnModificar='<input type="button" onclick="modificar('.$row[0].')" value="Editar">';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}




	function get_salida($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call salidaInsumoSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4]);	
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
			$query = "call salidaInsumoInsertar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $salida){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call salidainsumoModificar(
		".$salida->get_id().", 
		".$salida->get_idInsumo().",'
		".$salida->get_cultivo()."',
		'".$salida->get_fecha()."',
		".$salida->get_cantidad().",$id)";
	
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