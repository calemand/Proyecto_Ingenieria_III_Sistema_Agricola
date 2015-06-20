get_categoriaProducto();
get_productos();
$(document).ready(function(){
	
	$("#registrar").click(function(){

	//	alert($('#categoriaProducto').val()+"\n"+$('#nombreProducto').val());

		$.post("../../control/ControlProducto.php", 
		    {
		    accion: "insertar", 
		    tipo: $('#categoriaProducto').val(),
		    nombre: $('#nombre').val(),
 		    },
	    function(data)
		    {
		    mensaje(data);
		    get_productos();
	    });
	});

		$("#actualizar").click(function(){
		//	alert("genero "+$('#genero').val());
		$.post("../../control/ControlProducto.php", 
		    {
		    accion: "actualizar",
		    id: $('#id').val(),
		    tipo: $('#categoriaProducto').val(),
		    nombre:$('#nombre').val()
		    },
		    function(data)
		    {    
		    mensaje(data);
		    $("#actualizar").hide();
  			$("#cancelar").hide();
  			$("#registrar").show();
  			limpiarFormEmpleado();
		    get_productos();
	    });
	});
/*	$("#tabla #id").click(function(){
		alert("dato "+ this.innerText());
	});
*/
});	

	 function eliminar(id){
			// 	alert("eliminarEmpleado");
	       confirmar=confirm("¿Esta apunto de eliminar los datos del producto"); 

        if (confirmar) {

		$.post("../../control/ControlProducto.php", 
		    {
		    accion: "eliminar", 
		    idProducto : id
		    },

		    function(data)
		    {               
		    $('#resultado').html(data);
		   get_productos();
	    });
	    }
     }
  
  function modificar(id){
  	$("#actualizar").show();
  	$("#cancelar").show();
  	$("#registrar").hide();

		$.post("../../control/ControlProducto.php", 
		    {
		    accion: "obtener", 
		    idCategoria : id
		    },

		    function(data)
		    {               
		//	$('#resultado').html(data);
		
			var empleado = eval(data.trim());
			$('#id').val(empleado[0]);
			$("#categoriaProducto option[value="+ empleado[1] +"]").attr("selected",true);
			$('#nombreProducto').val(empleado[2]);
				
				
	    });
	}
  
  
