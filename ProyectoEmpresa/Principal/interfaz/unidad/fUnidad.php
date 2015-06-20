<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Unidades de Medicion</title>
		<meta charset="UTF-8">
			<script lang="JavaScript" src="../../js/ajax/ajaxUnidad.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryUnidad.js" ></script>
			<script lang="JavaScript" src="../../js/json/jsonUnidad.js" ></script>
		</head>

		<body>

			<div class="container"> 

			<form id="f_registrar">
				<input type="hidden"  id="id"/>
				<h1 id="hRegistrar">Registrar Unidades de Medida</h1>
				<h1 id="hModificar">Modificar Unidades de Medida</h1>
				<br><br></br></br>
				<div class="row">
				<div class="form-group col-md-12">
				<label>Nombre de la unidad: </label>
				<input type="text"  id="nombre" class="form-control string"/>
				</div>
				</div>		<br>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>
			<br><br></br></br>
			<h1>Lista de Unidades</h1>
			<br><br></br></br>

			<?php
				include ('../tabla.html');
			?>

<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>

	

</html>