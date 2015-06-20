<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataUnidad.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Unidad.php");

	class ControlUnidad {
		
		function ControlUnidad(){
		}

		function seleccionar(){

			$data = new DataUnidad();
			
			$lista = $data->get_lista();
		
			echo json_encode($lista);
		}
		
		function get_unidad(){

			$id = $_POST['id'];

			$data = new DataUnidad();
			
			$lista = $data->get_unidad($id);
		
			echo json_encode($lista);
		}

		function insertar(){
			$nombre  = $_POST['nombre'];
			if (empty($nombre)  ){
				echo "Debe llenar el formulario para realizar el registro<b>";
			}else{
		
			$unidad = new Unidad ($nombre,0);
			
			$data = new DataUnidad();

			if($data->insertar($unidad)==true){
				echo "1";
			}else{
				echo "0";
			}
	
		}
	}

		function modificar(){
	
			$data = new DataUnidad();
			$nombre  = $_POST['nombre'];
			$id  = $_POST['id'];
			if (empty($nombre)  ){
				echo "Debe llenar el formulario para realizar el registro<b>";
			}else{
				$unidad = new Unidad($nombre,$id);

				if($data->modificar($unidad)==true){
					echo "1";
					}else{
						echo "0";
				}
			}
			
		}

		function eliminar(){
			$data = new DataUnidad();
			$id=$_POST['id'];
			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al elimi datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlUnidad;

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
		$control->get_unidad();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>