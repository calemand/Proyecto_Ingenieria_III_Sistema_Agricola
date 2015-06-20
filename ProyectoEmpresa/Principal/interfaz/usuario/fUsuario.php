<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Usuarios</title>
		<meta charset="UTF-8">

			<script lang="JavaScript" src="../../js/ajax/ajaxTipoUsuario.js" ></script> 
			<script lang="JavaScript" src="../../js/ajax/ajaxUsuario.js" ></script>

		
			<script lang="JavaScript" src="../../js/json/jsonUsuario.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryUsuario.js" ></script>
		
		</head>
		<!--
		La sigan la numeracion para ver el orden de llamados
		1 get_tipoEmpleados ir al ajax
		1 llenarTabla ir al ajax
		 -->
		<body>

			<div class="container"> 
			<form id="myForm">
				<input type="hidden"  id="id"/>
				<input type="hidden"  id="inter" value='1'/>
				<h1>Registrar usuario</h1>
				<br></Br>
				<div class="row">
				<div class="form-group col-md-12">
                <label>Tipo Usuario:</label>	
				<select id="puesto" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
				<label>Cedula:</label>
				<input type="text"  id="identificacion" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Contraseña:</label>
				<input type="password"  id="contrasena" class="form-control"/>
				</div>

				</div>		<br>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left col-md-offset-1 btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			<br><br></br></br><br><br></br></br>

			<DIV id="contenedor"></DIV>

			
				<br><br></br></br>
				<h1>Lista de Usuarios</h1>
				<br><br></br></br>

<?php
include ('../tabla.html');
?>

				<br><br></br></br>
</div>

</html>