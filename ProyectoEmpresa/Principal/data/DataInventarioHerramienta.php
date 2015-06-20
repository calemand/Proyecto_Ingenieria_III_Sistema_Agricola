<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataInventarioHerramienta{

	function DataInventarioHerramienta(){
	}

	function insertar($herramienta){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO  tbinventarioherramienta(
			nombre,
			marca, 
			descripcion, 
			stock)VALUES(
			'".$herramienta->get_nombre()."',
			'".$herramienta->get_marca()."',
			'".$herramienta->get_descripcion()."',
			".$herramienta->get_stock().")";		
	
			$result = @mysql_query($query);	

			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);	
	}


	function get_inventarios(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "SELECT i.idHerramienta,h.nombre,h.marca,h.descripcion,i.stock FROM tbinventarioherramienta as i INNER join tbherramienta as h WHERE h.idHerramienta=i.idHerramienta ORDER BY idHerramienta ASC";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4]);	
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
			$query = "SELECT idHerramienta,nombre,marca,descripcion,stock FROM tbinventarioherramienta where idHerramienta=$id";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4]);	
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
			$query = "DELETE FROM tbiventario where idInsumo=$id";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $herramienta){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="UPDATE tbinventarioherramienta SET 
		idHerramienta=".$herramienta->get_id().", 
		nombre=".$herramienta->get_nombre().", 
		marca='".$herramienta->get_marca()."', 
		descripcion='".$herramienta->get_descripcion()."', 
		stock='".$herramienta->get_stock()."' WHERE idHerramienta= $id ";

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
		$query ="UPDATE tbinventarioherramienta SET 
		stock='".$insumo->get_stock()."' WHERE idHerramienta= $id ";
		
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