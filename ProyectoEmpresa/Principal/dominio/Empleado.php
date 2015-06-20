<?php 
	class Empleado{
		
		private	$cedula;
		private	$TipoEmpleado;
		private	$nombre; 
		private	$apellidos;	
		private	$correo; 
		private	$telefono;
		private	$direccion; 
		private	$contrasena;
		private	$genero;

		function __construct($cedula,$TipoEmpleado,$nombre,$apellidos,$correo,$telefono,$direccion,$contrasena,$genero){
		$this->set_cedula($cedula);
		$this->set_TipoEmpleado($TipoEmpleado);
		$this->set_nombre($nombre); 
		$this->set_apellidos($apellidos);	
		$this->set_correo($correo); 
		$this->set_telefono($telefono);
		$this->set_direccion($direccion); 
		$this->set_contrasena($contrasena);
		$this->set_genero($genero);
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

		public function set_apellidos($apellidos) {
			$this->apellidos = $apellidos;
		}
		public function get_apellidos() {
			return $this->apellidos;
		}

		public function set_correo($correo) {
			$this->correo = $correo;
		}
		public function get_correo() {
			return $this->correo;
		}

		public function set_telefono($telefono) {
			$this->telefono = $telefono;
		}
		public function get_telefono() {
			return $this->telefono;
		}

		public function set_direccion($direccion) {
			$this->direccion = $direccion;
		}
		public function get_direccion() {
			return $this->direccion;
		}

		public function set_contrasena($contrasena) {
			$this->contrasena = $contrasena;
		}
		public function get_contrasena() {
			return $this->contrasena;
		}

		public function set_genero($genero) {
			$this->genero = $genero;
		}
		public function get_genero() {
			return $this->genero;
		}

	}
?>