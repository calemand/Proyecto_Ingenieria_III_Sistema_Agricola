<?php

class DataUsuario{

	function DataUsuario(){
	}

	function insertar($cedula){

		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call usuarioInsertar(			
			'".$cedula->get_cedula()."',
			'".$cedula->get_pass()."',
 			".$cedula->get_tipo().");";		
		echo "<br>query<br>".$query."<br>";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_Usuarios(){//   AQUI DEBE ESTAR EL PROBLEMA
		$con = new DBConexion;
		 $lista = array();               
		if($con->conectar()==true){// nombreTipoUsuario no es de la tabla cedula, es de la tbtipousuario
			$query = "call usuarioSeleccionarTodo";
			$result = @mysql_query($query);	
	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$id = "'".$row[0]."'";
		         $btnEliminar = '<input type="button" onclick="eliminar('.$id.')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$id.')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_Usuario($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call usuarioSeleccionar('$id')";
		//	echo "<br>query<br>".$query."<br>";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_login_usuario($usuario){
	
		$con = new DBConexion;
		$arreglo = array();
		if($con->conectar()==true){
		
			$query = "call usuarioLogin('".$usuario->get_cedula()."','".$usuario->get_pass()."');";
		
			$result = @mysql_query($query);
			
			while($row = mysql_fetch_array($result)){
				$arreglo=$row;
			}

			if (!$arreglo){
				return false;
			}else{
				return $arreglo;
			}	
		}
	}


		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call usuarioEliminar('".$id."');";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $cedula){
		$con = new DBConexion;	
	
		if($con->conectar()==true){
		$query ="call usuarioModificar (
			'".$cedula->get_cedula()."',
			'".$cedula->get_pass()."',
 			".$cedula->get_tipo().",'$id');";	
		//	echo "<br>query<br>".$query."<br>";
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
}?>