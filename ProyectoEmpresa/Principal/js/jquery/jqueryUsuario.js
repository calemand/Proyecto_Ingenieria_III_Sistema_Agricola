$(document).ready(function(){
		if ($("#inter").val()==1) {
		get_tipoUsuarios();
		get_Usuarios();
	}
	$("#identificacion").mask("9-9999-9999");
	$("#cedula").mask("9-9999-9999");

	$("#limpiar").click(function(){
		limpiarFormUsuario();
	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		limpiarFormUsuario();
	});

	$("#registrar").click(function() {
		limpiarFormUsuario();
		
	});
	
	$("#actualizar").hide();
	$("#cancelar").hide();
});


function limpiarFormUsuario(){
		document.getElementById("myForm").reset();
}