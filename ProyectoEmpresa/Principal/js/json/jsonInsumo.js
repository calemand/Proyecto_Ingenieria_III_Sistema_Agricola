$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlInsumo.php", 
		    {

		    accion: "insertar", 
		    categoria: $('#categoria').val(),
		    nombre:$('#nombre').val(),
		    descripcion : $('#descripcion').val()
					  
		    },

		    function(data)
		    {               
		    mensaje(data);
		    get_insumos();
	    });
	});

		$("#actualizar").click(function(){

		$.post("../../control/ControlInsumo.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    categoria: $('#categoria').val(),
		    nombre:$('#nombre').val(),
			descripcion:$('#descripcion').val()

			
		
		    },

		    function(data)
		    {    
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormInsumo();
		    get_insumos();

			    });
			});

		});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlInsumo.php", 
		    {
		    accion: "eliminar", 
		    idInsumo : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_insumos();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlInsumo.php", 
		    {
		    accion: "obtener", 
		    idInsumo : id
		    },

		    function(data)
		    {               
		
		
			var insumo = eval(data.trim());


			$('#id').val(insumo[0]);
			$("#categoria option[value="+ insumo[1] +"]").attr("selected",true);
			$('#nombre').val(insumo[2]);
			$('#descripcion').val(insumo[3]);
				
				
	    });
	}
  