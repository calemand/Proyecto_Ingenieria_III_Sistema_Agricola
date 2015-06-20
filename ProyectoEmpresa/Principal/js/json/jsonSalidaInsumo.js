var cantSali;

$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlSalidaInsumo.php", 
		    {

		    accion: "insertar", 
		    insumo: $('#insumo').val(),
		    cultivo : $('#cultivo').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    
					  
		    },

		    function(data)
		    {               
		    $('#contenedor').html(data);
		    limpiarFormSalidas();
		    mensaje(data);
		    get_Salidas();
	    });
	});

		$("#actualizar").click(function(){


          
		$.post("../../control/ControlSalidaInsumo.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    insumo: $('#insumo').val(),
		    cultivo : $('#cultivo').val(),
		    fecha : $('#fecha').val(),
		    cantidad : $('#cantidad').val(),
		    cant:cantSali
		    
		    }, 


		    function(data)
		    {   
			mensaje(data);
		    $('#contenedor').html(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormSalidas();
		    get_Salidas();
	    });
	});

});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlSalidaInsumo.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {  

		    	

		    $('#resultado').html(data);
		   get_Salidas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
         

		$.post("../../control/ControlSalidaInsumo.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               
		
            
		   
		    
			var entrada = eval(data.trim());

			$('#id').val(entrada[0]);
			$('#insumo').val(entrada[1]);
		    $('#cultivo').val(entrada[2]);
		    $('#fecha').val(entrada[3]);
		    $('#cantidad').val(entrada[4]);

		    cantSali=$('#cantidad').val();
		  

		  // $('#contenedor').html(data);


		   
		  });
	}