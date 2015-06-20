<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataSalidaHerramienta.php");
	include ("../data/DBConexion.php");
	include ("../dominio/SalidaHerramienta.php");
	include ("../data/DataHerramienta.php");
	include ("../data/DataInventarioHerramienta.php");
	include ("../dominio/InventarioHerramienta.php");

	class ControlSalidaHerramienta {
		
		function ControlSalidaHerramienta(){
		}

		function seleccionar(){

			$data = new DataSalidaHerramienta();
			
			$lista = $data->get_SalidaHerramientas();
		
			echo json_encode($lista);
		}
		
		
		function get_Salidaherramienta(){

			$id = $_POST['id'];

			$data = new DataSalidaHerramienta();
			
			$lista = $data->get_herramienta($id);
		
			echo json_encode($lista);			

		}


		function insertar(){

					
			$idherramienta = $_POST['idherramienta'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];
			$detalle=$_POST['detalle'];

/*			$dtInventario= new DataInventarioHerramienta();
			
			$lista = $dtInventario->get_inventario($idherramienta);
			$total=$lista[4]-$cantidad;
			
			$dataHerramienta= new DataHerramienta();
			$listaHerramienta=$dataHerramienta->get_herramienta($idherramienta);
			$inventariHerramienta = new InventarioHerramienta ($idherramienta,"","","",$total);
		
			*/
			$herramienta = new SalidaHerramienta (1,$idherramienta,null,null,$fecha,$cantidad,$detalle);

			$data = new DataSalidaHerramienta();


			if($data->insertar($herramienta)==true){
				echo "1";
			}else{
				echo "0";
			}
/*
			if($dtInventario->modificarEntrada($idherramienta, $inventariHerramienta)==true){
			//echo "Datos actulizados correctamente" .$total;
			}else{
				echo "Error del sistema";
			}
	*/
		}

		function modificar(){

            $id = $_POST['id'];
			$idherramienta = $_POST['idherramienta'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];
			$detalle=$_POST['detalle'];

			$cant = $_POST['cant'];

			$dtInventario= new DataInventarioHerramienta();
			
			$lista = $dtInventario->get_inventario($idherramienta);
			$suma=$lista[4];
			$total=$suma+$cant;
			$final=$total-$cantidad;

			$dataHerramienta= new DataHerramienta();
			$listaHerramienta=$dataHerramienta->get_herramienta($idherramienta);
           

			$data = new DataSalidaHerramienta();

			$herramienta = new SalidaHerramienta ($id,$idherramienta,$listaHerramienta[2],$listaHerramienta[3],$fecha,$cantidad,$detalle);
			
			$inventariHerramienta = new InventarioHerramienta ($idherramienta,"","","",$final);

			if($data->modificar($id, $herramienta)==true){
			echo "1";
			}else{
				echo "0";
			}

			if($dtInventario->modificarEntrada($idherramienta, $inventariHerramienta)==true){
			//echo "Datos actulizados correctamente" .$total;
			}else{
				echo "1";
			}
			
		}

		function eliminar(){

			$data = new DataSalidaHerramienta();
			$id=$_POST['id'];

			if($data->eliminar($id)!=false)
			{
				echo "1";
			}else{
				echo "0";
			}



		}
	}

		$accion=$_POST['accion'];
		$control = new ControlSalidaHerramienta;

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
		$control->get_Salidaherramienta();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>