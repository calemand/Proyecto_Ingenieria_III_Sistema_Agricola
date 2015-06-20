<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataEmpleado.php");
	include ("../data/DBConexion.php");
	include ("../dominio/Empleado.php");

	class ControlEmpleado {
		
		function ControlEmpleado(){
		}

		function seleccionar(){

			$data = new DataEmpleado();
			
			$lista = $data->get_Empleados();
		
			echo json_encode($lista);
		}
		
		function get_empleado(){

			$cedula = $_POST['cedula'];

			$data = new DataEmpleado();
			
			$lista = $data->get_empleado($cedula);
		
			echo json_encode($lista);

		}

		function getCedulas(){
			$data = new DataEmpleado();
			echo json_encode($data->getCedulas());
		}

		function insertar(){

			$cedula = $_POST['cedula'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];

			$correo = $_POST['correo'];
			$telefono = $_POST['telefono'];
			$direccion = $_POST['direccion'];

			$genero = $_POST['genero'];
			
			if (empty($cedula) ||empty($nombre)||empty($apellidos)||empty($telefono)||empty($direccion)){
				echo "Debe llenar todo el formulario para realizar el registro<b>";
			}else{
				
				$empleado = new Empleado ($cedula,'',$nombre,$apellidos,$correo,$telefono,$direccion," ",$genero);

				$dataEmpleado = new DataEmpleado();

				if($dataEmpleado->insertar($empleado)==true){
					echo "1";
				}else{
					echo "0";
				}
			}
		}

		function modificar(){
			
			$id = $_POST['id'];
			
			$cedula = $_POST['cedula'];
			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];

			$correo = $_POST['correo'];
			$telefono = $_POST['telefono'];
			$direccion = $_POST['direccion'];

			$genero = $_POST['genero'];
			if (empty($cedula) ||empty($nombre)||empty($apellidos)||empty($telefono)||empty($direccion)||empty($genero)  ){
				echo "Debe llenar todo el formulario para realizar la actualización<b>";
			}else{
				$dataEmpleado = new DataEmpleado();


				$empleado = new Empleado ($cedula,0,$nombre,$apellidos,$correo,$telefono,$direccion," ",$genero);
				if($dataEmpleado->modificar($id, $empleado)==true){
				echo "1";
				}else{
					echo "0";
				}
			}
			
		}

		function eliminar(){
			$data = new DataEmpleado();
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
		$control = new ControlEmpleado;

		if($accion=="seleccionar"){
		$control->seleccionar();
		}
		if($accion=="getCedulas"){
		$control->getCedulas();
		}

		if($accion=="insertar"){
		$control->insertar();
		}

		if($accion=="actualizar"){
		$control->modificar();
		}
		if($accion=="obtener"){
		$control->get_empleado();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>