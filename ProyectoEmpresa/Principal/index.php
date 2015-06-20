<?php
include ("./control/ControlUsuario.php");

$control = new ControlUsuario();
$usuario = $control->get_usuarios();
if(!$usuario){
	 header("location:./interfaz/usuario");
	}else{
		session_start();
		if (!isset($_SESSION['usuario'])){
		    header("location:./interfaz/login");
		}else{
			header("location:./interfaz/inicio");
	}
}       
?>