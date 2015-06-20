
get_Horas();

$(document).ready(function(){
//$('#identificacion').mask("9 9999 9999");
$('#inicio').mask("99:99");
$('#salida').mask("99:99");
$(function(){
$("#fecha").datepicker();
});

$('#inicio').timepicker();
$('#salida').timepicker();



	$("#limpiar").click(function(){
		limpiarFormHora();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormHora();
	});

	$("#registrar").click(function() {
		limpiarFormHora();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormHora(){
	
		$('#identificacion').val('');
		$('#fecha').val('');
	    $('#inicio').val('');
	    $('#salida').val('');
	
}