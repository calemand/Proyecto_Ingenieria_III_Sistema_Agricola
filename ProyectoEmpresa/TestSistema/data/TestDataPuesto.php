<?php
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DBConexion.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DataPuesto.php');
include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\dominio\Puesto.php');
class TestDataPuesto extends PHPUnit_Framework_TestCase {
	/* Test Para la insercion de puestos de trabajo  */
	function testInsertar() {
		$pt = new Puesto ( 0, '', 0 );
		$pt->set_id ( 100 );
		$pt->set_puestolaboral ( 'Prueva 1' );
		$pt->set_preciohora ( 1000 );
		$data = new DataPuesto ();
		$this->assertTrue ( $data->insertar ( $pt ) );
	}
	function testGetPuesto() {
		$data = new DataPuesto ();
		$this->assertEquals ( 1, sizeof ( $data->get_Puesto ( 20 ) ) );
	}
	function testModificar() {
		$data = new DataPuesto ();
		
		$pt = new Puesto ( 0, '', 0 );
		$pt->set_id ( 20 );
		$pt->set_puestolaboral ( 'Prueva 1' );
		$pt->set_preciohora ( 1000 );
		$this->assertTrue ( $data->modificar ( 20, $pt ) );
	}
	function testGetPuestos() {
		$data = new DataPuesto ();
		$this->assertEquals ( 0, sizeof ( $data->get_Puestos () ) );
	}
	function testEliminar() {
		$data = new DataPuesto ();
		$this->assertTrue ( $data->eliminar ( 20 ) );
	}
}
?>