$(document).ready(function(){
	$("#registrar").click(function(e){
		 e.preventDefault();
		$.post("../../control/ControlUsuario.php", 
		    {
		    accion: "insertar", 
		    tipo: $('#puesto').val(),
		    identificacion:$('#identificacion').val(),
		    contrasena : $('#contrasena').val()		  
		    },
		    function(data)
		    {               
		    mensaje(data);
		    get_Usuarios();
	    });
	});

	$("#registrarJefe").click(function(e){
		 e.preventDefault();
		var	pass1 = $("#pass1").val();
		var pass2 = $("#pass2").val();
		var mensaje ="";
		if($('#cedula').val()==""){
			mensaje+="Por favor ingrese su numero de cedula\n";
		}else{
			if(pass1!=pass2 || pass1=='' || pass2=='' ){
				mensaje+="La contraseña no coincide o estan en blanco";
				alert(mensaje);
				$("#pass1").val('');
				$("#pass2").val('');
		}else{
			// Json para el envia de informacion 
  		  $.post("../../control/ControlUsuario.php", 
		    {
		    	//indicar que datos se envian
		    accion: "insertar", 
		    identificacion: $('#cedula').val(),
		    contrasena: $('#pass1').val(),
		    tipo: 0
		    },
		    function(data)
		    {                  
	//	    $('#contenedor').html(data);
		   window.location ="../inicio"; 
	    });
		}
	}
	});

	$("#actualizar").click(function(e){
		 e.preventDefault();
		$.post("../../control/ControlUsuario.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    tipo: $('#puesto').val(),
		    identificacion:$('#identificacion').val(),
			contrasena:$('#contrasena').val()
		    },
		    function(data)
		    {       
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormUsuario();
		    get_Usuarios();
	    });
	});
		
	$("#login").click(function(e){
		 e.preventDefault();
		var	pass = $("#pass").val();
		var	cedula = $("#cedula").val();
		if(pass=='' || cedula==''){
			$('#contenedor').html("Ingrese los datos");
		}else{
			$.post("../../control/ControlUsuario.php", 
			    {
			    accion: "validarUsuario", 
			    identificacion: cedula,
			    contrasena: pass
			    },
			    function(data)
			    {        
			 	if(data=="1"){
			 		window.location.href = "../"; 
			 	}else{
			 		$('#contenedor').html(data.trim());  
			 	}
		    });
		}
	});
});	

	 function eliminar(id){
			
	       confirmar=confirm("Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlUsuario.php", 
		    {
		    accion: "eliminar", 
		    cedula : id
		    },

		    function(data)
		    {    
         
			    $('#resultado').html(data);
			   get_Usuarios();
	    });
	    }
     }
  
  function modificar(id){

  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlUsuario.php", 
		    {
		    accion: "obtener", 
		    cedula : id
		    },

		    function(data)
		    {               
		//	$('#resultado').html(data);
		
			var Usuario = eval(data.trim());
			$('#id').val(Usuario[0]);
			$("#puesto option[value="+ Usuario[1] +"]").attr("selected",true);
			$('#identificacion').val(Usuario[0]);
			$('#contrasena').val(Usuario[3]);
				
				
	    });
	}
  