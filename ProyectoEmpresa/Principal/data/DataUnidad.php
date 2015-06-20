<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataUnidad{

	function DataUnidad(){
	}

	function insertar($unidad){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call unidadInsertar('".$unidad->get_nombre()."');";	
			//echo "string ".$query;
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_lista(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call unidadSeleccionarTodo;";
			
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$btnEliminar = '<input type="button" onclick="eliminar('.$row[1].')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$row[1].')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_unidad($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call unidadSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
		//	echo "<br>Query Sql".$query."<br>";
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1]);	
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
			$query = "call unidadEliminar($id)";	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($unidad){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call unidadModificar ('".$unidad->get_nombre()."',".$unidad->get_id().")";
			
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