<?php
	class DataPlanilla{
		function DataPlanilla(){}

		function calcular($datos){
			$con = new DBConexion();
			return $con->getData("call horasTrabajadas('".$datos[0]."','".$datos[1]."','".$datos[2]."')");
		}	
		function getSalario($datos){
			$con = new DBConexion;
			return $con->getRow("call calcularSalario('".$datos[0]."','".$datos[1]."','".$datos[2]."')");
		}
		function getPlanillas(){
			$con = new DBConexion;
			return $con->getData("call planillaSeleccionarTodo()");
		}
		function insertar($planilla){
			$con = new DBConexion;

			if($con->conectar()==true){
				$query = "call planillaInsertar('".$planilla->get_cedula()."',
					'".$planilla->get_fechaPago()."',
					".$planilla->get_horas().",
					".$planilla->get_salario().")";

				if (!@mysql_query($query)){
					return false;
				}else{
					return true;
				}
			}	
		}
		function cambiarEstado($datos){
			$con = new DBConexion;

			if($con->conectar()==true){
				$query = "call horasTrabajadasCambiarEstado('".$datos[0]."','".$datos[1]."','".$datos[2]."')";
				if (!@mysql_query($query)){
					return false;
				}else{
					return true;
				}
			}	
		}

	}
?>