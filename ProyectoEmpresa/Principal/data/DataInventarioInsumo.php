<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataInventarioInsumo{

	function DataInventarioInsumo(){
	}

	function insertar($insumo){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call inventarioInsertar(
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


	function get_inventarios(){
				$con = new DBConexion;
				if($con->conectar()==true){
			$query = "CALL inventarioSeleccionarTodo";
			$result = @mysql_query($query);	
			$i=0;
			$lista = array();
			while($row = mysql_fetch_array($result)){
				//$cont = count($row)/2;
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	
	function get_inventario($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "CALL inventarioSeleccionar($id)";
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
			$query = "CALL inventarioEliminar($id)";
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
		$query ="call inventarioModificar(
		".$insumo->get_idCategoria().", 
		'".$insumo->get_nombre()."', 
		'".$insumo->get_stock()."',$id );";
	
		$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}


function modificarInsumo($id, $insumo){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="UPDATE tbinventario SET 
		idInsumo=".$insumo->get_id().", 
		idCategoria=".$insumo->get_idCategoria().", 
		nombreInsumo='".$insumo->get_nombre()."' WHERE idInsumo= $id ";
		
		$result = @mysql_query($query);
			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}




function modificarEntrada($id, $insumo){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="UPDATE tbinventario SET 
		stock='".$insumo->get_stock()."' WHERE idInsumo= $id ";
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