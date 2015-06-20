<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataInventarioHerramienta.php");
	include ("../data/DBConexion.php");
	include ("../dominio/InventarioHerramienta.php");


	class ControlInventarioHerramienta {
		
		function ControlInventarioHerramienta(){
		}

		function seleccionar(){

			$data = new DataInventarioHerramienta();
			
			$lista = $data->get_inventarios();
		
			echo json_encode($lista);
		}
		
		
		function get_inventario(){

			$idHerramienta = $_POST['idInsumo'];

			$data = new DataInventarioHerramienta();
			
			$lista = $data->get_inventario($idHerramienta);
		
			echo json_encode($lista);			

		}


		function insertar(){

			$categoria = $_POST['categoria'];
			$nombre = $_POST['nombre'];
			$descripcion=$_POST['descripcion'];
			
			if (empty($nombre) ||empty($descripcion) ||empty($categoria)  ){

				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{
				$herramienta = new InventarioHerramienta (1,$categoria,$nombre,$descripcion);

				$data = new DataInventarioInsumo();

				if($data->insertar($herramienta)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
		}

		function modificar(){

			$id = $_POST['id'];
			$categoria = $_POST['categoria'];
			$nombre = $_POST['nombre'];
			$descripcion=$_POST['descripcion'];
           
			if (empty($nombre) ||empty($descripcion) ||empty($categoria)  ){
				echo "Debe llenar todo el formulario para realizar la actualización<b>";
			}else{
				$data = new DataInventarioInsumo();

				$insumo = new InventarioInsumo ($id,$categoria,$nombre,$descripcion);
				
				if($data->modificar($id, $insumo)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
		}

		function eliminar(){

			$data = new DataInventarioInsumo();
			$id=$_POST['idInsumo'];

			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al elimi datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlInventarioHerramienta;

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