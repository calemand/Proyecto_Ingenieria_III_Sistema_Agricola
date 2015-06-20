$(document).ready(function(){


	$("#mostrar").click(function(){
		$("#miTabla thead tr .noImprimir").show();
		$("#miTabla tbody tr .noImprimir").show();
		$("#mostrar").hide();
		$("#ocultar").show();
		refrescarJquery(true);			
	});


	$("#ocultar").click(function(){
		$("#miTabla thead tr .noImprimir").hide();
		$("#miTabla tbody tr .noImprimir").hide();
		$("#mostrar").show();
		$("#ocultar").hide();
		refrescarJquery(false);
	});
	$("#mostrar").hide();
});

function refrescarJquery(mostrar){

	$(document).ready(function(){
		$(".paginate_button current ").click(function(){
			controlarComulunas(mostrar);
		});

		$(".paginate_button").click(function(){
			controlarComulunas(mostrar);
		});

		$(".sorting").click(function(){
			controlarComulunas(mostrar);
		});

		$(".sorting_asc").click(function(){
			controlarComulunas(mostrar);
		});
	});
}
function controlarComulunas(mostrar){
	if(!mostrar){
		$("#miTabla thead tr .noImprimir").hide();
		$("#miTabla tbody tr .noImprimir").hide();
		refrescarJquery(false);
	}else{
		$("#miTabla thead tr .noImprimir").show();
		$("#miTabla tbody tr .noImprimir").show();
		refrescarJquery(true);
	}
}