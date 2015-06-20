<?php
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DBConexion.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DataPuesto.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\control\ControlPuesto.php');

class TestControlPuesto extends PHPUnit_Framework_TestCase{
	
	function testInsertar(){
		$control = new ControlPuesto();
		$this->assertFalse($control->insertar());
	}
	function testModificar(){
		$control = new ControlPuesto();
		$this->assertFalse($control->modificar());
	}
	function testEliminar(){
		$control = new ControlPuesto();
		$this->assertFalse($control->eliminar());
	}
	
	function testGet_Puesto(){
		$control = new ControlPuesto();
		$this->assertFalse($control->get_Puesto());
	}
	
	function testSeleccionar(){
		$control = new ControlPuesto();
		
		$this->assertEquals(2,sizeof($control->seleccionar()));
	}

}
?>