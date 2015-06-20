<?php
header ( 'Content-Type: text/html; charset=ISO-8859-1' );
class DataPuesto {
	function DataPuesto() {
	}
	function insertar($Puesto) {
		$resultado = true;
		$con = new DBConexion ();
		
		if ($con->conectar () == true) {
			$query = "call puestoTrabajoInsertar(
			'" . $Puesto->get_puestolaboral () . "',
			'" . $Puesto->get_preciohora () . "')";
			
			$result = @mysql_query ( $query );
			if (! $result) {
				$resutado = false;
			} else {
				$resultado = true;
			}
		}
		return $resultado;
	}
	function get_Puestos() {
		$con = new DBConexion ();
		$lista = array ();
		if ($con->conectar () == true) {
			$query = "call puestotrabajoSeleccionarTodo";
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				$id = "'" . $row [0] . "'";
				$btnEliminar = '<input type="button" onclick="eliminar(' . $id . ')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar(' . $id . ')" value="Modificar"/>';
				$lista [$i] = array (
						$row [0],
						$row [1],
						$row [2],
						$btnEliminar,
						$btnModificar 
				);
				$i ++;
			}
			if (! $lista) {
				return false;
			} else {
				
				return $lista;
			}
		}
	}
	function get_Puesto($id) {
		$con = new DBConexion ();
		$lista = array ();
		if ($con->conectar () == true) {
			$query = "call puestoTrabajoSeleccionar($id)";
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				$lista [$i] = array (
						$row [0],
						$row [1],
						$row [2] 
				);
				$i ++;
			}
			if (! $lista) {
				return false;
			} else {
				
				return $lista;
			}
		}
	}
	function eliminar($id) {
		$resultado = true;
		$con = new DBConexion ();
		if ($con->conectar () == true) {
			$query = "call puestotrabajoEliminar($id)";
			$result = @mysql_query ( $query );
			if (! $result) {
				$resultado = false;
			} else {
				$resultado = true;
			}
		}
		return $resultado;
	}
	function modificar($id, $Puesto) {
		$resultado = true;
		$con = new DBConexion ();
		if ($con->conectar () == true) {
			$query = "call puestoTrabajoModificar(
		'" . $Puesto->get_puestolaboral () . "', 
		" . $Puesto->get_preciohora () . ", $id)";
			
			$result = @mysql_query ( $query );
			
			if (! $result) {
				$resultado = false;
			} else {
				$resultado = true;
			}
		}
		return $resultado;
	}
}

?>