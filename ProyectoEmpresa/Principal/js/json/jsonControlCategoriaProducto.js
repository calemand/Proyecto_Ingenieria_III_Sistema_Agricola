$(document).ready(function(){
$("#contenedor").hide();
	$("#registrar").click(function(e){
		 e.preventDefault();
		$("#contenedor").hide();

		$.post("../../control/ControlCategoriaProducto.php", 
		    {
		    accion: "insertar", 
		    
			nombre:$('#nombre').val()
		
		    },
		    function(data){
			mensaje(data);
		    refrescarTabla();
		    limpiarFormEmpleado();

	    });
	});

		$("#actualizar").click(function(e){
		 e.preventDefault();
		$("#contenedor").hide();
		$.post("../../control/ControlCategoriaProducto.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
			nombre:$('#nombre').val(),
		    },

		    function(data)
		    {    
		    mensaje(data);
		    
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			$("#hRegistrar").show();
  			$("#hModificar").hide();
  			refrescarTabla();
  			limpiarFormEmpleado();
	    });
	});
		
});	

	 function eliminar($id){

	       confirmar=confirm("¿Esta apunto de eliminar los datos la unidad"); 

        if (confirmar) {

		$.post("../../control/ControlCategoriaProducto.php", 
		    {
		    accion: "eliminar", 
		    id : $id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   refrescarTabla();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();
  	$("#hRegistrar").hide();
  	$("#hModificar").show();
  

		$.post("../../control/ControlCategoriaProducto.php", 
		    {
		    accion: "obtener", 
		    id : id
		    },

		    function(data)
		    {               

 //$('#resultado').html(data);
			var unidad = eval(data.trim());
		//	alert(unidad);
			$('#nombre').val(unidad[0]);
			$('#id').val(unidad[1]);
	    });
	}


function refrescarTabla(){
	  var objTabla=document.getElementById('tabla');
			//bajamos la opacidad de la tabla hasta estar invisible
			$(objTabla).animate({'opacity':0},500,function(){
				//eliminar la tabla
				$(this).remove();
			});
			get_categoria_productos();
}

