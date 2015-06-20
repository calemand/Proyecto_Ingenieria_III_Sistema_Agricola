<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Herramientas</title>
		<meta charset="UTF-8">
			<script lang="JavaScript" src="../../js/ajax/ajaxHerramienta.js" ></script>

			<script lang="JavaScript" src="../../js/json/jsonHerramienta.js" ></script>

			<script lang="JavaScript" src="../../js/jquery/jqueryHerramienta.js" ></script> 
		
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
				<h1>Registrar Herramienta</h1>

				<br></Br>
				 <div class="row">
				 <div class="form-group col-md-6">
				<label>Nombre:</label>
				<input type="text"  id="nombre"  class="form-control string"/>
				</div>

				<div class="form-group col-md-6">
				<label>Marca:</label>
				<input type="text"  id="marca"  class="form-control string"/>
				</div>

				<div class="form-group col-md-12">
				<label>Descripcion:</label>
				<input type="text"  id="descripcion"  class="form-control"/>
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
				<h1>Lista de Herramientas</h1>
<?php
			include ('../tabla.html');
?>	
<DIV id="resultado"></DIV>
						<br><br></br></br>
</div>

</html>