  <?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataTipoUsuario.php");
	include ("../data/DBConexion.php");
	include ("../dominio/TipoUsuario.php");

	class ControlTipoUsuario {
		
		function ControlTipoUsuario(){
		}
		// 
		function seleccionar(){

			$data = new DataTipoUsuario();
			// 5 ir a data tipo empleado por en metodo get_tipoEmpleados
			$lista = $data->get_tipoUsuarios();
		
			echo json_encode($lista);
		

		}		

	}
 
		$accion=$_POST['accion'];
		$control = new ControlTipoUsuario;
	

		if($accion=="seleccionar"){
		$control->seleccionar();

		}

		if($accion=="insertar"){
		$control->insertar();
		}

		if($accion=="modificar"){
		$control->modificar();
		}

		if($accion=="eliminar"){
		$control->eliminar();
		}

?>