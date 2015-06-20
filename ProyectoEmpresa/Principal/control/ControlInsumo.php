<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataInsumo.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Insumo.php");
	include ("../data/DataInventarioInsumo.php");
	include ("../dominio/InventarioInsumo.php");

	class ControlInsumo {
		
		function ControlInsumo(){
		}

		function seleccionar(){

			$data = new DataInsumo();
			
			$lista = $data->get_insumos();
		
			echo json_encode($lista);
			
			return $lista;
		}
		
		
		function get_insumo(){
			$resultado = true;
			if(empty($_POST['idInsumo']))
			{
				$resultado = false;
			}else {
				$idInsumo = $_POST['idInsumo'];
				
				$data = new DataInsumo();
					
				$lista = $data->get_insumo($idInsumo);
				
				echo json_encode($lista);
			}
			return $resultado;

		}


		function insertar(){
			$resultado = true;
			
			if (empty($_POST['nombre']) ||empty($_POST['descripcion']) ||empty( $_POST['categoria'])  ){
				echo "Debe llenar todo el formulario para realizar el registro<b>";
				$resultado = false;
			}else{
				$categoria = $_POST['categoria'];
				$nombre = $_POST['nombre'];
				$descripcion=$_POST['descripcion'];
				$insumo = new Insumo (1,$categoria,$nombre,$descripcion);
				$data = new DataInsumo();
				
				if($data->insertar($insumo)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
			return $resultado;
	
		}

		function modificar(){
			$resultado = true;
           
			if (empty($_POST['nombre']) ||empty($_POST['descripcion']) ||empty( $_POST['categoria'])  ){
				echo "Debe llenar todo el formulario para realizar la actualización<b>";
				$resultado = false;
			}else{
				
				$id = $_POST['id'];
				$categoria = $_POST['categoria'];
				$nombre = $_POST['nombre'];
				$descripcion=$_POST['descripcion'];
				
				$data = new DataInsumo();
				$insumo = new Insumo ($id,$categoria,$nombre,$descripcion);
			
				if($data->modificar($id, $insumo)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
			return $resultado;
		}

		function eliminar(){
			$resultado = true;
			
			if(empty($_POST['idInsumo']))
			{
				$resultado = false;
			}else {
				$data = new DataInsumo();
				$id=$_POST['idInsumo'];
				
				if($data->eliminar($id)!=false)
				{
					echo "1";
				}else{
					echo "0";
				}
			}
			return $resultado;
		}
	}

		$accion=$_POST['accion'];
		$control = new ControlInsumo;

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
		$control->get_insumo();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>