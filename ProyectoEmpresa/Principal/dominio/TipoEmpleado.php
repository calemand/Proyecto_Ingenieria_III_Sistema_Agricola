
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//nombre de la clase
class TipoEmpleado {
//declaracion de variables privadas
	private $idTipoEmpleado;
	private $nombreTipoEmpleado;

//declaracion de la funcion __construct
	function __construct ($idTipoEmpleado,$nombreTipoEmpleado){
	$this->set_idTipoEmpleado($idTipoEmpleado);
	$this->set_nombreTipoEmpleado($nombreTipoEmpleado);
	}
	
	
	public function set_idTipoEmpleado($idTipoEmpleado) {
		$this->idTipoEmpleado = $idTipoEmpleado;
	}
	public function get_idTipoEmpleado() {
		return $this->idTipoEmpleado;
	}
	public function set_nombreTipoEmpleado($nombreTipoEmpleado) {
		$this->nombreTipoEmpleado = $nombreTipoEmpleado;
	}
	public function get_nombreTipoEmpleado() {
		return $this->nombreTipoEmpleado;
	}

}
?>
