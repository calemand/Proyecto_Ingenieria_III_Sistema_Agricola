<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataCategoriaProducto.php");
	include ("../data/DBConexion.php");
	include ("../dominio/CategoriaProducto.php");

	class ControlCategoriaProducto {
		
		function ControlCategoriaProducto(){
		}

		function seleccionar(){

			$data = new DataCategoriaProducto();
			
			$lista = $data->get_lista();
		
			echo json_encode($lista);
		}
		
		function get_categoriaProducto(){

			$id = $_POST['id'];

			$data = new DataCategoriaProducto();
			
			$lista = $data->get_categoriaProducto($id);
		
			echo json_encode($lista);
		}

		function insertar(){
			$nombre  = $_POST['nombre'];
			$condicion = true;
			if (empty($nombre)){
				echo "Por favor ingrese el nombre de la categoria del producto<br>";
			}else{
				if($condicion==true){
					$categoria = new CategoriaProducto ($nombre,0);
					$data = new DataCategoriaProducto();
					if($data->insertar($categoria)==true){
						echo "1";
					}else{
						echo "0";
					}
				}
			}
		}

		function modificar(){
	
			$data = new DataCategoriaProducto();
			$nombre  = $_POST['nombre'];
			$id  = $_POST['id'];
			if (empty($nombre)){
				echo "Por favor ingrese el nombre de la categoria del producto<br>";
				$condicion = false;
			}else{
				$categoria = new CategoriaProducto($nombre,$id);

				if($data->modificar($categoria)==true){
						echo "1";
					}else{
						echo "0";
				}
			}
			
		}

		function eliminar(){
			$data = new DataCategoriaProducto();
			$id=$_POST['id'];
			if($data->eliminar($id)!=false)
			{
				echo "1";
			}else{
				echo "0";
			}



		}
	}

	try{

		$accion=$_POST['accion'];
		$control = new ControlCategoriaProducto;

		if($accion=="seleccionar"){
			$lista = $control->seleccionar();
		}

		if($accion=="insertar"){
			$control->insertar();
		}

		if($accion=="actualizar"){
			$control->modificar();
		}
		if($accion=="obtener"){
			$control->get_CategoriaProducto();
		}
		if($accion=="eliminar"){
			$control->eliminar();
		}
	} catch (Exception $e) {
	    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	}

?>