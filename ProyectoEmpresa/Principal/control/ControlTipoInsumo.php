<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataTipoInsumo.php");
	include ("../data/DBConexion.php");
	include ("../dominio/TipoInsumo.php");

class ControlTipoInsumo {

	function ControlTipoInsumo(){

	}
	
	function seleccionar(){

		$data = new DataTipoInsumo();

		$lista = $data->get_tipoInsumos();
		
		echo json_encode( $lista );	
	}		
}
		
	$accion=$_POST['accion'];
	$control = new ControlTipoInsumo();
	

	if($accion=="seleccionar"){
	$control->seleccionar();
	}
?>