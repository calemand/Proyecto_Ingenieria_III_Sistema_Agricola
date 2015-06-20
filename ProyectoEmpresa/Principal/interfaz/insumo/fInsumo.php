<!DOCTYPE html>  
<html lang="es">
	<head >
		<title>Lista de Insumos</title>
		<meta charset="UTF-8">
			<script lang="JavaScript" src="../../js/ajax/ajaxTipoInsumo.js" ></script> 
			<script lang="JavaScript" src="../../js/ajax/ajaxInsumo.js" ></script>
			<script lang="JavaScript" src="../../js/json/jsonInsumo.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryInsumo.js" ></script> 
		</head>
		<body>
	<div class="container"> 
			<form id="f_registrar">
				<input type="hidden"  id="id"/>
				<h1>Registrar Insumo</h1>
				<br></Br>
				 <div class="row">
				 <div class="form-group col-md-12">
                <label>Categoria:</label>	
				<select id="categoria" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
				<label>Nombre:</label>
				<input type="text"  id="nombre" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Descripcion:</label>
				<input type="text"  id="descripcion" class="form-control"/>
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
				<h1>Lista de Insumos </h1>
				<br><br></br></br>
<?php
include ('../tabla.html');
?>

<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>
</html>