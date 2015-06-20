<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataInventarioInsumo.php");
	include ("../data/DBConexion.php");
	include ("../dominio/InventarioInsumo.php");

	class ControlInventarioInsumo {
		
		function ControlInventarioInsumo(){
		}

		function seleccionar(){

			$data = new DataInventarioInsumo();
			
			$lista = $data->get_inventarios();
		
			echo json_encode($lista);
		}
		
		
		function get_inventario(){

			$idInsumo = $_POST['idInsumo'];

			$data = new DataInventarioInsumo();
			
			$lista = $data->get_inventario($idInsumo);
		
			echo json_encode($lista);			

		}


		function insertar(){

			$categoria = $_POST['categoria'];
			$nombre = $_POST['nombre'];
			$descripcion=$_POST['descripcion'];
			
			
			$insumo = new InventarioInsumo (1,$categoria,$nombre,$descripcion);

			$data = new DataInventarioInsumo();

			if($data->insertar($insumo)==true){
				echo "1";
				}else{
					echo "0";
			}
	
		}

		function modificar(){

			$id = $_POST['id'];
			$categoria = $_POST['categoria'];
			$nombre = $_POST['nombre'];
			$descripcion=$_POST['descripcion'];
           

			$data = new DataInventarioInsumo();


			$insumo = new InventarioInsumo ($id,$categoria,$nombre,$descripcion);
			
			if($data->modificar($id, $insumo)==true){
				echo "1";
				}else{
					echo "0";
			}
			
		}

		function eliminar(){

			$data = new DataInventarioInsumo();
			$id=$_POST['idInsumo'];

			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al eliminar datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlInventarioInsumo;

		if($accion=="seleccionar"){
		$control->seleccionar();
		}

		if($accion=="insertar"){
		$control->insertar();
		}

		if($accion=="actualizar"){
		$control->modificar();
		}
		if($accion=="obtener"){
		$control->get_inventario();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>