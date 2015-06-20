//get_tipoEmpleados();
get_empleados();

$(document).ready(function(){

	$("#cedula").mask("9-9999-9999");
	$("#telefono").mask("9999-99-99");

	$("#limpiar").click(function(){
		limpiarFormEmpleado();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormEmpleado();
	});

	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormEmpleado(){
	$('#cedula').val('');
		$('#nombre').val('');
		$('#apellidos').val('');
		$('#correo').val('');
		$('#telefono').val('');
		$('#direccion').val('');
}