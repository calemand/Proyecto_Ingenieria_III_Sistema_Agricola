<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Productos</title>
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/ajax/ajaxCategoriaProducto.js" ></script> 
		<script lang="JavaScript" src="../../js/ajax/ajaxProducto.js" ></script>
		<script lang="JavaScript" src="../../js/jquery/jqueryProducto.js" ></script>
		<script lang="JavaScript" src="../../js/json/jsonProducto.js" ></script>		
	</head>
	<body>
		<div class="container"> 
			<form id="f_registrar">
				<input type="hidden" id="id"/>
				<h1>Registrar Producto</h1>
				<br>
				<div class="row">
					<div class="form-group col-md-2">
						<label>Categoria:</label>	
						<select id="categoriaProducto" style="width:150;"  class="form-control"></select>
					</div>
					<div class="form-group col-md-10">
						<label>Nombre del producto:</label>
						<input type="text"  id='nombre'  class="form-control string"/>
					</div>
				</div>
				<br>
				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>
				<br><br></br></br>
				<h1>Categoria de Productos</h1>	
				<br><br></br></br>
			<br><br></br></br>
		<div>
			<?php
				include ('../tabla.html');
			?>	
			<DIV id="resultado"></DIV>
			<br><br></br></br>
	</body>

</html>

