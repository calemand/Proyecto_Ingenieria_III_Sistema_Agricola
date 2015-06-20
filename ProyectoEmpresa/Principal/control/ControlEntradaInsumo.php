<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataEntradaInsumo.php");
	include ("../data/DBConexion.php");
	include ("../dominio/EntradaInsumo.php");
	include ("../data/DataInventarioInsumo.php");
	include ("../dominio/InventarioInsumo.php");
	
	

	class ControlEntradaInsumo {
		
		
		function ControlEntradaInsumo(){

			
		}

		
        function seleccionarInsumo(){

			$data = new DataEntradaInsumo();
			
			$lista = $data->get_insumos();
		
			echo json_encode($lista);
		}


		function seleccionarProvedor(){

			$data = new DataEntradaInsumo();
			
			$lista = $data->get_provedores();
		
			echo json_encode($lista);
		}

		function seleccionar(){

			$data = new DataEntradaInsumo();
			
			$lista = $data->get_entradas();
		
			echo json_encode($lista);
		}
		
		
		function get_entrada(){

			$id = $_POST['id'];

			$data = new DataEntradaInsumo();		
			
			$lista = $data->get_entrada($id);
			
		
			echo json_encode($lista);


		}


		function insertar(){

			$idInsumo = $_POST['insumo'];
			$idProvedor = $_POST['provedor'];
			$NFactura=$_POST['NFactura'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];
			if(empty($idInsumo)||empty($idProvedor)||empty($NFactura)||empty($fecha)||empty($cantidad)){
				echo "Debe llenar todo formulario para realizar el registro<b>";
			}else{
			/*	$suma=$cantidad;

			$dtInventario= new DataInventarioInsumo();
			
			$lista = $dtInventario->get_inventario($idInsumo);
			$suma=$suma+$lista[3];
			
			
			$Inventarioinsumo = new InventarioInsumo ($idInsumo,1,"",$suma);
			
			*/
			
			$entrada = new EntradaInsumo (1,$idInsumo,$idProvedor,$NFactura,$fecha,$cantidad);
			$data = new DataEntradaInsumo();



		if($data->insertar($entrada)==true){
			echo "1";
	/*		if($dtInventario->modificarEntrada($idInsumo, $Inventarioinsumo)==true){
				echo "<br> Datos actulizados correctamente en el inventario";*/
			}else{
				echo "0";
			}
	/*	}else{
			echo "<br>Error al insertar insumo ";
			}*/
			}

		}

		function modificar(){

			$id = $_POST['id'];
			$idInsumo = $_POST['insumo'];
			$idProvedor = $_POST['provedor'];
			$NFactura=$_POST['NFactura'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];

			$cant = $_POST['cant'];// se guarda el valor antes de modificar
            
			
			$dtInventario= new DataInventarioInsumo();
			
			$lista = $dtInventario->get_inventario($idInsumo);
			$suma=$lista[3];
			$suma=$suma-$cant;
			$suma=$suma+$cantidad;
			      

			$data = new DataEntradaInsumo();


			$entrada = new EntradaInsumo ($id,$idInsumo,$idProvedor,$NFactura,$fecha,$cantidad);

			$Inventarioinsumo = new InventarioInsumo ($idInsumo,1,"",$suma);
			
			if($data->modificar($id, $entrada)==true){
			echo "Datos actulizados correctamente";
			}else{
				echo "Error del sistema";
			}

			if($dtInventario->modificarEntrada($idInsumo, $Inventarioinsumo)==true){
			//echo "Datos actulizados correctamente";
			}else{
				echo "Error del sistema";
			}
			
		}

		function eliminar(){

			$data = new DataEntradaInsumo();
			$id=$_POST['id'];

			if($data->eliminar($id)!=false)
			{
				echo "Datos eliminados";
			}else{
				echo "Error al elimi datos";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlEntradaInsumo;

		if($accion=="insumo"){
		$control->seleccionarInsumo();
		}

		if($accion=="provedor"){
		$control->seleccionarProvedor();
		}

		if($accion=="seleccionar"){
		$control->seleccionar();
		}

		if($accion=="insertar"){
		$control->insertar();
		}

		if($accion=="actualizar"){
		$control->modificar();
		}
		if($accion=="obtener"){
		$control->get_entrada();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>