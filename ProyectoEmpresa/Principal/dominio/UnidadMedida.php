<?php 
	class UnidadMedida{
		

		private	$idUnidadesMedicion;
		private	$nombreUnidad;
		

		function __construct($idUnidadesMedicion,$nombreUnidad){
		$this->set_idUnidadesMedicion($idUnidadesMedicion);
		$this->set_nombreUnidad($nombreUnidad);
		
		
		}


	public function set_idUnidadesMedicion($idUnidadesMedicion) {
		$this->idUnidadesMedicion = $idUnidadesMedicion;
	}
	public function get_idUnidadesMedicion() {
		return $this->idUnidadesMedicion;
	}

		public function set_nombreUnidad($nombreUnidad) {
			$this->nombreUnidad = $nombreUnidad;
		}
		public function get_nombreUnidad() {
			return $this->nombreUnidad;
		}


	}
?>