<?php 
	class PrestamoHerramienta{
		
		private	$id;
		private	$idEmpleado;
		private	$idHerramienta; 
		private	$fecha;	
		private	$estado;
		private	$observacion;

		function __construct($id,$idEmpleado,$idHerramienta,$fecha,$estado,$observacion){
		$this->set_id($id);
		$this->set_idEmpleado($idEmpleado);
		$this->set_idHerramienta($idHerramienta); 
		$this->set_fecha($fecha);
		$this->set_estado($estado);	
		$this->set_observacion($observacion);		
		
		}


		public function set_id($id) {
			$this->id = $id;
		}
		public function get_id() {
			return $this->id;
		}

		public function set_idEmpleado($idEmpleado) {
			$this->idEmpleado = $idEmpleado;
		}
		public function get_idEmpleado() {
			return $this->idEmpleado;
		}

		public function set_idHerramienta($idHerramienta) {
			$this->idHerramienta = $idHerramienta;
		}
		public function get_idHerramienta() {
			return $this->idHerramienta;
		}

		public function set_fecha($fecha) {
			$this->fecha = $fecha;
		}
		public function get_fecha() {
			return $this->fecha;
		}

		public function set_estado($estado) {
			$this->estado = $estado;
		}
		public function get_estado() {
			return $this->estado;
		}

		public function set_observacion($observacion) {
			$this->observacion = $observacion;
		}
		public function get_observacion() {
			return $this->observacion;
		}

		

	}
?>