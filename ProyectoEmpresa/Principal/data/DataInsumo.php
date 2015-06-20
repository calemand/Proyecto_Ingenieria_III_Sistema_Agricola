<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataInsumo{

	function DataInsumo(){
	}

	function insertar($insumo){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call insumoInsertar(
			".$insumo->get_categoria().",
			'".$insumo->get_nombre()."',
			'".$insumo->get_descripcion()."')";		
			//echo "query get_insumos <br><br>".$query."<br><br>";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}

	function insertarInsumo($insumo){
		$con = new DBConexion;
		
		if($con->conectar()==true){
			$query = "INSERT INTO  tbiventario(
			idCategoria,
			nombreInsumo,  
			stock)VALUES(
			".$insumo->get_idCategoria().",
			'".$insumo->get_nombre()."',
			".$insumo->get_stock().")";		
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_insumos(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call insumoSeleccionarTodo";
			//echo "query get_insumos <br><br>".$query."<br><br>";
			$result = @mysql_query($query);	

			$i=0;
			while($row = mysql_fetch_array($result)){
					$btnEliminar = '<input type="button" onclick="eliminar('.$row[0].')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$row[0].')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_insumo($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call insumoSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3]);	
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
			$query = "call insumoEliminar($id)";
			echo $query;
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $insumo){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="Call insumoModificar(".$insumo->get_id().
		",".$insumo->get_categoria().
		",'".$insumo->get_nombre().
		"','".$insumo->get_descripcion()."',$id)";
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