<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataEstadoHerramienta.php");
	include ("../data/DBConexion.php");
	

	class ControlEstadoHerramienta {
		
		function ControlEstadoHerramienta(){
		}
	
		function seleccionar(){

			$data = new DataEstadoHerramienta();

			$lista = $data->get_tipoEstado();
		
			echo json_encode($lista);	

		}
	}
		
		$accion=$_POST['accion'];
		$control = new ControlEstadoHerramienta;
		

		if($accion=="seleccionar"){
		$control->seleccionar();

		}

		

?>