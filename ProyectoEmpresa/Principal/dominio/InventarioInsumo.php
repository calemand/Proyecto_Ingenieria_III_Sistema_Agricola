<?php 
	class InventarioInsumo{
		
		private	$id;
		private	$idCategoria;
		private	$nombre; 
		private	$stock;	
		

		function __construct($id,$idCategoria,$nombre,$stock){
		$this->set_id($id);
		$this->set_idCategoria($idCategoria);
		$this->set_nombre($nombre); 
		$this->set_stock($stock);	
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_idCategoria($idCategoria) {
			$this->idCategoria = $idCategoria;
		}
		public function get_idCategoria() {
			return $this->idCategoria;
		}

		public function set_nombre($nombre) {
			$this->nombre = $nombre;
		}
		public function get_nombre() {
			return $this->nombre;
		}

		public function set_stock($stock) {
			$this->stock = $stock;
		}
		public function get_stock() {
			return $this->stock;
		}

		

	}
?>