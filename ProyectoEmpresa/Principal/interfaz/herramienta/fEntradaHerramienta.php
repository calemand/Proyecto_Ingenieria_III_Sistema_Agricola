<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Entrada de Herramientas</title>
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/ajax/ajaxcomboHerramientas.js" ></script>
		<script lang="JavaScript" src="../../js/ajax/ajaxcomboProvedor.js" ></script>
		<script lang="JavaScript" src="../../js/ajax/ajaxEntradaHerramienta.js" ></script>
		<script lang="JavaScript" src="../../js/json/jsonEntradaHerramienta.js" ></script>
		<script lang="JavaScript" src="../../js/jquery/jqueryHerramienta.js" ></script> 
		</head>
		<body>
			<div class="container"> 
			<form id="f_registrar">
				<input type="hidden"  id="id"/>
				<h1>Entrada de Herramienta</h1>
                 <br></Br>
                <div class="row">
                <div class="form-group col-md-4">
                <label>Herramienta:</label>	
				<select id="herramienta" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-4">
                <label>Provedor:</label>	
				<select id="provedor" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-4">
				<label for="fecha">Fecha:</label>
 				<input type="text" id="fecha" value="" class="form-control" /> 
				</div>

				<div class="form-group col-md-12">
				<label>N° Factura:</label>
				<input type="text"  id="factura" class="form-control"/>
				</div>

				<div class="form-group col-md-12">
				<label>Cantidad:</label>
				<input type="text"  id="cantidad" class="form-control int"/>
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
				<h1>Lista de Entrada de Herramientas</h1> 
<?php
					include ('../tabla.html');
				?>		
<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>

</html>