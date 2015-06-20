<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataHora{

	function DataHora(){
	}

	function insertar($Hora){
		$con = new DBConexion;

		if($con->conectar()==true){
			$query = "call horasInsertar(
			'".$Hora->get_identificacion() ."',
			'".$Hora->get_fecha() ."',
			'".$Hora->get_inicio()."',
			'".$Hora->get_salida() ."',
			".$Hora->get_puesto().")";	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}	
	


	function get_Horas(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call horasSeleccionarTodo";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$btnEliminar="<input type='button'  onclick='eliminar(".$row[0].")' value='Eliminar'/>";
                $btnModificar="<input type='button' class='enviar'  onclick='modificar(".$row[0].")' value='Editar'/>";
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
	function get_Hora($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call horasSeleccionar($id)";
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

		function eliminar($id){
		$con = new DBConexion;
		if($con->conectar()==true){
		$query = "SET @p0='$id';"; 
		$result = @mysql_query($query);	
		$query = "call horasEliminar(@p0);";
		$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($id, $Hora){
		$con = new DBConexion;	
		if($con->conectar()==true){
		$query ="call horasModificar(
		'".$Hora->get_identificacion()."', 
		'".$Hora->get_fecha()."', 
		'".$Hora->get_inicio()."', 
		'".$Hora->get_salida()."',
		".$Hora->get_puesto().",$id) ";

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