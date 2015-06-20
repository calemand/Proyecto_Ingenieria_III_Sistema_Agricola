<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//nombre de la clase
class Cosecha {
//declaracion de variables privadas

	private $idReporteCosecha; 
	private $unidadMedicion;
	private $producto; 
	private $usuario;
	private $cantidad;
	private $precioUnitario;
	private $fecha; 

//declaracion de la funcion __construct
	function __construct ($idReporteCosecha, $unidadMedicion, $producto, $usuario, $cantidad, $precioUnitario, $fecha){
	$this->set_idReporteCosecha($idReporteCosecha);
	$this->set_unidadMedicion($unidadMedicion);
	$this->set_producto($producto);
	$this->set_usuario($usuario) ;
	$this->set_cantidad($cantidad) ;
	$this->set_precioUnitario($precioUnitario) ;
	$this->set_fecha($fecha) ;
	}
	
	
	public function set_idReporteCosecha($idReporteCosecha) {
		$this->idReporteCosecha = $idReporteCosecha;
	}
	public function get_idReporteCosecha() {
		return $this->idReporteCosecha;
	}

	public function set_unidadMedicion($unidadMedicion) {
		$this->unidadMedicion = $unidadMedicion;
	}
	public function get_unidadMedicion() {
		return $this->unidadMedicion;
	}

	public function set_producto($producto) {
		$this->producto = $producto;
	}
	public function get_producto() {
		return $this->producto;
	}

	public function set_usuario($usuario) {
		$this->usuario = $usuario;
	}
	public function get_usuario() {
		return $this->usuario;
	}
	public function set_cantidad($cantidad) {
		$this->cantidad = $cantidad;
	}
	public function get_cantidad() {
		return $this->cantidad;
	}
	public function set_precioUnitario($precioUnitario) {
		$this->precioUnitario = $precioUnitario;
	}
	public function get_precioUnitario() {
		return $this->precioUnitario;
	}
	public function set_fecha($fecha) {
		$this->fecha = $fecha;
	}
	public function get_fecha() {
		return $this->fecha;
	}
}
?>