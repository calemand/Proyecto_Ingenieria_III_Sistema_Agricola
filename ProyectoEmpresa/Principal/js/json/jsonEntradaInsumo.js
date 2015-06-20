var cantEtra;

$(document).ready(function(){

	var cant;

	$("#registrar").click(function(){

		$.post("../../control/ControlEntradaInsumo.php", 
		    {

		    accion: "insertar", 
		    insumo: $('#insumo').val(),
		    provedor:$('#provedor').val(),
		    NFactura : $('#Nfactura').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val()
		   
		   
					  
		    }, 

		    function(data)
		    {              
		    mensaje(data);
		   get_EntradasInsumo();
	    });
	});

		$("#actualizar").click(function(){


          
		$.post("../../control/ControlEntradaInsumo.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    insumo: $('#insumo').val(),
		    provedor:$('#provedor').val(),
		    NFactura : $('#Nfactura').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    cant:cantEtra
		    
		    }, 


		    function(data)
		    {   
        
		    $('#contenedor').html(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormEntrada();
		    get_EntradasInsumo();
	    });
	});

});	

	 function eliminar(id){
			
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlEntradaInsumo.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {  

		    	

		    $('#resultado').html(data);
		   get_EntradasInsumo();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
         

		$.post("../../control/ControlEntradaInsumo.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               
		
            
		   
		    
			var entrada = eval(data.trim());

			$('#id').val(entrada[0]);
			$('#insumo').val(entrada[1]);
		    $('#provedor').val(entrada[2]);
		    $('#Nfactura').val(entrada[3]);
		    $('#fecha').val(entrada[4]);
		    $('#cantidad').val(entrada[5]);
		  
		  cantEtra=$('#cantidad').val();
		  

		   //$('#contenedor').html(data);


		   
		  });
	}