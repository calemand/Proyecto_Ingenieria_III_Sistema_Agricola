<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//nombre de la clase
class Usuario {
//declaracion de variables privadas
	private $cedula;
	private $pass;
	private $tipo;
//declaracion de la funcion __construct
	function __construct ($cedula,$pass,$tipo){
	$this->set_cedula($cedula);
	$this->set_pass($pass);
	$this->set_tipo($tipo);
	}
	
	
	public function set_cedula($cedula) {
		$this->cedula = $cedula;
	}
	public function get_cedula() {
		return $this->cedula;
	}
	public function set_pass($pass) {
		$this->pass = $pass;
	}
	public function get_pass() {
		return $this->pass;
	}
	public function set_tipo($tipo) {
		$this->tipo = $tipo;
	}
	public function get_tipo() {
		return $this->tipo;
	}
}
?>
