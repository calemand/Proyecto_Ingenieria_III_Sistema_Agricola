<?php 
	class SalidaHerramienta{
		
		private	$id;
		private	$idHerramienta;
		private $marca; 
		private	$descripcion;		
		private	$fecha;	
		private	$cantidad;
		private	$detalle;
		

		function __construct($id,$idHerramienta,$marca,$descripcion,$fecha,$cantidad,$detalle){
		$this->set_id($id);
		$this->set_idHerramienta($idHerramienta); 
		$this->set_marca($marca);
		$this->set_descripcion($descripcion);		
		$this->set_fecha($fecha);
		$this->set_cantidad($cantidad);	
		$this->set_detalle($detalle);
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_idHerramienta($idHerramienta) {
			$this->idHerramienta = $idHerramienta;
		}
		public function get_idHerramienta() {
			return $this->idHerramienta;
		}

		public function set_marca($marca) {
			$this->marca = $marca;
		}
		public function get_marca() {
			return $this->marca;
		}

		public function set_descripcion($descripcion) {
			$this->descripcion = $descripcion;
		}
		public function get_descripcion() {
			return $this->descripcion;
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

		public function set_detalle($detalle) {
			$this->detalle = $detalle;
		}
		public function get_detalle() {
			return $this->detalle;
		}

		

	}
?>