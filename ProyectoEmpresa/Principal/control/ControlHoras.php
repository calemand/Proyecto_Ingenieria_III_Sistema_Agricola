<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataHoras.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Horas.php");

	class ControlHora {
		
		function ControlHora(){
		}

		function seleccionar(){

			$data = new DataHora();
			
			$lista = $data->get_Horas();
		
			echo json_encode($lista);
		}
		
		function get_Hora(){

			$id = $_POST['id'];

			$data = new DataHora();
			
			$lista = $data->get_Hora($id);

			echo json_encode($lista);

		}

		function insertar(){

			
			$identificacion = $_POST['identificacion'];
			$fecha=$_POST['fecha'];
			$inicio=$_POST['inicio'];
			$salida=$_POST['salida'];
			$puesto=$_POST['puesto'];

			if (empty($identificacion) ||empty($fecha)||empty($inicio)||empty($puesto)) {
				echo "Debe llenar todo formulario para realizar el registro<b>";
			}else{

				$Hora = new Hora (1,$identificacion,$fecha,$inicio,$salida,$puesto);

				$data = new DataHora();

				if($data->insertar($Hora)==true){

					echo "1";
				}else{
					echo "0";
				}
			}	
		}

		function modificar(){

			$id = $_POST['id'];
			$identificacion = $_POST['identificacion'];
			$fecha=$_POST['fecha'];
			$inicio=$_POST['inicio'];
			$salida=$_POST['salida'];
			$puesto=$_POST['puesto'];

			if (empty($identificacion) ||empty($fecha)||empty($inicio)||empty($salida)||empty($puesto) ){
				echo "Debe llenar todo formulario para realizar la actualización<b>";
			}else{

				$Hora = new Hora ($id,$identificacion,$fecha,$inicio,$salida,$puesto);

				$data = new DataHora();			
				
				if($data->modificar($id, $Hora)==true){

					echo "1";
				}else{
					echo "0";
				}
			}
		}

		function eliminar(){
			$data = new DataHora();
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
		$control = new ControlHora;

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
		$control->get_Hora();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>