<?php 
	class SalidaInsumo{
		
		private	$id;
		private	$idInsumo;
		private	$cultivo;
		private	$fecha;
		private	$cantidad;	
		

		function __construct($id,$idInsumo,$cultivo,$fecha,$cantidad){
		$this->set_id($id);
		$this->set_idInsumo($idInsumo);
		$this->set_cultivo($cultivo);	
		$this->set_fecha($fecha);
		$this->set_cantidad($cantidad);
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_idInsumo($idInsumo) {
			
			$this->idInsumo = $idInsumo;
		}
		public function get_idInsumo() {
			return $this->idInsumo;
		}

		
		public function set_cultivo($cultivo) {
			$this->cultivo = $cultivo;
		}
		public function get_cultivo() {
			return $this->cultivo;
		}


		public function set_fecha($fecha) {
			$this->fecha = $fecha;
		}
		public function get_fecha() {
			return $this->fecha;
		}

		public function set_cantidad($cantidad) {
			$this->cantidad = $cantidad;
		}
		public function get_cantidad() {
			return $this->cantidad;
		}

		

	}
?>