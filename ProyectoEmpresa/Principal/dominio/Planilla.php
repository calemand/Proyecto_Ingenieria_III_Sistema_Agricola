<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//nombre de la clase
class Planilla {
//declaracion de variables privadas
	private $idPlanilla; 
	private $cedula;
	private $fechaPago; 
	private $horas;
	private $salario;


//declaracion de la funcion __construct
	function __construct ($idPlanilla, $cedula, $fechaPago, $horas, $salario){
	$this->set_idPlanilla($idPlanilla);
	$this->set_cedula($cedula);
	$this->set_fechaPago($fechaPago);
	$this->set_horas($horas);
	$this->set_salario($salario);
	}
	
	public function set_idPlanilla($idPlanilla) {
		$this->idPlanilla = $idPlanilla;
	}
	public function get_idPlanilla() {
		return $this->idPlanilla;
	}

	public function set_cedula($cedula) {
		$this->cedula = $cedula;
	}
	public function get_cedula() {
		return $this->cedula;
	}	

	public function set_fechaPago($fechaPago) {
		$this->fechaPago = $fechaPago;
	}
	public function get_fechaPago() {
		return $this->fechaPago;
	}
	public function set_horas($horas) {
		$this->horas = $horas;
	}
	public function get_horas() {
		return $this->horas;
	}
	public function set_salario($salario) {
		$this->salario = $salario;
	}
	public function get_salario() {
		return $this->salario;
	}
}?>