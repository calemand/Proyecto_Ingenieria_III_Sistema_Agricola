<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataProvedor{

	function DataProvedor(){
	}

	function insertar($provedor){
		$con = new DBConexion;

		if($con->conectar()==true){
			$query = "call provedorInsertar(			
			'".$provedor->get_nombre()    ."',
			'".$provedor->get_cedula()    ."',
			'".$provedor->get_direccion() ."',
			'".$provedor->get_telefono()  ."',
			'".$provedor->get_email()     ."',
			'".$provedor->get_cuenta()    ."',
			'".$provedor->get_banco()     ."');";	
			//echo "query <br>".$query."<br>";

	
			$result = @mysql_query($query);	
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);
	}	
	


	function get_provedores(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call proveedorSeleccionarTodo";			
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				
				$id = "'".$row[0]."'";
				$btnEliminar = '<input type="button" onclick="eliminar('.$id.')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$id.')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
		mysql_close($con);
	}
	function get_provedor($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call proveedorSeleccionar($id);";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
		mysql_close($con);
	}

		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call proveedorEliminar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);
	}
	
	
	function modificar($id, $provedor){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call proveedorModificar ( 
		".$provedor->get_id().",	
		'".$provedor->get_nombre()."', 
		'".$provedor->get_cedula()."', 
		'".$provedor->get_direccion()."', 
		'".$provedor->get_telefono()."', 
		'".$provedor->get_email()."', 
		'".$provedor->get_cuenta()."', 
		'".$provedor->get_banco()."', '$id');";	

		$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);
	}
	
}
?>