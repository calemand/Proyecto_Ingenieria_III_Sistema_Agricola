<!DOCTYPE html> 
<html lang="es">
	<head >
		<title>Lista de Inventario de Insumos</title>
		<meta charset="UTF-8">
		<script lang="JavaScript" src="../../js/ajax/ajaxInventarioInsumo.js" ></script> 
		<script lang="JavaScript" src="../../js/jquery/jqueryInventarioInsumo.js" ></script> 	
	</head>
	<!--
	La sigan la numeracion para ver el orden de llamados
	1 get_tipoEmpleados ir al ajax
	1 llenarTabla ir al ajax
	-->
	<body>
		<div class="container"> 
			<h1>Lista de Inventario</h1>
			<br><br></br></br>
			<?php
				include ('../tabla.html');
			?>	
			<DIV id="resultado"></DIV>
		</div>
	</body>
</html>