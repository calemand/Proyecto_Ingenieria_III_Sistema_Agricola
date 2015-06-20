get_herramientas();
get_Comboherramientas();
get_ComboProvedores();
var cantEtra;

$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlEntradaHerramienta.php", 
		    {

		    accion: "insertar", 
		    idherramienta:$('#herramienta').val(),
		    idprovedor:$('#provedor').val(),
		    factura : $('#factura').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val()
					  
		    },

		    function(data)
		    {               
		   mensaje(data);
		    limpiarFormHerramienta();
		    get_herramientas();
	    });
	});

		$("#actualizar").click(function(){

		$.post("../../control/ControlEntradaHerramienta.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    idherramienta:$('#herramienta').val(),
		    idprovedor:$('#provedor').val(),
		    factura : $('#factura').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    cant:cantEtra

			
		
		    },

		    function(data)
		    {    
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormHerramienta();
		    get_herramientas();

			    });
			});

		});	

	 function eliminar(id){
			
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlEntradaHerramienta.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		    limpiarFormHerramienta();
		   get_herramientas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
		$.post("../../control/ControlEntradaHerramienta.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },
		    function(data)
		    {     

			var herramienta = eval(data.trim());
			$('#id').val(herramienta[0]);
			$("#herramienta option[value="+ herramienta[1] +"]").attr("selected",true);
			$("#provedor option[value="+ herramienta[2] +"]").attr("selected",true);
			$('#factura').val(herramienta[3]);
			var fecha = herramienta[4];
			$('#fecha').val(fecha.replace("'",""));
			$('#cantidad').val(herramienta[5]);
			cantEtra=$('#cantidad').val();
		$('#contenedor').html(data);	
	    });
	}
  