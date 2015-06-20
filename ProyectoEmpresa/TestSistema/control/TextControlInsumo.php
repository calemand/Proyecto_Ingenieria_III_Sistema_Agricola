<?php
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DBConexion.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DataInsumo.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\control\ControlInsumo.php');

class TestControlInsumo extends PHPUnit_Framework_TestCase{
	
	function testInsertar(){
		$control = new ControlInsumo();
		$this->assertFalse($control->insertar());
	}
	function testModificar(){
		$control = new ControlInsumo();
		$this->assertFalse($control->modificar());
	}
	function testEliminar(){
		$control = new ControlInsumo();
		$this->assertFalse($control->eliminar());
	}

	function testGet_insumo(){
		$control = new ControlInsumo();
		$this->assertFalse($control->get_insumo());
	} 
	
	function testSeleccionar(){
		$control = new ControlInsumo();
	
		$this->assertEquals(1,sizeof($control->seleccionar()));
	}
}
?>