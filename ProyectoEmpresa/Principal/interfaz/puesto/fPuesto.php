<!DOCTYPE html> 
<html lang="es">
	<head >
		<title> Puestos</title>
		<meta charset="UTF-8">

		    <script lang="JavaScript" src="../../js/ajax/ajaxPuesto.js" ></script>

			<script lang="JavaScript" src="../../js/json/jsonPuesto.js" ></script>

			<script lang="JavaScript" src="../../js/jquery/jqueryPuesto.js" ></script>
		
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
				
				<h1>Administrar Puestos</h1>

				<br>

                <div class="row">

				 <div class="form-group col-md-6">
                <label>Puesto:</label>	
				<input type="text"  id="puestolaboral" class="form-control string"/>
				</div>

				<div class="form-group col-md-6">
                <label>Precio Por Hora:</label>	
				<input type="text"  id="preciohora" class="form-control int"/>
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
				<h1>Ultimos registros</h1>
				<br><br></br></br>
				<?php
					include ('../tabla.html');
				?>
<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>

</html>