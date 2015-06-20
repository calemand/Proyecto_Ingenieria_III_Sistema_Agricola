$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlHerramienta.php", 
		    {

		    accion: "insertar", 
		    nombre:$('#nombre').val(),
		    marca:$('#marca').val(),
		    descripcion : $('#descripcion').val()
					  
		    },

		    function(data)
		    {               
		    mensaje(data);
		    get_herramientas();
	    });
	});

		$("#actualizar").click(function(){

		$.post("../../control/ControlHerramienta.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    nombre:$('#nombre').val(),
		    marca:$('#marca').val(),
			descripcion:$('#descripcion').val()

			
		
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
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlHerramienta.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_herramientas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlHerramienta.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },
		    function(data)
		    {        		
			var herramienta = eval(data.trim());


			$('#id').val(herramienta[0]);
			$('#nombre').val(herramienta[1]);
			$('#marca').val(herramienta[2]);
			$('#descripcion').val(herramienta[3]);

			//$('#contenedor').html(data);

				
				
	    });
	}
  