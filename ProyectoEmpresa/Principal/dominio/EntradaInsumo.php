<?php 
	class EntradaInsumo{
		
		private	$id;
		private	$idInsumo;
		private	$idProvedor; 
		private	$NFactura;
		private	$fecha;
		private	$cantidad;	
		

		function __construct($id,$idInsumo,$idProvedor,$NFactura,$fecha,$cantidad){
		$this->set_id($id);
		$this->set_idInsumo($idInsumo);
		$this->set_idProvedor($idProvedor); 
		$this->set_NFactura($NFactura);	
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

		public function set_idProvedor($idProvedor) {
			$this->idProvedor = $idProvedor;
		}
		public function get_idProvedor() {
			return $this->idProvedor;
		}

		public function set_NFactura($NFactura) {
			$this->NFactura = $NFactura;
		}
		public function get_NFactura() {
			return $this->NFactura;
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