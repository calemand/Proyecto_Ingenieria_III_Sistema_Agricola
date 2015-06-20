<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataEntradaHerramienta.php");
	include ("../data/DBConexion.php");
	include ("../dominio/EntradaHerramienta.php");
	include ("../data/DataHerramienta.php");
	include ("../data/DataInventarioHerramienta.php");
	include ("../dominio/InventarioHerramienta.php");

	class ControlEntradaHerramienta {
		
		function ControlEntradaHerramienta(){
		}

		function seleccionar(){

			$data = new DataEntradaHerramienta();
			
			$lista = $data->get_herramientas();
		
			echo json_encode($lista);
		}
		
		
		function get_Entradaherramienta(){

			$id = $_POST['id'];

			$data = new DataEntradaHerramienta();
			
			$lista = $data->get_herramienta($id);
		
			echo json_encode($lista);			

		}


		function insertar(){

					
			$idherramienta = $_POST['idherramienta'];
			$idprovedor = $_POST['idprovedor'];
			$factura=$_POST['factura'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];


	/*		$suma=$cantidad;
			$dtInventario= new DataInventarioHerramienta();
			$lista = $dtInventario->get_inventario($idherramienta);
			$suma=$suma+$lista[4];	
			$dataHerramienta= new DataHerramienta();
			$listaHerramienta=$dataHerramienta->get_herramienta($idherramienta);			
			$inventariHerramienta = new InventarioHerramienta ($idherramienta,"","","",$suma);
*/
			$herramienta = new EntradaHerramienta (1,$idherramienta,$idprovedor,$factura,$fecha,$cantidad);

			$data = new DataEntradaHerramienta();
			if($data->insertar($herramienta)==true){
				echo "1";
			}else{
				echo "0".$idherramienta;
			}
/*
			if($dtInventario->modificarEntrada($idherramienta, $inventariHerramienta)==true){
			//echo "Datos actulizados correctamente" .$suma;
			}else{
				echo "Error del sistema";
			}
*/	
		}

		function modificar(){

            $id = $_POST['id'];
			$idherramienta = $_POST['idherramienta'];
			$idprovedor = $_POST['idprovedor'];
			$factura=$_POST['factura'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];


			$cant = $_POST['cant'];// se guarda el valor antes de modificar
            
			
			$dtInventario= new DataInventarioHerramienta();
			
			$lista = $dtInventario->get_inventario($idherramienta);
			$suma=$lista[4];
			$suma=$suma-$cant;
			$suma=$suma+$cantidad;




			$dataHerramienta= new DataHerramienta();
			$listaHerramienta=$dataHerramienta->get_herramienta($idherramienta);
           

			$data = new DataEntradaHerramienta();


			$herramienta = new EntradaHerramienta ($id,$idherramienta,$listaHerramienta[2],$listaHerramienta[3],$idprovedor,$factura,$fecha,$cantidad);
			
			$inventariHerramienta = new InventarioHerramienta ($idherramienta,"","","",$suma);
			
			if($data->modificar($id, $herramienta)==true){
			echo "Datos actulizados correctamente";
			}else{
				echo "Error del sistema";
			}

			if($dtInventario->modificarEntrada($idherramienta, $inventariHerramienta)==true){
			//echo "Datos actulizados correctamente";
			}else{
				echo "Error del sistema";
			}
			
		}

		function eliminar(){

			$data = new DataEntradaHerramienta();
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
		$control = new ControlEntradaHerramienta;

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
		$control->get_Entradaherramienta();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>