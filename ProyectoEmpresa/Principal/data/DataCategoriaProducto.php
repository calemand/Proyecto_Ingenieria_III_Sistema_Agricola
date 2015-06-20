<?php
header('Content-Type: text/html; charset=ISO-8859-1');
class DataCategoriaProducto{

	function DataCategoriaProducto(){
	}

	function insertar($categoria){
		$con = new DBConexion;
		if($con->conectar()==true){
			$query = "call categoriaProductoInsertar ('".$categoria->get_nombre()."')";	
			//echo "string ".$query;
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}	
	}


	function get_lista(){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call categoriaProductoSeleccionarTodo";
			
			$result = @mysql_query($query);	
			$i=0;
			while($row = mysql_fetch_array($result)){
					$contador = count($row);
		//		echo "<br>contador ".$contador."<br>";
				$btnEliminar = '<input type="button" onclick="eliminar('.$row[1].')"  value="Eliminar"/>';
				$btnModificar = '<input type="button" onclick="modificar('.$row[1].')" value="Modificar"/>';
				$lista[$i] = array($row[0],$row[1],$btnEliminar,$btnModificar);	
				$i++;
			}
			if (!$lista){
				return false;
			}else{
		
				return $lista;
			}	
		}
	}
	function get_categoriaProducto($id){
		$con = new DBConexion;
		 $lista = array();
		if($con->conectar()==true){
			$query = "Call categoriaProductoSeleccionar ($id)";
			$result = @mysql_query($query);	
			$i=0;
		//	echo "<br>Query Sql".$query."<br>";
			while($row = mysql_fetch_array($result)){
				$lista = array($row[0],$row[1]);	
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
			$query = "Call categoriaProductoEliminar ($id)";	
			$result = @mysql_query($query);	
			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}
	
	
	function modificar($categoria){
		$con = new DBConexion;	
		if($con->conectar()==true){

		$query =" call categoriaProductoModificar ('".$categoria->get_nombre()."',".$categoria->get_id().")";
	//	echo "string   <br>".$query;
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