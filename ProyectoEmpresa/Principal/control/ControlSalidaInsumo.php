<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	include ("../data/DataSalidaInsumo.php");
	include ("../data/DBConexion.php");
	include ("../dominio/SalidaInsumo.php");
	include ("../data/DataInventarioInsumo.php");
	include ("../dominio/InventarioInsumo.php");
	

	class ControlSalidaInsumo {
		
		function ControlSalidaInsumo(){
		}

		
        function seleccionarInsumo(){

			$data = new DataSalidaInsumo();
			
			$lista = $data->get_insumos();
		
			echo json_encode($lista);
		}


		

		function seleccionar(){

			$data = new DataSalidaInsumo();
			
			$lista = $data->get_salidas();
		
			echo json_encode($lista);
		}
		
		
		function get_salida(){

			$id = $_POST['id'];

			$data = new DataSalidaInsumo();
			
			$lista = $data->get_salida($id);
		
			echo json_encode($lista);			

		}


		function insertar(){

			$idInsumo = $_POST['insumo'];
			$cultivo=$_POST['cultivo'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];

			
			if(empty($idInsumo)||empty($cultivo)||empty($fecha)||empty($cantidad)){
				echo "Debe llenar todo formulario para realizar el registro<b>";
			}else{

		
		/*		$dtInventario= new DataInventarioInsumo();
				
				$lista = $dtInventario->get_inventario($idInsumo);
				$total=$lista[3]-$cantidad;
				
				$Inventarioinsumo = new InventarioInsumo ($idInsumo,1,"",$total);
	*/
				
				$salidaInsumo = new SalidaInsumo (1,$idInsumo,$cultivo,$fecha,$cantidad);
				$data = new DataSalidaInsumo();

			

				if($data->insertar($salidaInsumo)==true){
					echo "1";
				}else{
					echo "0";
				}
			}

	/*		if($dtInventario->modificarEntrada($idInsumo, $Inventarioinsumo)==true){
			//echo "Datos actulizados correctamente";
			}else{
				echo "Error del sistema";
			}*/
	
		}


		function modificar(){

			$id = $_POST['id'];
			$idInsumo = $_POST['insumo'];
			$cultivo=$_POST['cultivo'];
			$fecha = $_POST['fecha'];
			$cantidad = $_POST['cantidad'];

			$cant = $_POST['cant'];


			$dtInventario= new DataInventarioInsumo();
			
			$lista = $dtInventario->get_inventario($idInsumo);
			$suma=$lista[3];
			$total=$suma+$cant;
			$final=$total-$cantidad;

			$data = new DataSalidaInsumo();


			$salidaInsumo = new SalidaInsumo ($id,$idInsumo,$cultivo,$fecha,$cantidad);

			$Inventarioinsumo = new InventarioInsumo ($idInsumo,1,"",$final);
			
			if($data->modificar($id, $salidaInsumo)==true){
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

			$data = new DataSalidaInsumo();
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
		$control = new ControlSalidaInsumo;

		if($accion=="insumo"){
		$control->seleccionarInsumo();
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
		$control->get_salida();
		}
		if($accion=="eliminar"){
		$control->eliminar();
		}

?>