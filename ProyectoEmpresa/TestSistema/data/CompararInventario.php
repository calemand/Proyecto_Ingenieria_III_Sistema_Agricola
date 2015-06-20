<?php

include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DBConexion.php');

include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DataInsumo.php');

include ('F:\xampp\htdocs\ProyectoEmpresa\Principal\data\DataInventarioInsumo.php');

class CompararInventario extends PHPUnit_Framework_TestCase {
	
	function testCompararListas(){
// Comparacion de registro de insumos vs registro de insumos en el inventario
		$dataInsumo = new DataInsumo();
		$dataInventarios = new DataInventarioInsumo();
		
		$listaInsumo = $dataInsumo->get_insumos();
		$listaInventarios = $dataInventarios->get_inventarios();
		
		$sizeListaInsumo = sizeof($listaInsumo);
		$sizeListaInventario = sizeof($dataInventarios);
		
		$this->assertEquals($sizeListaInsumo,$sizeListaInventario);
	}
}
?>