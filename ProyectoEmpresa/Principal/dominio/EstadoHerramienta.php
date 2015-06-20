
<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class EstadoHerramienta {

	private $idEstado;
	private $estado;


	function __construct ($idEstado,$estado){
		
	$this->set_idEstado($idEstado);
	$this->set_estado($estado);
	}
	
	
	public function set_idEstado($idEstado) {
		$this->idEstado = $idEstado;
	}
	public function get_idEstado() {
		return $this->idEstado;
	}
	public function set_estado($estado) {
		$this->estado = $estado;
	}
	public function get_estado() {
		return $this->estado;
	}

}
?>
