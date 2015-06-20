<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataEntradaHerramienta{

	function DataEntradaHerramienta(){
	}

	function insertar($herramienta){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO   tbentradaherramienta(
			idHerramientaHer,
			idProvedor,
			factura,
			fecha,
			cantidad)VALUES(
			".$herramienta->get_idHerramienta().",
			".$herramienta->get_idProvedor().",
			'".$herramienta->get_factuta()."',
			'".$herramienta->get_fecha()."',
			".$herramienta->get_cantidad().")";		
	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_herramientas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call entradaHerramientaSeleccionarTodo()";

          // $query = "SELECT idEntrada,idHerramienta,marca, descripcion,idProvedor,factura,fecha,cantidad FROM tbentradaherramienta ORDER BY  idEntrada ASC";
			  
         $result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$id = $row[0];
		        $btnEliminar ="<input type='button' onclick='eliminar(".$id.")'  value='Elimina'/>";
				$btnModificar ="<input type='button' onclick='modificar(".$id.")'' value='Modificar'/>";
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}
	function get_herramienta($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "SELECT idEntrada,idHerramientaHer,idProvedor,factura,fecha,cantidad FROM tbentradaherramienta where idEntrada=$id";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);	
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
			$query = "DELETE FROM tbentradaherramienta where idEntrada=$id";
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
		$query ="UPDATE tbentradaherramienta SET 
		idEntrada=".$herramienta->get_id().", 
		idHerramientaHer=".$herramienta->get_idHerramienta().",
		marcaHer='".$herramienta->get_marca()."', 
		descripcionHer='".$herramienta->get_descripcion()."',
		idProvedor=".$herramienta->get_idProvedor().",
		factura='".$herramienta->get_factuta()."',
		fecha='".$herramienta->get_fecha()."',
		cantidad=".$herramienta->get_cantidad()." WHERE idEntrada= $id ";
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