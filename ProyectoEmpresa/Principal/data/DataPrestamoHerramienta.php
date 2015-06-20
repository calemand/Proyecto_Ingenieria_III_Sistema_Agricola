<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataPrestamoHerramienta{

	function DataPrestamoHerramienta(){
	}

	function insertar($prestamo){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call prestamoHerramientasInsertar(
			'".$prestamo->get_idEmpleado()."',
			".$prestamo->get_idHerramienta().",
			'".$prestamo->get_fecha()."',
			".$prestamo->get_estado().",
			'".$prestamo->get_observacion()."')";		
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}

	function get_PrestamoHerramientas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			//$query = "SELECT idPrestamoHerramientas, idUsuario, idPresHerramienta, fecha, estadoPres, observacion FROM tbprestamoherramientas  ORDER BY idPrestamoHerramientas ASC";
			
			//$query = "SELECT idPrestamoHerramientas, nombreUsuario, nombre, fecha, estadoHer, observacion FROM tbprestamoherramientas INNER JOIN  tbempleado,tbherramienta,tbestadoherramienta
			//where tbprestamoherramientas.idUsuario=tbempleado.Cedula AND tbprestamoherramientas.idPresHerramienta=tbherramienta.idHerramienta  AND tbprestamoherramientas.estadoPres=tbestadoherramienta.idEstado ORDER BY  idPrestamoHerramientas ASC";

			$query = "call prestamoHerramientaSeleccionarTodo";
			
	
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$btn = '<input type="button" class="enviar"  onclick="modificar('.$row[0].')" value="Editar">';
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
	function get_prestamoHerramienta($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call prestamoHerramientaSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);	
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
			$query = "call prestamoHerramientasEliminar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $prestamo){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call prestamoHerramientaModificar(
		".$prestamo->get_id().",
		'".$prestamo->get_idEmpleado()."', 
		".$prestamo->get_idHerramienta().", 
		'".$prestamo->get_fecha()."', 
		".$prestamo->get_estado().",
		'".$prestamo->get_observacion()."',$id)";
	//	echo "<br>".$query."<br>";
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