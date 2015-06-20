<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
//include ("../../dominio/Usuario.php");?>
<html>

	<head>
		<TITLE>Registrar Jefe</TITLE>
		<script lang="JavaScript" src="../../js/Json/Json.js" ></script>  
		<script lang="JavaScript" src="../../js/jquery/jQuery.js"></script>

		<script lang="JavaScript" src="../../js/json/jsonUsuario.js" ></script>
		<script lang="JavaScript" src="../../js/jquery/jqueryUsuario.js"></script>

		<script lang="JavaScript" src="../../js/jquery/jquery.maskedinput.min.js"></script>
	<!--	<script lang="JavaScript" src="../../js/Ajax/ajax_usuario.js" ></script>   -->

	</head>

	<body>
	
			<FORM>	
				<input type="hidden"  id="inter" value='0'/>
				<table border="1px">
				<tr>
					<th colspan="2"><label>Registrar Jefe</label></th >
				</tr>
				<tr>
					<td><label>Ingrese su numero de cedula: </label></td>
					<td><input type="text" id="cedula" placeholder="1-1234-1234" size="30"/></td>
				</tr>
				<tr>
					<td><label>Contraseña: </label></td>
					<td> <input type="password"  id="pass1" size="30"/></td>
				</tr>
				<tr>
					<td><label>Confirmar Contraseña: </label></td>
					<td> <input type="password" id="pass2" size="30"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="button" id="registrarJefe" value="Registrar"/></td>
				</tr>
				</table>

			</FORM>
			<DIV id="contenedor"></DIV>
	</body>

</html>
