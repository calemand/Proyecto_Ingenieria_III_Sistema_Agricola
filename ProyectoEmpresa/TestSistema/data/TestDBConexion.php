<?php
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DBConexion.php');
class TestDBConexion extends PHPUnit_Framework_TestCase {
	
	/* Test de Conexion */
	function testConectar() {
		$con = new DBConexion ();
		$this->assertTrue ( $con->conectar () );
	}
	/* Test para ver si se devuel los 2 tipos de usuario del sistema */
	function testgetData() {
		$con = new DBConexion ();
		$this->assertEquals ( 2, sizeof ( $con->getData ( "call tipousuarioSeleccionar()" ) ) );
	}
	function testgetRow() {
		$con = new DBConexion ();
		$this->assertEquals ( 1, sizeof ( $con->getRow ( "call categoriaProductoSeleccionar(7)" ) ) );
	}
	function testgetDataTable() {
		$con = new DBConexion ();
		$this->assertEquals ( 1, sizeof ( $con->getData ( "call categoriaProductoSeleccionarTodo()" ) ) );
	}
}
?>