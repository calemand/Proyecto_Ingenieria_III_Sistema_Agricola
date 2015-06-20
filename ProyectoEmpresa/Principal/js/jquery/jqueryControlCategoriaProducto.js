get_categoria_productos();

$(document).ready(function(){

	$("#limpiar").click(function(){
	limpiarFormEmpleado();
	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		$("#hRegistrar").show();
		$("#hModificar").hide();
		limpiarFormEmpleado();
	});


	$("#actualizar").hide();
	$("#cancelar").hide();
	$("#hModificar").hide();
});


function limpiarFormEmpleado(){
	$('#nombre').val('');
}

