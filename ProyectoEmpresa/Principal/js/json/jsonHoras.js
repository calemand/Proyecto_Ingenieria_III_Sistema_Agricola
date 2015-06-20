$(document).ready(function(){

	$("#registrar").click(function(){

		$.post("../../control/ControlHoras.php", 
		    {

		    accion: "insertar", 
		    identificacion: $('#identificacion').val(),
		    fecha:$('#fecha').val(),
		    inicio : $('#inicio').val(),
		    salida : $('#salida').val(),
			puesto : $("#puesto").val(),	  
		    },

		    function(data)
		    {               
		    mensaje(data);
		    get_Horas();
	    });
	});

		$("#actualizar").click(function(){


          
		$.post("../../control/ControlHoras.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    identificacion: $('#identificacion').val(),
		    fecha:$('#fecha').val(),
		    inicio : $('#inicio').val(),
		    salida : $('#salida').val(),
		    puesto : $("#puesto").val(),
		    }, 


		    function(data)
		    {   
        
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormHora();
		    get_Horas();
	    });
	});
/********************El autocpompletar cedulas de empleados***************************************/
	var autocompletar = new Array();
	$.post("../../control/ControlEmpleado.php",
		{
			accion:"getCedulas"
		},
	function(data){
		var list = eval(data.trim());
		for(var i in list){ 
			autocompletar.push(list[i]);
		}
	});

	$('#identificacion').autocomplete({
	      source: autocompletar
	  });
/********************llenar como de puestos de trabajo***************************************/

	$.post("../../control/ControlPuesto.php",
		{
			accion:"seleccionar"
		},
	function(data){
		var puestos = eval(data.trim());
		var lista=document.getElementById("puesto");
		for(var i in puestos){ 
			lista.options.add(new Option(puestos[i][1],puestos[i][0]));
		}
	});

});	

	 function eliminar(id){
	
	       confirmar=confirm("Esta apunto de eliminar los datos del activo"); 

        if (confirmar) {

		$.post("../../control/ControlHoras.php", 
		    {
		    accion: "eliminar", 
		    id : id
		    },

		    function(data)
		    {  



		    $('#resultado').html(data);
		   get_Horas();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
         

		$.post("../../control/ControlHoras.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               
		
            
		   
		    
			var hora = eval(data.trim());

			$('#id').val(hora[0][0]);
			$('#identificacion').val(hora[0][1]);
		    $('#fecha').val(hora[0][2]);
		    $('#inicio').val(hora[0][3]);
		    $('#salida').val(hora[0][4]);

		   // $('#contenedor').html(data);


		   
		  });
	}
  