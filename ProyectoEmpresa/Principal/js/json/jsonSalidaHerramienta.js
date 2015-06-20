
var cantSali;

$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlSalidaHerramienta.php", 
		    {

		    accion: "insertar", 
		    idherramienta:$('#herramienta').val(),		    
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    detalle : $('#detalle').val()
					  
		    },

		    function(data)
		    {               
		    mensaje(data);
		    limpiarFormSalidaHerramienta();
		    get_SalidaHerramientas();
	    });
	});

		$("#actualizar").click(function(){

		$.post("../../control/ControlSalidaHerramienta.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    idherramienta:$('#herramienta').val(),		    
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    detalle : $('#detalle').val(),
		    cant:cantSali		
		
		    },

		    function(data)
		    {    
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormSalidaHerramienta();
		    get_SalidaHerramientas();

			    });
			});

		});	

	 function eliminar(id){
			
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlSalidaHerramienta.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },
		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_SalidaHerramientas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlSalidaHerramienta.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },



		    function(data)
		    {               
		
		
			var herramienta = eval(data.trim());


			$('#id').val(herramienta[0]);
			$("#herramienta option[value="+ herramienta[1] +"]").attr("selected",true);			
			$('#fecha').val(herramienta[4]);
			$('#cantidad').val(herramienta[5]);
			$('#detalle').val(herramienta[6]);

			cantSali=$('#cantidad').val();

			//$('#contenedor').html(data);

			


			 

				
				
	    });
	}
  