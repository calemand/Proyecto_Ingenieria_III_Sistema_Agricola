<?php 
	class EntradaHerramienta{
		
		private	$id;
		private	$idHerramienta;
		private $marca; 
		private	$descripcion;
		private	$idProvedor;
		private	$factuta;
		private	$fecha;	
		private	$cantidad;
		

		function __construct($id,$idHerramienta,$idProvedor,$factuta,$fecha,$cantidad){
		$this->set_id($id);
		$this->set_idHerramienta($idHerramienta); 
		$this->set_idProvedor($idProvedor);
		$this->set_factuta($factuta);
		$this->set_fecha($fecha);
		$this->set_cantidad($cantidad);	
		
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

		public function set_idProvedor($idProvedor) {
			$this->idProvedor = $idProvedor;
		}
		public function get_idProvedor() {
			return $this->idProvedor;
		}

		public function set_factuta($factuta) {
			$this->factuta = $factuta;
		}
		public function get_factuta() {
			return $this->factuta;
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