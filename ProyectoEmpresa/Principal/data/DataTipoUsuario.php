<?php
header('Content-Type: text/html; charset=ISO-8859-1');

class DataTipoUsuario{

	function DataTipoUsuario(){
	}

	
	//6 se retorna un arreglo con la informacion consultada
	function get_tipoUsuarios(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "call tipousuarioSeleccionar";
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
}


		



?>