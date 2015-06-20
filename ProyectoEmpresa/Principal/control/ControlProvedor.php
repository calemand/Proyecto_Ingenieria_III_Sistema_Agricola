<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataProvedor.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Provedor.php");

	class ControlProvedor {
		
		function ControlProvedor(){
		}

		function seleccionar(){

			$data = new DataProvedor();
			
			$lista = $data->get_provedores();
		
			echo json_encode($lista);
		}
		
		function get_provedor(){

			$id = $_POST['id'];

			$data = new DataProvedor();
			
			$lista = $data->get_provedor($id);

			echo json_encode($lista);

		}

		function insertar(){

			
			$nombre = $_POST['nombre'];
			$cedula=$_POST['cedula'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$cuenta=$_POST['cuenta'];
			$banco = $_POST['banco'];
			if (empty($cedula) ||empty($nombre)||empty($direccion)||empty($telefono)||empty($email)||empty($cuenta)||empty($banco)){
				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{
			
				$provedor = new Provedor (1,$nombre,$cedula,$direccion,$telefono,$email,$cuenta,$banco);

				$data = new DataProvedor();

				if($data->insertar($provedor)==true){

					echo "1";
				}else{
					echo "0";
				}
			}	
		}

		function modificar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$cedula=$_POST['cedula'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$cuenta=$_POST['cuenta'];
			$banco = $_POST['banco'];
			if (empty($cedula) ||empty($nombre)||empty($direccion)||empty($telefono)||empty($email)||empty($cuenta)||empty($banco)){
				echo "Debe llenar todo el formulario para realizar la actualización<b>";
			}else{
			
				$provedor = new Provedor ($id,$nombre,$cedula,$direccion,$telefono,$email,$cuenta,$banco);

				$data = new DataProvedor();			
				
				if($data->modificar($id, $provedor)==true){

					echo "1";
				}else{
					echo "0";
				}
			}
			
		}

		function eliminar(){
			$data = new DataProvedor();
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
		$control = new ControlProvedor;

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
		$control->get_provedor();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}
?>