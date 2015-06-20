get_Insumos();
get_ComboProvedores();
get_EntradasInsumo();

$(document).ready(function(){

$(function () {
$("#fecha").datepicker();
});	
	$("#limpiar").click(function(){
		limpiarFormEntrada();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormEntrada();
	});

	$("#registrar").click(function() {
		limpiarFormEntrada();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormEntrada(){
	
		$('#Nfactura').val('');
		$('#fecha').val('');
	    $('#cantidad').val('');
}