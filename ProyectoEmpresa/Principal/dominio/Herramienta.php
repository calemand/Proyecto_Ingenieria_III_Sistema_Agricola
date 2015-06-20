<?php 
	class Herramienta{
		
		private	$id;
		private	$nombre;
		private $marca; 
		private	$descripcion;	
		

		function __construct($id,$nombre,$marca,$descripcion){
		$this->set_id($id);
		$this->set_nombre($nombre); 
		$this->set_marca($marca);
		$this->set_descripcion($descripcion);	
		
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

		

	}
?>