<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataCosecha.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Cosecha.php");

	class ControlCosecha {
		
		function ControlCosecha(){
		}

		function seleccionar(){

			$data = new DataCosecha();
			
			$lista = $data->get_cosechas();
		
			echo json_encode($lista);
		}
		
		function get_cosecha(){

			$id = $_POST['id'];

			$data = new DataCosecha();
			
			$lista = $data->get_cosecha($id);
		
			echo json_encode($lista);

		}

		function insertar(){
			
            $unidadMedicion = $_POST['idMedida'];
            $producto = $_POST['idProducto'];
            $usuario = $_POST['idUsuario'];
            $cantidad = $_POST['cantidad'];
            $precioUnitario= $_POST['precio'];
            $fecha = $_POST['fecha'];

			if (empty($unidadMedicion) ||empty($producto)||empty($cantidad)||empty($precioUnitario)||empty($fecha)  ){
				echo "Debe llenar todo formulario para realizar el registro<b>";
			}else{
				$cosecha = new Cosecha(0, $unidadMedicion, $producto, $usuario, $cantidad, $precioUnitario, $fecha);
				$dataCosecha = new DataCosecha();

				if($dataCosecha->insertar($cosecha)==true){
					echo "1";
				}else{
					echo "0";
				}
	
			}


		}

		function modificar(){

			$idReporteCosecha= $_POST['id'];
			$unidadMedicion= $_POST['idMedida'];
			$producto= $_POST['idProducto'];
			$usuario= $_POST['idUsuario'];
			$cantidad= $_POST['cantidad'];
			$precioUnitario= $_POST['precio'];
			$fecha= $_POST['fecha'];
           
			if (empty($unidadMedicion) ||empty($producto)||empty($cantidad)||empty($precioUnitario)||empty($fecha)  ){
					echo "Debe llenar todo formulario para realizar la actualización<b>";
			}else{
				$data = new DataCosecha();


				$cosecha = new Cosecha ($idReporteCosecha, $unidadMedicion, $producto, $usuario, $cantidad, $precioUnitario, $fecha);
				
				if($data->modificar($cosecha)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
			
		}

		function eliminar(){
			$data = new DataCosecha();
			$id=$_POST['id'];
			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al eliminar datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlCosecha();

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
		$control->get_cosecha();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>