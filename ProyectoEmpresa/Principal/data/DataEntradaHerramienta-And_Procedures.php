<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataEntradaHerramienta{

	function DataEntradaHerramienta(){
	}

	function insertar($herramienta){
		$con = new DBConexion();
		echo "insertar ";
		try{
			if($con->conectar()==true){
				echo "DataEntradaHerramienta<br>";
				$query = "Call entradaHerramientaInsertar(
				".$herramienta->get_idHerramienta().",
				'".$herramienta->get_marca()."',
				'".$herramienta->get_descripcion()."',
				".$herramienta->get_idProvedor().",
				'".$herramienta->get_factuta()."',
				'".$herramienta->get_fecha()."',
				".$herramienta->get_cantidad().")";		
				echo "<br>query<br>".$query."<br><br>";
				$result = @mysql_query($query);	
				if (!$result){
					return false;
				}else{
					return $result;
				}
			}
			mysql_close($con);	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


	function get_herramientas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call entradaHerramientaSeleccionarTodo";

          // $query = "SELECT idEntrada,idHerramienta,marca, descripcion,idProvedor,factura,fecha,cantidad FROM tbentradaherramienta ORDER BY  idEntrada ASC";
			  
         $result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				  $btnEliminar = "<input type='button' onclick='eliminar(".$row[0].")''  value='Eliminar'/>";
				   $btnModificar = "<input type='button' onclick='modificar(".$row[0].")''  value='Modificar'/>";
				$lista[$i] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
		mysql_close($con);
	}
	function get_herramienta($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call entradaHerramientaSeleccionar($id)";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
			
				return $lista;
			}	
		}
		mysql_close($con);
	}

		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "Call entradaHerramientaEliminar ($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);
	}
	
	
	function modificar($id, $herramienta){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="Call entradaHerramientaModificar(".
		$herramienta->get_id().
		",".$herramienta->get_idHerramienta().
		",".$herramienta->get_idProvedor().
		",'".$herramienta->get_factuta()."','".
		$herramienta->get_fecha()."',".
		$herramienta->get_cantidad().",$id )";
			$result = @mysql_query($query);

			
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
		mysql_close($con);
	}
}


?>