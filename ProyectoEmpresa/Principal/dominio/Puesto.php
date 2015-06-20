<?php
class Puesto {
	private $id;
	private $puestolaboral;
	private $preciohora;
	function __construct($id, $puestolaboral, $preciohora) {
		$this->set_id ( $id );
		$this->set_puestolaboral ( $puestolaboral );
		$this->set_preciohora ( $preciohora );
	}
	public function set_id($id) {
		$this->id = $id;
	}
	public function get_id() {
		return $this->id;
	}
	public function set_puestolaboral($puestolaboral) {
		$this->puestolaboral = $puestolaboral;
	}
	public function get_puestolaboral() {
		return $this->puestolaboral;
	}
	public function set_preciohora($preciohora) {
		$this->preciohora = $preciohora;
	}
	public function get_preciohora() {
		return $this->preciohora;
	}
}
?>		