$(document).ready(function(){

  		$.post("../../control/ControlUnidadMedida.php", 
		    {
		    accion: "seleccionar", 
		    idProducto : id
		    },

		    function(data)
		    {               
		//	$('#resultado').html(data);
		
			var medida = eval(data.trim());
		
			for(var i in medida){ 
				var lista=document.getElementById("medida");
				var tipo = medida[i];
				lista.options.add(new Option(tipo[1],tipo[0]));		
			}		
	    });

});
	