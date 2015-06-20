<?php 
	class Producto{
		
		private	$cedula;
		private	$TipoEmpleado;
		private	$nombre; 

		

		function __construct($cedula,$TipoEmpleado,$nombre){
		$this->set_cedula($cedula);
		$this->set_TipoEmpleado($TipoEmpleado);
		$this->set_nombre($nombre);	
		
		}


	public function set_cedula($cedula) {
		$this->cedula = $cedula;
	}
	public function get_cedula() {
		return $this->cedula;
	}

		public function set_TipoEmpleado($TipoEmpleado) {
			$this->TipoEmpleado = $TipoEmpleado;
		}
		public function get_TipoEmpleado() {
			return $this->TipoEmpleado;
		}

		public function set_nombre($nombre) {
			$this->nombre = $nombre;
		}
		public function get_nombre() {
			return $this->nombre;
		}
	}
?>