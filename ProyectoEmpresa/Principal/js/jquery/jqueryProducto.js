$(document).ready(function(){

	
	$("#limpiar").click(function(){
		limpiarFormEmpleado();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormEmpleado();
	});

	$("#registrar").click(function() {
		limpiarFormEmpleado();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormEmpleado(){
	
		$('#nombreProducto').val('');
		
}