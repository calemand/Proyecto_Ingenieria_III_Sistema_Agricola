<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataHerramienta.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Herramienta.php");
	include ("../data/DataInventarioHerramienta.php");
	include ("../dominio/InventarioHerramienta.php");

	class ControlHerramienta {
		
		function ControlHerramienta(){
		}

		function seleccionar(){

			$data = new DataHerramienta();
			
			$lista = $data->get_herramientas();
		
			echo json_encode($lista);
		}
		
		
		function get_herramienta(){

			$id = $_POST['id'];

			$data = new DataHerramienta();
			
			$lista = $data->get_herramienta($id);
		
			echo json_encode($lista);			

		}


		function insertar(){
		
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$descripcion=$_POST['descripcion'];
			
			if(empty($nombre) ||empty($marca)||empty($descripcion)){
				echo "Debe llenar todo formulario para realizar el registro<b>";
			}else{

				$herramienta = new Herramienta (1,$nombre,$marca,$descripcion);
				
				$data = new DataHerramienta();

				if($data->insertar($herramienta)==true){
					echo "1";
				}else{
					echo "0";
				}
			}	
		}

		function modificar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$descripcion=$_POST['descripcion'];
           
			if(empty($nombre) ||empty($marca)||empty($descripcion)){
				echo "Debe llenar todo formulario para realizar la actualización<b>";
			}else{
				$data = new DataHerramienta();
				$herramienta = new Herramienta ($id,$nombre,$marca,$descripcion);	
				if($data->modificar($id, $herramienta)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
			
		}

		function eliminar(){

			$data = new DataHerramienta();
			$id=$_POST['id'];

			if($data->eliminar($id)!=false)
			{
				echo "1";
			}else{
				echo "0";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlHerramienta;

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
		$control->get_herramienta();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>