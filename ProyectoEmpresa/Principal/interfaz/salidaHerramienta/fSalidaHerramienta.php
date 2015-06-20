<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Salidas de Herramientas</title>
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/ajax/ajaxcomboHerramientas.js" ></script>
		<script lang="JavaScript" src="../../js/ajax/ajaxSalidaHerramienta.js" ></script>
		<script lang="JavaScript" src="../../js/json/jsonSalidaHerramienta.js" ></script>
		<script lang="JavaScript" src="../../js/jquery/jquerySalidaHerramienta.js" ></script> 
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
				<h1>Salida de Herramienta</h1>
				<br></Br>
				<div class="row">
                 
                
				<div class="form-group col-md-6">
				<label for="fecha">Fecha:</label>	
 				<input type="text" id="fecha" value="" class="form-control"/> 
				</div>

				<div class="form-group col-md-6">
				<label>Cantidad:</label>
				<input type="text"  id="cantidad" class="form-control int"/>
				</div>
				<div class="form-group col-md-6">
                <label>Herramienta:</label>	
				<select id="herramienta" style="width:150;" class="form-control"></select>
				</div>
				<div class="form-group col-md-6">
				<label>Detalles:</label>
				<input type="text"  id="detalle" class="form-control string"/>
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
				<h1>Lista de Salida de Herramientas</h1>
				<br><br></br></br>
				<?php
include ("../tabla.html");
?>

<DIV id="resultado"></DIV>
				<br><br></br></br>
</div>

</html>