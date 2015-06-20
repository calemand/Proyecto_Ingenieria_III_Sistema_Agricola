 
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//nombre de la clase
class TipoUsuario {
//declaracion de variables privadas
	private $idTipoUsuario;
	private $nombreTipoUsuario;

//declaracion de la funcion __construct
	function __construct ($idTipoUsuario,$nombreTipoUsuario){
	$this->set_idTipoUsuario($idTipoUsuario);
	$this->set_nombreTipoUsuario($nombreTipoUsuario);
	}
	
	
	public function set_idTipoUsuario($idTipoUsuario) {
		$this->idTipoUsuario = $idTipoUsuario;
	}
	public function get_idTipoUsuario() {
		return $this->idTipoUsuario;
	}
	public function set_nombreTipoUsuario($nombreTipoUsuario) {
		$this->nombreTipoUsuario = $nombreTipoUsuario;
	}
	public function get_nombreTipoUsuario() {
		return $this->nombreTipoUsuario;
	}

}
?>
