
get_Puestos();

$(document).ready(function(){

	
	$("#limpiar").click(function(){
		limpiarFormPuesto();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormPuesto();
	});

	$("#registrar").click(function() {
		limpiarFormPuesto();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormPuesto(){
	
		$('#puestolaboral').val('');
		$('#preciohora').val('');
	
}