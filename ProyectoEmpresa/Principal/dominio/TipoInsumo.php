
<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class TipoInsumo {

	private $idTipoInsumo;
	private $nombreTipoInsumo;


	function __construct ($idTipoInsumo,$nombreTipoInsumo){
		
	$this->set_idTipoInsumo($idTipoInsumo);
	$this->set_nombreTipoInsumo($nombreTipoInsumo);
	}
	
	
	public function set_idTipoInsumo($idTipoInsumo) {
		$this->idTipoInsumo = $idTipoInsumo;
	}
	public function get_idTipoInsumo() {
		return $this->idTipoInsumo;
	}
	public function set_nombreTipoInsumo($nombreTipoInsumo) {
		$this->nombreTipoInsumo = $nombreTipoInsumo;
	}
	public function get_nombreTipoInsumo() {
		return $this->nombreTipoInsumo;
	}

}
?>
