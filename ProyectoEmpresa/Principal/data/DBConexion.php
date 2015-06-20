<?php
class DBConexion {
	var $conect;
	function DBConexion() {
	}
	function getCon() {
		return $this->conect;
	}
	function conectar() {
		$dataBase = "dbmicroempreza";
		$servidor = "localhost";
		$usuario = "root";
		if (! ($con = @mysql_connect ( $servidor, $usuario, "" ))) {
			echo "<br>Error al conectar a la base de datos " . $dataBase . "<br>";
			exit ();
		}
		if (! @mysql_select_db ( $dataBase, $con )) {
			echo "<br>Error al seleccionar la base de datos " . $dataBase . "<br>";
			return false;
			exit ();
		}
		$this->conect = $con;
		return true;
	}
	function getDataTable($query) {
		$lista = array ();
		if ($this->conectar () == true) {
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				$cont = (count ( $row )) / 2;
				$listaTemp = array ();
				for($i = 0; $i < $cont; $i ++) {
					array_push ( $listaTemp, $row [$i] );
				}
				$id = "'" . $row [0] . "'";
				$btnEliminar = "<input type='button' onclick='eliminar(" . $id . ")'  value='Elimina'/>";
				array_push ( $listaTemp, $btnEliminar );
				$btnModificar = "<input type='button' onclick='modificar(" . $id . ")'' value='Modificar'/>";
				array_push ( $listaTemp, $btnModificar );
				array_push ( $lista, $listaTemp );
			}
		}
		if (! $lista) {
			return false;
		} else {
			return $lista;
		}
	}
	function getData($query) {
		$lista = array ();
		if ($this->conectar () == true) {
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				$cont = (count ( $row )) / 2;
				$listaTemp = array ();
				for($i = 0; $i < $cont; $i ++) {
					array_push ( $listaTemp, $row [$i] );
				}
				array_push ( $lista, $listaTemp );
			}
		}
		if (! $lista) {
			return false;
		} else {
			return $lista;
		}
	}
	function getRow($query) {
		$lista = array ();
		if ($this->conectar () == true) {
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				$cont = (count ( $row )) / 2;
				for($i = 0; $i < $cont; $i ++) {
					array_push ( $lista, $row [$i] );
				}
			}
		}
		if (! $lista) {
			return false;
		} else {
			return $lista;
		}
	}
}

?>