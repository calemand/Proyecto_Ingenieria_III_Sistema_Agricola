<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
include ("../../dominio/Usuario.php");?>
<html>

	<head>
		<TITLE>Registrar Jefe</TITLE>
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/Json/Json.js" ></script>  
		<script lang="JavaScript" src="../../js/jquery/jQuery.js"></script>

		<script lang="JavaScript" src="../../js/json/jsonUsuario.js" ></script>
		<script lang="JavaScript" src="../../js/jquery/jqueryUsuario.js"></script>

		<script lang="JavaScript" src="../../js/jquery/jquery.maskedinput.min.js"></script>
	<!--	<script lang="JavaScript" src="../../js/Ajax/ajax_usuario.js" ></script>   -->
	<!--******************************* bootstrap ****************************************-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/style.css" rel="stylesheet" />
    <script src="../../js/bootstrap.js"></script>

	</head>

	<body>
	
		<div class="container center_container">
	
			<FORM>	
				<input type="hidden"  id="inter" value='0'/>
				

				
					<h1 class="form-signin-heading">Registrar Jefe</h1>
					<h3 class="form-signin-heading">Ingrese su numero de cedula: </h3>
					<input type="text" id="cedula" placeholder="1-1234-1234" size="30" class="form-control"/>
					<h3 class="form-signin-heading">Contrase&ntildea: </h3>
					<input type="password"  id="pass1" size="30" class="form-control"/>
					<h3 class="form-signin-heading">Confirmar Contrase&ntildea: </h3>
					<input type="password" id="pass2" size="30" class="form-control"/>
					<input type="button" id="registrarJefe" value="Registrar" class="btn btnStyle btn-primary"/>
				

			</FORM>
			<DIV id="contenedor"></DIV>

		</div>
	</body>

</html>
