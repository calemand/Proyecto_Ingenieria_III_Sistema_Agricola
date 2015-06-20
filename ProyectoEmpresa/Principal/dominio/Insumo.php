<?php 
	class Insumo{
		
		private	$id;
		private	$categoria;
		private	$nombre; 
		private	$descripcion;	
		

		function __construct($id,$categoria,$nombre,$descripcion){
		$this->set_id($id);
		$this->set_categoria($categoria);
		$this->set_nombre($nombre); 
		$this->set_descripcion($descripcion);	
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_categoria($categoria) {
			$this->categoria = $categoria;
		}
		public function get_categoria() {
			return $this->categoria;
		}

		public function set_nombre($nombre) {
			$this->nombre = $nombre;
		}
		public function get_nombre() {
			return $this->nombre;
		}

		public function set_descripcion($descripcion) {
			$this->descripcion = $descripcion;
		}
		public function get_descripcion() {
			return $this->descripcion;
		}

		

	}
?>