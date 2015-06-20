telefono
get_provedores();

$(document).ready(function(){
	$("#telefono").mask("9999-99-99");

	$("#limpiar").click(function(){
		limpiarFormProvedor();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormProvedor();
	});

	$("#registrar").click(function() {
		limpiarFormProvedor();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormProvedor(){
	
		$('#nombre').val('');
		$('#cedula').val('');
	    $('#direccion').val('');
	    $('#telefono').val('');
	    $('#correo').val('');
	    $('#cuentabancaria').val('');
	    $('#banco').val('');
	
}