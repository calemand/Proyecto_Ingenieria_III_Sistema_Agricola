<?php

	class Hora {

        private	$id;
		private	$identificacion;
		private	$fecha; 
		private	$inicio;
		private	$final;
		private	$puesto;
		 
			
		

		function __construct($id,$identificacion,$fecha,$inicio,$final,$puesto){

		$this->set_id($id);
		$this->set_identificacion($identificacion);
		$this->set_fecha($fecha); 
		$this->set_inicio($inicio); 
		$this->set_salida($final);	
		$this->set_puesto($puesto);
		}


      	public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_identificacion($identificacion) {
			$this->identificacion = $identificacion;
		}
		public function get_identificacion() {
			return $this->identificacion;
		}

		public function set_fecha($fecha) {
			$this->fecha = $fecha;
		}
		public function get_fecha() {
			return $this->fecha;
		}

		public function set_inicio($inicio) {
			$this->inicio = $inicio;
		}
		public function get_inicio() {
			return $this->inicio;
		}

		public function set_salida($final) {
			$this->final = $final;
		}
		public function get_salida() {
			return $this->final;
		}
		public function set_puesto($puesto) {
			$this->puesto = $puesto;
		}
		public function get_puesto() {
			return $this->puesto;
		}
	}

?>		