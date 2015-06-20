<!DOCTYPE html> 
<html lang="es"> 
	<head >
		<title>Lista De Empleados</title>
		<meta charset="UTF-8">

			<script lang="JavaScript" src="../../js/ajax/ajaxTipoEmpleado.js" ></script> 
			<script lang="JavaScript" src="../../js/ajax/ajaxEmpleado.js" ></script>
			<script lang="JavaScript" src="../../js/json/jsonEmpleado.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryEmpleado.js" ></script>
		
	</head>
		<!--
		La sigan la numeracion para ver el orden de llamados
		1 get_tipoEmpleados ir al ajax
		1 llenarTabla ir al ajax
		 -->
	<body>

		<div class="container"> 

			<form id="f_registrar">
				<input type="hidden"  id="id"/>
				<h1>Registrar Empleado</h1>
				<br>

                <div class="row">
				<div class="form-group col-md-6">
				<label>Numero de cedula:</label>
				<input type="text"  id="cedula" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Nombre:</label>
				<input type="text"  id="nombre" class="form-control string"/>
				</div>

				<div class="form-group col-md-6">
				<label>Apellidos:</label>
				<input type="text"  id="apellidos" class="form-control string"/>
				</div>

				<div class="form-group col-md-6">
				<label>Correo:</label>
				<input type="mail"  id="correo" class="form-control "/>
				</div>

				<div class="form-group col-md-6">
				<label>Telefono:</label>
				<input type="text"  id="telefono" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Direccion:</label>
				<input type="text"  id="direccion" class="form-control"/>
				</div>

				<div class="form-group col-md-4">
				<label>Genero:</label>
				</div>

				<div class="form-group col-md-4">
				<label>Masculino:</label>
				<input type="radio" name="genero" id="genero_m" value="m" checked>
				</div>

				<div class="form-group col-md-4">
				<label>Femenino:</label>
				<input type="radio" name="genero" id="genero_f" value="f">
				</div>

				

				</div><br>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			<br>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>
		
			<br><br></br></br>
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