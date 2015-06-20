get_tipoInsumos();
get_insumos();

$(document).ready(function(){

	
	$("#limpiar").click(function(){
		limpiarFormInsumo();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormInsumo();
	});

	$("#registrar").click(function() {
		limpiarFormInsumo();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormInsumo(){
	
		$('#nombre').val('');
		$('#descripcion').val('');
		
}