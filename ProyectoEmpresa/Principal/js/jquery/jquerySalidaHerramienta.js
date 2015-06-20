get_Comboherramientas();
get_SalidaHerramientas();
$(document).ready(function(){
$(function(){
$("#fecha").datepicker();
});	
	
	$("#limpiar").click(function(){
		limpiarFormSalidaHerramienta();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormSalidaHerramienta();
	});

	$("#registrar").click(function() {
		limpiarFormSalidaHerramienta();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormSalidaHerramienta(){	
		
		$('#fecha').val('');
		$('#cantidad').val('');
		$('#detalle').val('');
		
}