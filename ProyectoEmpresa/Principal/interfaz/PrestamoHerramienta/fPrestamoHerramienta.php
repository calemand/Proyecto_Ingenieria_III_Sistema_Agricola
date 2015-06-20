<!DOCTYPE html>
<html lang="es">
	<head >
		<title>Lista de Insumos</title>
		<meta charset="UTF-8">

			<script lang="JavaScript" src="../../js/ajax/ajaxComboEstados.js" ></script>
			<script lang="JavaScript" src="../../js/ajax/ajaxComboEmpleado.js" ></script>
			<script lang="JavaScript" src="../../js/ajax/ajaxPrestamoHerramienta.js" ></script>			 
			<script lang="JavaScript" src="../../js/ajax/ajaxcomboHerramientas.js" ></script>

			<script lang="JavaScript" src="../../js/json/jsonPrestamoHerramienta.js" ></script> 
			<script lang="JavaScript" src="../../js/jquery/jqueryPrestamoHerramientas.js" ></script> 
		
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
				<h1>Registrar Prestamo de Herramientas</h1>
			 <br></Br>
				
				 <div class="row">
				 <div class="form-group col-md-6">
                <label>Empleado:</label>	
				<select id="empleado" style="width:150;" class="form-control"></select>
				</div>
 				<div class="form-group col-md-6">
				<label>Herramienta:</label>	
				<select id="herramienta" style="width:150;" class="form-control"></select>
				</div>

				 <div class="form-group col-md-6">
				<label for="fecha">Fecha:</label>
 				<input type="text" id="fecha" value="" style="width:150;" class="form-control"/> 
				</div>
				 <div class="form-group col-md-6">
				<label>Estado:</label>	
				<select id="estado" style="width:150;" class="form-control"></select>
				</div>

				 <div class="form-group col-md-6">
				<label>Observación:</label>
				<input type="text"  id="observacion" style="width:150;" class="form-control string"/>
				</div>
				
				</div><br>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
			</form>
			
		</div>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>

			<BR><BR>
			<div class="container"> 
				<h1>Registro de Herramientas Prestadas</h1>	
				<?php include ('../tabla.html');?>
<DIV id="resultado"></DIV>
<br><br>
			</div>

</html>