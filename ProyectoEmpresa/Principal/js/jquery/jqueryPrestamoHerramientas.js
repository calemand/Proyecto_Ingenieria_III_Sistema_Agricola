get_Comboherramientas();
get_ComboEmpleados();
get_ComboEstadoHerramienta();
get_PrestamoHerramientas();

$(document).ready(function(){
	
$(function () {
$("#fecha").datepicker();
});	
	
	$("#limpiar").click(function(){
		limpiarFormPrestamoHerramientas();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormPrestamoHerramientas();
	});

	$("#registrar").click(function() {
		limpiarFormPrestamoHerramientas();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormPrestamoHerramientas(){
	
		$('#observacion').val('');
		$('#fecha').val('');
		$('#empleado').val('');
		$('#herramienta').val('');
		$('#estado').val('');
		
}