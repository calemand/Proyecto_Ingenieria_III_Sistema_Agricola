<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataPuesto.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Puesto.php");

	class ControlPuesto {
		
		function ControlPuesto(){
		}

		function seleccionar(){

			$data = new DataPuesto();
			
			$lista = $data->get_Puestos();
		
			echo json_encode($lista);
			return $lista;
		}
		
		function get_Puesto(){
			$resultado = true;
			
			if(empty($_POST['id']))
			{
				$resultado = false;
			}else {
				$id = $_POST['id'];
				
				$data = new DataPuesto();
					
				$lista = $data->get_Puesto($id);
				
				echo json_encode($lista);
			}			
			return $resultado;

		}

		function insertar(){

			$resultado = true;
			
			if (empty($_POST['puestolaboral']) ||empty($_POST['preciohora'])){
				$resultado = false;
				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{	
				$puestolaboral = $_POST['puestolaboral'];
				$preciohora=$_POST['preciohora'];
				$Puesto = new Puesto (1,$puestolaboral,$preciohora);

				$data = new DataPuesto();

				if($data->insertar($Puesto)==true){

					echo "1";
				}else{
					echo "0";
				}
			}
			return $resultado;
		}

		function modificar(){
			$resultado = true;
			

			if (empty($_POST['puestolaboral']) ||empty($_POST['preciohora'])){
				$resultado = false;
				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{	
				$id = $_POST['id'];
				$puestolaboral = $_POST['puestolaboral'];
				$preciohora=$_POST['preciohora'];
				$Puesto = new Puesto ($id,$puestolaboral,$preciohora);

				$data = new DataPuesto();			
				
				if($data->modificar($id, $Puesto)==true){

					echo "1";
				}else{
					echo "0";
				}
			}		
			return $resultado;
		}

		function eliminar(){
			$resultado = true;
			$data = new DataPuesto();
			if(empty($_POST['id'])){
				$resultado = false;
			}else {
				$id=$_POST['id'];
					
				if($data->eliminar($id)!=false)
				{
					$resultado = false;
					echo "1";
				}else{
					echo "0";
				}
				$resultado = false;
			}
			return $resultado;
		}
	}

		$accion=$_POST['accion'];
		$control = new ControlPuesto;

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
		$control->get_Puesto();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>