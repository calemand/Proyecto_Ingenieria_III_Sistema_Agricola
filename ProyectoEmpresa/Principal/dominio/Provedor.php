<?php

	class Provedor {

        private	$id;
		private	$nombre;
		private	$cedula; 
		private	$direccion;
		private	$telefono;
		private	$email; 
		private	$cuenta;
		private	$banco;		

		function __construct($id,$nombre,$cedula,$direccion,$telefono,$email,$cuenta,$banco){

		$this->set_id($id);
		$this->set_nombre($nombre);
		$this->set_cedula($cedula); 
		$this->set_direccion($direccion); 
		$this->set_telefono($telefono);	
		$this->set_email($email);
		$this->set_cuenta($cuenta);
		$this->set_banco($banco); 
		
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

		public function set_cedula($cedula) {
			$this->cedula = $cedula;
		}
		public function get_cedula() {
			return $this->cedula;
		}

		public function set_direccion($direccion) {
			$this->direccion = $direccion;
		}
		public function get_direccion() {
			return $this->direccion;
		}

		public function set_telefono($telefono) {
			$this->telefono = $telefono;
		}
		public function get_telefono() {
			return $this->telefono;
		}

		public function set_email($email) {
			$this->email = $email;
		}
		public function get_email() {
			return $this->email;
		}

		public function set_cuenta($cuenta) {
			$this->cuenta = $cuenta;
		}
		public function get_cuenta() {
			return $this->cuenta;
		}

		public function set_banco($banco) {
			$this->banco = $banco;
		}
		public function get_banco() {
			return $this->banco;
		}


		}

?>		