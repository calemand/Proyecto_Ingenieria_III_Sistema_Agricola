<?php
	class ControlUsuario {
		
		function ControlUsuario(){
		}

		function get_usuarios(){
			
			include ("./data/DataUsuario.php");
			include ("./data/DBConexion.php");
			include ("./dominio/Usuario.php");
			$dtUsuario = new DataUsuario;
			
			$usuario = $dtUsuario->get_usuarios();
			
			if(!$usuario){
				return false;
			}else{
				return $usuario;
			}
		}

	function validarUsuario(){
		include ("../data/DataUsuario.php");
		include ("../data/DBConexion.php");
		include ("../dominio/Usuario.php");
		include ("../negocios/Encriptar.php");

		$cedula = $_POST['identificacion'];
		$pass=$_POST['contrasena'];
		
		if (empty($cedula)||empty($pass)){
			echo "Debe llenar todo el formulario para realizar el registro";
		}else{
			
			$dtUsuario = new DataUsuario;
			$emcryt = new Encriptar();

			$usuario = new Usuario($cedula,$emcryt->encrypt($pass),0);
			$usuarioData = $dtUsuario->get_login_usuario($usuario);
			
			if(!$usuarioData){	
			echo "Datos incorrectos";
			
			}else{
				echo "1";
				session_start();
				$_SESSION['usuario']=$cedula;
				$_SESSION['tipo']=$usuarioData[2];
				$_SESSION['tiempo']=time();
			}
		}
	}
	function seleccionar(){
		include ("../data/DataUsuario.php");
		include ("../data/DBConexion.php");
		include ("../dominio/Usuario.php");
		include ("../negocios/Encriptar.php");
		$data = new DataUsuario();
		$lista = $data->get_Usuarios();
		echo json_encode($lista);
	}
		

		function get_Usuario(){
			include ("../data/DataUsuario.php");
			include ("../data/DBConexion.php");
			include ("../dominio/Usuario.php");
			include ("../negocios/Encriptar.php");
			$cedula = $_POST['cedula'];

			$data = new DataUsuario();	
			$lista = $data->get_Usuario($cedula);
			echo json_encode($lista);
		}

		function insertar(){
			include ("../data/DataUsuario.php");
			include ("../data/DBConexion.php");
			include ("../dominio/Usuario.php");
			include ("../negocios/Encriptar.php");

			$e = new Encriptar();
		
			$tipo = $_POST['tipo'];
			$identificacion = $_POST['identificacion'];
			$contrasena=$_POST['contrasena'];	
			$Usuario = new Usuario ($identificacion,$e->encrypt($contrasena),$tipo);

			$dataUsuario = new DataUsuario();

			if($dataUsuario->insertar($Usuario)==true){
				echo "1";
			}else{
				echo "0";
			}
		}

	function modificar(){
		include ("../data/DataUsuario.php");
		include ("../data/DBConexion.php");
		include ("../dominio/Usuario.php");
		include ("../negocios/Encriptar.php");
		$id = $_POST['id'];
		$tipo = $_POST['tipo'];			
		$identificacion = $_POST['identificacion'];
		$contrasena = $_POST['contrasena'];
       
		if (empty($cedula)||empty($pass)){
			echo "Debe llenar todo el formulario para la actualización<b>";
		}else{
			$dataUsuario = new DataUsuario();

			$e= new Encriptar();
			$Usuario = new Usuario ($identificacion,$e->encrypt($contrasena),$tipo);
			
			if($dataUsuario->modificar($id, $Usuario)==true){
			echo "1";
			}else{
				echo "0";
			}
		}			
	}
		function eliminar(){
				include ("../data/DataUsuario.php");
		include ("../data/DBConexion.php");
		include ("../dominio/Usuario.php");
		include ("../negocios/Encriptar.php");
			$data = new DataUsuario();
			$id=$_POST['cedula'];
		
			if($data->eliminar($id)!=false)
			{
				echo "1";
			}else{
				echo "0";
			}
		}
	}
		$accion=$_POST['accion'];
		$control = new ControlUsuario;
		if($accion=="seleccionar"){	$control->seleccionar();}
		if($accion=="insertar"){$control->insertar();}
		if($accion=="actualizar"){$control->modificar();}
		if($accion=="obtener"){	$control->get_Usuario();}
		if($accion=="eliminar"){$control->eliminar();}
		if($accion=="validarUsuario"){$control->validarUsuario();}
?>