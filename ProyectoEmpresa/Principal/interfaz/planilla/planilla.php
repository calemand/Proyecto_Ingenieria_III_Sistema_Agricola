<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/json/jsonPlanilla.js" ></script>
		<title>Planilla</title>
	</head>
	<body>
		<div class="container">
			<h1>Sistema de planillas</h1>
			<br>
			<form id="myForm">
				<div class="row">
				 	<div class="form-group col-md-12">
				 		<label>Numero de cedula:</label>
						<input type="text"  id="cedula" class="form-control"/>
				 	</div>

				 	<div class="form-group col-md-6">
	             		<label for="fecha">Fecha de inicio:</label>	
						<input type="text"  id="fechaInicio"  class="form-control"/>
					</div>
					<div class="form-group col-md-6">
	             		<label for="fecha">Fecha final:</label>	
						<input type="text"  id="fechaFinal"  class="form-control"/>
					</div>
				</div>
				 <br>
				<input type="button" id="calcular" value="Calcular Salario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>


			<br><br><br></br></br><br><br></br></br>
			<div id="contenedor"></div>
				<div id="mensajeCalculo"></div>
				<div id="contInforme">
					<h3>Datos de Empleado</h3>
					
					<div class="form-group col-md-6">
						<LABEL>Nombre: </LABEL> <LABEL id="nombre"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Cedula: </LABEL> <LABEL id="id"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Correo: </LABEL> <LABEL id="correo"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Telefono: </LABEL> <LABEL id="tel"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Dirección: </LABEL> <LABEL id="lugar"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Total de días: </LABEL><LABEL id="dias"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Total de horas: </LABEL><LABEL id="horas"></LABEL>
					</div>
					<div class="form-group col-md-6">
						<LABEL>Salario Total: </LABEL><LABEL id="salario"></LABEL>
					</div>
					<br><br><br>
					<div class="form-group col-lg-12 col-md-12 col-sm-12">
						<h3>Informe de Trabajo</h3>
					</div>	
					<br><br>
					<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="scrollTabla">	
							<div id="informe"></div>
							<br>
						</div>	
					</div>
					<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg "/>
					<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg" />
		
					<br><br></br>
					<br><br></br>
				</div>	

			<br><br></br></br><br><br></br>
			<h1>Lista de empleados </h1>
			<br><br></br></br>
			<?php
				include ('../tabla.html');
			?>
			</div>
			<DIV id="resultado"></DIV>
			<br><br></br></br>
		</div>
	</body>
</html>