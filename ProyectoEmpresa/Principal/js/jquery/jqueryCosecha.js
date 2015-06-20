//llenarComboProductos();
get_categoriaProducto();
get_unidades();
$(document).ready(function(){

$(function(){
$("#fecha").datepicker();
});
	$("#limpiar").click(function(){
	limpiarFormularioCosecha();

	});

	$("#cancelar").click(function(){
		$("#registrar").show();
		$("#cancelar").hide();
		$("#actualizar").hide();
			$("#hRegistrar").show();
  		$("#hModificar").hide();
	});


	$("#actualizar").hide();
	$("#cancelar").hide();
		$("#hModificar").hide();
});

function limpiarFormularioCosecha()
{
	$("#cantidad").val('');
	$("#precio").val('');
	$("#categoriaProducto option[value=0]").attr("selected",true);
	$('#producto').html('');
	 $('#idProducto').html('');
	$('#fecha').val('');
}
