get_Insumos();
get_Cultivos();
get_Salidas();

$(document).ready(function(){
$(function(){
$("#fecha").datepicker();
});	
	
	$("#limpiar").click(function(){
		limpiarFormSalidas();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormSalidas();
	});

	$("#registrar").click(function() {
		limpiarFormSalidas();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormSalidas(){
	
		$('#cultivo').val('');
		$('#fecha').val('');
	    $('#cantidad').val('');
	   
	
}