<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Provedores</title>
		<meta charset="UTF-8">
		       <script lang="JavaScript" src="../../js/jquery/validarEntradas.js" ></script> 
		       
		  <script lang="JavaScript" src="../../js/ajax/ajaxProvedor.js" ></script>
			 <script lang="JavaScript" src="../../js/json/jsonProvedor.js" ></script>

 
			<script lang="JavaScript" src="../../js/jquery/jqueryProvedor.js" ></script>

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
				
				<h1>Registrar Provedores</h1>

				<br>

                <div class="row">

				<div class="form-group col-md-6">
                <label>Nombre Proveedor:</label>	
				<input type="text"  id="nombre" class="form-control string"/>
				</div>
                                
				<div class="form-group col-md-6">
                <label>Cedula Juridica:</label>	
				<input type="text"  id="cedula" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Dirección:</label>
				<input type="text"  id="direccion" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Telefono:</label>
				<input type="text"  id="telefono" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>E-mail:</label>
				<input type="text"  id="correo" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Cuenta Bancaria:</label>
				<input type="text"  id="cuentabancaria" class="form-control"/>
				</div>

				<div class="form-group col-md-6">
				<label>Banco:</label>
				<input type="text"  id="banco" class="form-control string"/>
				</div>
</div>		<br>

				<input type="button" id="actualizar" value="Actualizar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-xs-12 col-sm-12"/>
				<input type="button" id="registrar" value="Registrar" class="btn btnStyle btn-primary pull-left btn-lg col-md-2  col-xs-12 col-sm-12"/>
				<input type="button" id="cancelar" value="Cancelar" class="btn btnStyle btn-danger pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
				<input type="button" id="limpiar" value="Limpiar Formulario" class="btn btnStyle btn-primary pull-left btn-lg col-md-2 col-md-offset-1 col-xs-12 col-sm-12"/>
			</form>
			<br><br></br></br><br><br></br></br>
			<DIV id="contenedor"></DIV>

			<BR><BR>
				<br><br></br></br>
				<h1>Lista de Provedores</h1>
				<br><br></br></br>
			<?php
			include ('../tabla.html');
			?>

<DIV id="resultado"></DIV>
						<br><br></br></br>
</div>

</html>