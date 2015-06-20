$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlProvedor.php", 
		    {

		    accion: "insertar", 
		    nombre: $('#nombre').val(),
		    cedula:$('#cedula').val(),
		    direccion : $('#direccion').val(),
		    telefono : $('#telefono').val(),
		    email : $('#correo').val(),
		    cuenta : $('#cuentabancaria').val(),
		    banco : $('#banco').val()
					  
		    },

		    function(data)
		    {  

		    mensaje(data);
		    get_provedores();
	    });
	});

		$("#actualizar").click(function(){


          
		$.post("../../control/ControlProvedor.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    nombre: $('#nombre').val(),
		    cedula:$('#cedula').val(),
		    direccion : $('#direccion').val(),
		    telefono : $('#telefono').val(),
		    email : $('#correo').val(),
		    cuenta : $('#cuentabancaria').val(),
		    banco : $('#banco').val()

		    }, 


		    function(data)
		    {   
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormProvedor();
		    get_provedores();
	    });
	});

});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlProvedor.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {  

		    	

		    $('#resultado').html(data);
		   get_provedores();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
         

		$.post("../../control/ControlProvedor.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               
		
            
		   
		    
			var provedor = eval(data.trim());

			$('#id').val(provedor[0]);
			$('#nombre').val(provedor[1]);
		    $('#cedula').val(provedor[2]);
		    $('#direccion').val(provedor[3]);
		    $('#telefono').val(provedor[4]);
		    $('#correo').val(provedor[5]);
		    $('#cuentabancaria').val(provedor[6]);
		    $('#banco').val(provedor[7]);

		   //$('#contenedor').html(data);


		   
		  });
	}
  