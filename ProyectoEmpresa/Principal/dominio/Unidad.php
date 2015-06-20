<?php 
	class Unidad{
		
		private	$nombre;
		private	$id;


		function __construct($nombre,$id){
		$this->set_nombre($nombre);
		$this->set_id($id);
	
		}


		public function set_nombre($nombre) {
			$this->nombre = $nombre;
		}
		public function get_nombre() {
			return $this->nombre;
		}

		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}


	}
?>