<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataCosecha{

	function DataCosecha(){
	}
 
	function insertar($cosecha){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call  reporteCosechaInsertar (
				  ".$cosecha->get_unidadMedicion().",
				  ".$cosecha->get_producto().",
				  '".$cosecha->get_usuario()."',
				  ".$cosecha->get_cantidad().",
				  ".$cosecha->get_precioUnitario().",
				  '".$cosecha->get_fecha()."');";		
		//echo "SQL ".$query;
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_cosechas(){
		$con = new DBConexion;
		 $lista = array();               
		if($con->conectar()==true){
			$query = "call reporteCosechaSeleccionarTodo";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$btnEliminar='<input type="button"  onclick="eliminar('.$row[0].')" value="Eliminar">';
                $btnModificar='<input type="button" class="enviar"  onclick="modificar('.$row[0].')" value="Modificar">';
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
	function get_cosecha($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call reporteCosechaSeleccionar($id)";
		//	 echo "query <br>".$query;
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$cont = (count($row))/2;
			//	echo "columnas ".count($row);
	
				for ($i=0; $i < $cont; $i++) { 
					array_push($lista, $row[$i]);
				}
				
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
			$query = "call reporteCosechaEliminar($id)";
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($cosecha){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call reporteCosechaModificar( 
		".$cosecha->get_unidadMedicion().",
		".$cosecha->get_producto().",
		'".$cosecha->get_usuario()."',
		".$cosecha->get_cantidad().",
		".$cosecha->get_precioUnitario().",
		'".$cosecha->get_fecha()."',
		".$cosecha->get_idReporteCosecha().");";
		
		
		// echo "<br> query".$query."<br><br>";
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