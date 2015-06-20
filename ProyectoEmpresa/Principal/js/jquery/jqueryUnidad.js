get_unidades();

$(document).ready(function(){

	$("#limpiar").click(function(){
		limpiarFormEmpleado();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
		$("#hRegistrar").show();
  		$("#hModificar").hide();
		limpiarFormEmpleado();
	});
//funcion para eliminar filas de una tabla
/*
	$(document).on("click","#eliminar",function(){
		alert($("#eliminar").text());
		//eliminina filas de la tabla directamente
		var parent = $(this).parents().get(0);
		$(parent).remove();
	
	});*/	
	$("#actualizar").hide();
	$("#cancelar").hide();
	$("#hModificar").hide();
	
});


function limpiarFormEmpleado(){
	$('#nombre').val('');

}