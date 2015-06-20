
get_herramientas();

$(document).ready(function(){

$(function(){
$("#fecha").datepicker();
});	


	$("#limpiar").click(function(){
		limpiarFormHerramienta();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormHerramienta();
	});

	$("#registrar").click(function() {
		limpiarFormHerramienta();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormHerramienta(){
	
		$('#nombre').val('');
		$('#marca').val('');
		$('#descripcion').val('');
		
}