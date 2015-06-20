$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlPuesto.php", 
		    {

		    accion: "insertar", 
		    puestolaboral: $('#puestolaboral').val(),
		    preciohora:$('#preciohora').val(),
					  
		    },

		    function(data)
		    {               
		    mensaje(data);
		    get_Puestos();
	    });
	});

		$("#actualizar").click(function(){


          
		$.post("../../control/ControlPuesto.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    puestolaboral: $('#puestolaboral').val(),
		    preciohora:$('#preciohora').val(),

		    }, 


		    function(data)
		    {   
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormPuesto();
		    get_Puestos();
	    });
	});

});	

	 function eliminar(id){ 
			
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlPuesto.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {  


		    $('#resultado').html(data);
		   get_Puestos();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
         

		$.post("../../control/ControlPuesto.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               
		
            
		   
		    
			var Puesto = eval(data.trim());

			$('#id').val(Puesto[0][0]);
			$('#puestolaboral').val(Puesto[0][1]);
		    $('#preciohora').val(Puesto[0][2]);

		   
		  });
	}
  