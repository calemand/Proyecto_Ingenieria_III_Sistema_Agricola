<!DOCTYPE html>  
<html lang="es">
	<head >
		<title>Cosecha</title>
		<meta charset="UTF-8">
			<script lang="JavaScript" src="../../js/ajax/ajaxProducto.js" ></script>

			<script lang="JavaScript" src="../../js/ajax/ajaxCategoriaProducto.js" ></script>
			<script lang="JavaScript" src="../../js/ajax/ajaxMedida.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryCosecha.js" ></script>

		<!--	<script lang="JavaScript" src="../../js/json/jsonMedida.js" ></script> -->
			
			<script lang="JavaScript" src="../../js/json/jsonCosecha.js" ></script> 

		</head>
		<!--
		La sigan la numeracion para ver el orden de llamados
		1 get_tipoEmpleados ir al ajax
		1 llenarTabla ir al ajax
		 -->
		<body>
			<div class="container"> 

			<form id="f_registrar">
				<a type="hidden"  id="id"/>
				<h1 id="hRegistrar">Registrar Cosecha</h1>
				<h1 id="hModificar">Modificar Cosecha</h1>
				 <br></Br>
				
				<div class="row">
				<div class="form-group col-md-6">
                <label>Categoria:</label>	
				<select id="categoriaProducto" style="width:150;" class="form-control">
					<option value=0>Selecione una categoria</option>
				</select>
				</div>

				 <div class="form-group col-md-6">
                <label>Producto:</label>	
				<select id="idProducto" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
				<label>Cantidad:</label>
				<input type="text"  id="cantidad" class="form-control int">
				</div>
				<div class="form-group col-md-6">
                <label>Unidad:</label>	
				<select id="medida" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
                <label>Precio actual:</label>	
				<input type="text"  id="precio" class="form-control int">
				</div>

				<div class="form-group col-md-6">
                <label>Fecha:</label>	
				<input type="text"  id="fecha" class="form-control">
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
				<h1>Registro de Cosechas </h1>
				<br><br>
<?php
			include ('../tabla.html');
?>
			<BR>	
<DIV id="resultado"></DIV>
				<br><br></br></br>
</div>

</html>