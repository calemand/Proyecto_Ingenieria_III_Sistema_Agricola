$(document).ready(function(){
					
	$("#registrar").click(function(){
	
		$.post("../../control/ControlEmpleado.php", 
		    {
		    accion: "insertar", 
		    cedula : $('#cedula').val(),
			nombre:$('#nombre').val(),
			apellidos:$('#apellidos').val(),
			correo:$('#correo').val(),
			telefono:$('#telefono').val(),
			direccion:$('#direccion').val(),
			genero:$('input:radio[name=genero]:checked').val(),
		    tipo: $('#puesto').val()
		    },

		    function(data)
		    {               
		    mensaje(data);
		    get_empleados();
	    });
	});

		$("#actualizar").click(function(){
//	alert("genero "+$('#genero').val());
		$.post("../../control/ControlEmpleado.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    cedula : $('#cedula').val(),
			nombre:$('#nombre').val(),
			apellidos:$('#apellidos').val(),
			correo:$('#correo').val(),
			telefono:$('#telefono').val(),
			direccion:$('#direccion').val(),
			genero:$('input:radio[name=genero]:checked').val(),
		    },

		    function(data)
		    {    
        
		 mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormEmpleado();
		    get_empleados();
	    });
	});

		
/*	$("#tabla #id").click(function(){
		alert("dato "+ this.innerText());
	});
*/
});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del empleado"); 
        if (confirmar) {

		$.post("../../control/ControlEmpleado.php", 
		    {
		    accion: "eliminar", 
		    cedula : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_empleados();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlEmpleado.php", 
		    {
		    accion: "obtener", 
		    cedula : id
		    },

		    function(data)
		    {               
	//	$('#resultado').html(data);
		
			var empleado = eval(data.trim());
			$('#id').val(empleado[0]);
			$('#cedula').val(empleado[0]);
			$('#nombre').val(empleado[1]);
			$('#apellidos').val(empleado[2]);
			$('#correo').val(empleado[3]);
			$('#telefono').val(empleado[4]);
			$('#direccion').val(empleado[5]);

			if(empleado[6]=='m'){
				$("#genero_m").prop("checked", true);
			}else{
				$("#genero_f").prop("checked", true);	
			}	
			$("#puesto option[value="+ empleado[7] +"]").attr("selected",true);	
	    });
	}
  
