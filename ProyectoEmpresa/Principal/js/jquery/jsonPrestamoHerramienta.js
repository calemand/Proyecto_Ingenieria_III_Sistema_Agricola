$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlPrestamoHerramienta.php", 
		    {

		    accion: "insertar", 
		    empleado: $('#empleado').val(),
		    herramienta:$('#herramienta').val(),
		    fecha : $('#fecha').val(),
		    estado : $('#estado').val(),
		    observacion : $('#observacion').val()	  
					  
		    },

		    function(data)
		    {               
		    $('#contenedor').html(data);
		    get_PrestamoHerramientas();
	    });
	});

		$("#actualizar").click(function(){

		$.post("../../control/ControlPrestamoHerramienta.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    empleado: $('#empleado').val(),
		    herramienta:$('#herramienta').val(),
		    fecha : $('#fecha').val(),
		    estado : $('#estado').val(),
		    observacion : $('#observacion').val()	
		
		    },

		    function(data)
		    {    
        
		    $('#contenedor').html(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormPrestamoHerramientas();
		    get_PrestamoHerramientas();

			    });
			});

		});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlPrestamoHerramienta.php", 
		    {
		    accion: "eliminar", 
		    idInsumo : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_PrestamoHerramientas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlPrestamoHerramienta.php", 
		    {
		    accion: "obtener", 
		    idPrestamo : id
		    },

		    function(data)
		    {               
		
		
			var prestamoHerramienta = eval(data.trim());


			$('#id').val(prestamoHerramienta[0]);
			$("#empleado option[value="+ prestamoHerramienta[1] +"]").attr("selected",true);
			$("#herramienta option[value="+ prestamoHerramienta[2] +"]").attr("selected",true);
			$('#fecha').val(prestamoHerramienta[3]);
			$("#estado option[value="+ prestamoHerramienta[4] +"]").attr("selected",true);
			$('#observacion').val(prestamoHerramienta[5]);

			//$('#contenedor').html(data);
				
				
	    });
	}
  