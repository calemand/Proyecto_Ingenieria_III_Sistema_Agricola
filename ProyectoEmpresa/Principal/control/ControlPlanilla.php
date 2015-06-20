<?php
header('Content-Type: text/html; charset=ISO-8859-1');

include ("../data/DataPlanilla.php");
include ("../data/DBConexion.php");
include ("../dominio/Planilla.php");

class ControlPlanilla{

	function ControlPlanilla(){}

	function calcular()
	{
		$cedula = $_POST['cedula'];
		$fechaInicio = $_POST['fechaInicio'];
		$fechaFinal = $_POST['fechaFinal'];

		if(empty($cedula) || empty($fechaInicio) || empty($fechaFinal)){
			echo "0.1";
		}else{
			$parametros = array();
			array_push($parametros, $cedula);
			array_push($parametros, $fechaInicio);
			array_push($parametros, $fechaFinal);
			$data = new DataPlanilla();
			$lista = $data->calcular($parametros);
			if(!$lista){
				echo "0.2";
			}else{
				echo json_encode($lista);
			}
		}
	}

	function getSalario()
	{
		$cedula = $_POST['cedula'];
		$fechaInicio = $_POST['fechaInicio'];
		$fechaFinal = $_POST['fechaFinal'];
		$parametros = array();
		array_push($parametros, $cedula);
		array_push($parametros, $fechaInicio);
		array_push($parametros, $fechaFinal);
		$data = new DataPlanilla();
		echo json_encode($data->getSalario($parametros));
	}

	function insertar()
	{
	    $cedula = $_POST['cedula'];
	    $sueldo = $_POST['sueldo'];
	    $horas = $_POST['horas'];
	    $fecha = $_POST['fecha'];
	    $fechaInicio = $_POST['fechaInicio'];
	    $data = new DataPlanilla();
	    $planilla = new Planilla(0, $cedula, $fecha, $horas, $sueldo);
	    $data->insertar($planilla);
	    $parametros = array();
		array_push($parametros, $cedula);
		array_push($parametros, $fechaInicio);
		array_push($parametros, $fecha);
	    $data->cambiarEstado($parametros);
	}

	function getPlanillas(){
		$data = new DataPlanilla();
		echo json_encode($data->getPlanillas());
	}

}
	$accion = $_POST['accion'];
	$control = new ControlPlanilla();
	if($accion=="calcular"){
		$control->calcular();
	}
	if($accion=="getSalario"){
		$control->getSalario();
	}
	if($accion=="insertar"){
		$control->insertar();
	}
	if($accion=="getPlanillas"){
		$control->getPlanillas();
	}
?>