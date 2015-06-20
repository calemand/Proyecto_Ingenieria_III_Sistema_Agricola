<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Entrada de Insumos</title>
		<meta charset="UTF-8">

		   <script lang="JavaScript" src="../../js/ajax/ajaxEntradaInsumo.js" ></script>
		   <script lang="JavaScript" src="../../js/ajax/ajaxcomboInsumo.js" ></script>
		   <script lang="JavaScript" src="../../js/ajax/ajaxcomboProvedor.js" ></script>
			<script lang="JavaScript" src="../../js/json/jsonEntradaInsumo.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jqueryEntradaInsumo.js" ></script>
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
				
				
				<h1>Registrar Entradas de Insumos</h1>
				<br>

                <div class="row">

				 <div class="form-group col-md-6">
                <label>Insumo:</label>	
				<select id="insumo" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
                <label>Proveedor:</label>	
				<select id="provedor" style="width:150;" class="form-control"></select>
				</div>

				<div class="form-group col-md-6">
				<label>N° Factura:</label>
				<input type="text"  id="Nfactura" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label for="fecha">Fecha:</label>
 				<input type="text" id="fecha"  class="form-control"/>             
				</div>

				<div class="form-group col-md-6">
				<label>Cantidad:</label>
				<input type="text"  id="cantidad" class="form-control int"/>
				</div>

				</div>		<br>

				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			
			<DIV id="contenedor"></DIV>
	
			<br><br>
		
				<h1>Lista de Entradas de Insumos</h1>
				<br><br></br></br>

			<?php
				include ('../tabla.html');
			?>
<DIV id="resultado"></DIV>
			<br><br></br></br>
</div>

</html>