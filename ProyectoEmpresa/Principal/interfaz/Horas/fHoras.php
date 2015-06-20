<!DOCTYPE html>  
<html lang="es">
	<head >
		<title> Horas Laboral</title>
		<meta charset="UTF-8">

		    <script lang="JavaScript" src="../../js/ajax/ajaxHoras.js" ></script>    
	
			<script lang="JavaScript" src="../../js/json/jsonHoras.js" ></script>

			<script lang="JavaScript" src="../../js/jquery/jqueryHoras.js" ></script>
	
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
				
				<h1>Registrar Jornada</h1>
				 <br></Br>
				<div class="row">
				<div class="form-group col-md-6" >
                <label>Identificacion:</label>	
				<input type="text"  id="identificacion" class="form-control"/>
				</div>

				
				<div class="form-group col-md-6">
              <label for="fecha">Fecha:</label>	
				<input type="text"  id="fecha"  class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>inicio</label>
				<input type="text"  id="inicio"  class="form-control bfh-timepicker" data-time="now"/>
				</div>

				<div class="form-group col-md-6">
					<label>Salida:</label>
					<div class="bfh-timepicker">
						<input type="text"  id="salida"  class="form-control"/>
					</div>	
				</div>

				<div class="form-group col-md-6">
					<label>Puesto Trabajado</label>
					<select id="puesto" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
				</div>		<br>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				</div>
			</form>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>

			
				<br><br></br></br>
				<h1>Ultimos registros</h1>

				<?php
			include ('../tabla.html');
?>
<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>
</html>