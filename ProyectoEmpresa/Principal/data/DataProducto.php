<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataProducto{

	function DataProducto(){
	}

	function insertar($producto){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call  productoInsertar(
			".$producto->get_TipoEmpleado().",
			'".$producto->get_nombre()."')";		
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_productos(){
		$con = new DBConexion;
		 $lista = array();               
		if($con->conectar()==true){// nombreCategoriainsumo no es de la tabla insumo, es de la tbcategoriaproducto
			$query = "call productoSeleccionarTodo";
			//echo "query <br>".$query."<br>";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
					$btnEliminar = '<input type="button" onclick="eliminar('.$row[0].')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$row[0].')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$row[2],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
		function get_tipoProducto($id){
		$con = new DBConexion;
		 $lista = array();               
		if($con->conectar()==true){// nombreCategoriainsumo no es de la tabla insumo, es de la tbcategoriaproducto
			$query = "call productoPorCategoriaSeleccionar($id)";
		
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0],$row[1],$row[2]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}

	function get_producto($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call productoSeleccionar($id)";
		//	echo "string ".$query;
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

		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call productoEliminar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $producto){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query =
		"call productoModificar( 
		".$producto->get_cedula().", 
		".$producto->get_TipoEmpleado().", 
		'".$producto->get_nombre()."', $id) ";
		//echo "<br>".$query."<br>";
			$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
}


?>