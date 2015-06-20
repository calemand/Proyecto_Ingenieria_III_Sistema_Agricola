<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataPrestamoHerramienta.php");
	include ("../data/DBConexion.php");
	include ("../dominio/PrestamoHerramienta.php");

	class ControlPrestamoHerramienta {
		
		function ControlPrestamoHerramienta(){
		}

		function seleccionar(){

			$data = new DataPrestamoHerramienta();
			
			$lista = $data->get_PrestamoHerramientas();
		
			echo json_encode($lista);
		}
		
		function get_PrestamoHerramienta(){

			$id = $_POST['idPrestamo'];

			$data = new DataPrestamoHerramienta();
			
			$lista = $data->get_prestamoHerramienta($id);
		
			echo json_encode($lista);

		}

		function insertar(){

			$empleado = $_POST['empleado'];
			$herramienta = $_POST['herramienta'];
			$fecha = $_POST['fecha'];
			$estado = $_POST['estado'];
			$observacion = $_POST['observacion'];
			
			if (empty($empleado) ||empty($herramienta)||empty($fecha)||empty($estado)||empty($observacion)){
				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{

				$prestamoherramienta = new PrestamoHerramienta (1,$empleado,$herramienta,$fecha,$estado,$observacion);

				$dataprestamoherramienta = new DataPrestamoHerramienta();

				if($dataprestamoherramienta->insertar($prestamoherramienta)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
	
		}

		function modificar(){
			$id = $_POST['id'];
			
			$empleado = $_POST['empleado'];
			$herramienta = $_POST['herramienta'];
			$fecha = $_POST['fecha'];
			$estado = $_POST['estado'];
			$observacion = $_POST['observacion'];

			if (empty($empleado) ||empty($herramienta)||empty($fecha)||empty($estado)||empty($observacion)){
				echo "Debe llenar todo el formulario para realizar la actulización<b>";
			}else{

				$dataPrestamo = new DataPrestamoHerramienta();

				$prestamoherramienta = new PrestamoHerramienta ($id,$empleado,$herramienta,$fecha,$estado,$observacion);

				if($dataPrestamo->modificar($id, $prestamoherramienta)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
		}

		function eliminar(){
			$data = new DataPrestamoHerramienta();
			$id=$_POST['cedula'];
			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al elimi datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlPrestamoHerramienta;

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
		$control->get_PrestamoHerramienta();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>