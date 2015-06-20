<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataEmpleado{

	function DataEmpleado(){
	}

	function insertar($empleado){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call empleadoInsertar(
			'".$empleado->get_cedula()."',
			'".$empleado->get_nombre()."',
			'".$empleado->get_apellidos()."',
			'".$empleado->get_correo()."',
			'".$empleado->get_telefono()."',
			'".$empleado->get_direccion()."',
			'".$empleado->get_genero()."')";	
		
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}
	function getCedulas(){
		$con = new DBConexion;

		 $lista = array();

		if($con->conectar()==true){
			$query = "SELECT Cedula FROM tbempleado";
			$result = @mysql_query($query);	

			while($row = mysql_fetch_array($result)){
			
				array_push($lista,$row[0]);
			}

			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}


	function get_empleados(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call empleadoSeleccionarTodo";
			$result = @mysql_query($query);	
			$i=0;
		
			while($row = mysql_fetch_array($result)){

				$id = "'".$row[0]."'";
		         $btnEliminar = '<input type="button" onclick="eliminar('.$id.')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$id.')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_empleado($id){
	
		$con = new DBConexion;

			$query = "Call empleadoSeleccionar ('$id')";
		
		return $con->getRow($query);
	}

		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call empleadoEliminar ('$id')";	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $empleado){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call empleadoModificar ('$id','".$empleado->get_cedula().
		"','".$empleado->get_nombre().
		"','".$empleado->get_apellidos().
		"','".$empleado->get_correo().
		"','".$empleado->get_telefono().
		"','".$empleado->get_direccion().
		"','".$empleado->get_genero()."')";

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