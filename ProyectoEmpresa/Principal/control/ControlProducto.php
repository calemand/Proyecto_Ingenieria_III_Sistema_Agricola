<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataProducto.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Producto.php");

	class ControProducto {
		
		function ControProducto(){
		}

		function seleccionar(){

			$data = new DataProducto();
			
			$lista = $data->get_productos();
	//	print_r($lista);
			echo json_encode($lista);
		}
		
		function get_Producto(){

			$idProducto = $_POST['idCategoria'];

			$data = new DataProducto();
			
			$lista = $data->get_producto($idProducto);
		
			echo json_encode($lista);
		}

		function get_tipoProducto(){

			$id = $_POST['id'];

			$data = new DataProducto();
			
			$lista = $data->get_tipoProducto($id);
		
			echo json_encode($lista);
		}

		function insertar(){

			$tipo = $_POST['tipo'];
			$nombre = $_POST['nombre'];
			
			if (empty($nombre)){
				echo "Debe llenar el formulario para realizar el registro<b>";
			}else{
				$producto = new Producto (1,$tipo,$nombre);

				$DataProducto = new DataProducto();

				if($DataProducto->insertar($producto)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
	
		}

		function modificar(){

			$id = $_POST['id'];
			$tipo = $_POST['tipo'];			
			$nombre = $_POST['nombre'];

          	if (empty($nombre)){
				echo "Debe llenar el formulario para realizar la actulización<b>";
			}else{

				$DataProducto = new DataProducto();

				$producto = new Producto ($id,$tipo,$nombre);
				
				if($DataProducto->modificar($id, $producto)==true){
					echo "1";
				}else{
					echo "0";
				}
			}			
		}

		function eliminar(){
			$data = new DataProducto();
			$id=$_POST['idProducto'];
			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al eliminar datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControProducto();

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
		$control->get_Producto();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}
		if($accion=="tipoProducto"){
		$control->get_tipoProducto();
		}




?>