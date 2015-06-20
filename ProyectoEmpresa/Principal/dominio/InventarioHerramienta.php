<?php 
	class InventarioHerramienta{
		
		private	$id;
		private	$nombre; 
		private $marca;
		private $descripcion;
		private	$stock;	
		

		function __construct($id,$nombre,$marca,$descripcion,$stock){
		$this->set_id($id);
		$this->set_nombre($nombre);
		$this->set_marca($marca); 
		$this->set_descripcion($descripcion); 		
		$this->set_stock($stock);	
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}	

		public function set_nombre($nombre) {
			$this->nombre = $nombre;
		}
		public function get_nombre() {
			return $this->nombre;
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

		public function set_stock($stock) {
			$this->stock = $stock;
		}
		public function get_stock() {
			return $this->stock;
		}

		

	}
?>