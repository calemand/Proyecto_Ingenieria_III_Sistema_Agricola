<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataEntradaInsumo{

	function DataEntradaInsumo(){
	}

	function insertar($entrada){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call entradaInsumoInsertar(
			".$entrada->get_idInsumo().",
			".$entrada->get_idProvedor().",
			'".$entrada->get_NFactura()."',
			'".$entrada->get_fecha()."',
			".$entrada->get_cantidad().")";		
	//echo "string <br>".$query;
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
			$query = "SELECT idInsumo,nombreInsumo FROM tbinsumo ORDER BY nombreInsumo ASC";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0],$row[1]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}


	function get_provedores(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "SELECT idProveedore, nombreProvedor FROM tbproveedores ORDER BY nombreProvedor ASC";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0],$row[1]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}


	function get_entradas(){

	$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			//$query = "SELECT idEntrada, idInsumo, idProvedor, numFactura,fecha,cantidad FROM  tbentradainsumo ORDER BY  idEntrada ASC";
			
			$query = "SELECT idEntrada, nombreInsumo, nombreProvedor, numFactura,fecha,cantidad FROM  tbentradainsumo INNER JOIN  tbinsumo,tbproveedores
			where tbentradainsumo.idInsumo=tbinsumo.idInsumo AND tbentradainsumo.idProvedor=tbproveedores.idProveedore ORDER BY  idEntrada ASC";
           
         $result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				  $btnModificar='<input type="button" class="enviar"  onclick="modificar('.$row[0].')" value="Editar">';
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
	}




	function get_entrada($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "SELECT idEntrada, idInsumo, idProvedor, numFactura,fecha,cantidad FROM  tbentradainsumo where idEntrada=$id";
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

		function eliminar($id){// No sale boton en la tabla
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call entradaInsumoEliminar $id";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $entrada){// Fallá no guarda revisar prosedimiento almacenado
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="Call entradaInsumoModificar(".$entrada->get_id().
		",".$entrada->get_idInsumo().
		",".$entrada->get_idProvedor().
		",'".$entrada->get_NFactura().
		"','".$entrada->get_fecha().
		"',".$entrada->get_cantidad().",$id)";
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