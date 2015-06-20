<?php
header('Content-Type: text/html; charset=ISO-8859-1');
class DataTipoInsumo{
	function DataTipoInsumo(){}
	function get_tipoInsumos(){
		$con = new DBConexion();
		$lista = array();
		if($con->conectar()==true){
			$query = "CALL categoriaInsumoSeleccionarTodo();";
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
				$lista[$i] = array($row[0], $row[1]);	
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