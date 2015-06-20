$(document).ready(function(){
llenarTablaCosecha();
	$("#categoriaProducto").change(function(){
  obtenerProducto();
	});
	$("#registrar").click(function(){
//alert("registrar cosecha");
     $.post("../../control/ControlCosecha.php", 
            {
            accion: "insertar", 
            idMedida: $("#medida").val(),
            idProducto : $("#idProducto").val(),
            idUsuario : $("#idUsuario").val(), 
            cantidad : $("#cantidad").val(),
            precio: $("#precio").val(),
            fecha : $("#fecha").val()
            },
            function(data)
            {               
            mensaje(data); 
             llenarTablaCosecha();   
           });
    });
    $("#actualizar").click(function(){
     $.post("../../control/ControlCosecha.php", 
            {
            accion: "actualizar", 
            id: $('#id').val(),
            idMedida: $("#medida").val(),
            idProducto : $("#idProducto").val(),
            idUsuario : $("#idUsuario").val(), 
            cantidad : $("#cantidad").val(),
            precio: $("#precio").val(),
            fecha : $("#fecha").val()
            },
            function(data)
            {               
           mensaje(data); 
        $("#actualizar").hide();
        $("#cancelar").hide();
        $("#registrar").show();
        limpiarFormularioCosecha();
    
             llenarTablaCosecha();   
           });
    });
});

   function eliminar($id){
      //  alert("eliminarEmpleado");
         confirmar=confirm("¿Esta apunto de eliminar los datos de la cosecha"); 

        if (confirmar) {

    $.post("../../control/ControlCosecha.php", 
        {
        accion: "eliminar", 
        id : $id
        },

        function(data)
        {               
     //   $('#resultado').html(data);
       llenarTablaCosecha();
      });
      }
     }

  function modificar($id){
    $("#actualizar").show();
    $("#cancelar").show();
    $("#registrar").hide();

    $.post("../../control/ControlCosecha.php", 
        {
        accion: "obtener", 
        id : $id
        },

        function(data)
        {               
    //  $('#resultado').html(data);
    
      var cosecha = eval(data.trim());
  //    alert(cosecha);
      $('#id').val(cosecha[0]);
      $("#medida option[value="+cosecha[1]+"]").attr("selected",true);
      $("#categoriaProducto option[value="+ cosecha[2] +"]").attr("selected",true);  
      obtenerIdProducto(cosecha[3]);
     
 
       $('#cantidad').val(cosecha[5]);
     
        $('#precio').val(cosecha[6]);
      //  alert(cosecha[7]);
         $('#fecha').val(cosecha[7]);

      });
  }
  



     function llenarTablaCosecha(){
$.post("../../control/ControlCosecha.php",
  {
    accion: "seleccionar"
  },function(data){

// $('#contenedor').html(data);
    $("#tablaCosecha").find("tr:gt(0)").remove();
  var listaCosechas = eval(data.trim());
  //tabla cosecha
    $('#demo').html( '<table  cellpadding="0" cellspacing="0" border="0" class="display" id="miTabla"></table>' );
          
         var mitabla =  $('#miTabla').dataTable({
            "data": listaCosechas,
//Codigo  Medida  Categoria Producto  Usuario Cantidad  Precio  Fecha
            "columns": 
            [
            { "title": "Código" },
            { "title": "Medida" },
            { "title": "Categoria" },
            { "title": "Producto" },
            { "title": "Usuario" },
            { "title": "Cantidad" },
            { "title": "Precio" },
            { "title": "Fecha" },
            { "title": "" ,"class":"noImprimir","searchable": false,"orderable": false},
            { "title": "","class":"noImprimir","searchable": false,"orderable": false}
           ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            "sDom": 'T<"clear">lfrtip',

              "oTableTools": 
              {
                "sSwfPath": "../../swf/copy_csv_xls_pdf.swf",
                "aButtons": ["pdf"]
              }
        });

  });

     }

     function obtenerProducto(){
    $('#idProducto').html('');
         $.post("../../control/ControlProducto.php", 
            {
            accion: "tipoProducto", 
            id : $("#categoriaProducto").val()
            },

            function(data)
            {               
       //   $('#contenedor').html(data);
          
            var lista = eval(data.trim());
          
              for(var i in lista){ 
            var combo=document.getElementById("idProducto");
            var producto = lista[i];
            combo.options.add(new Option(producto[1],producto[0]));     
            }       
        });

     }

    function obtenerIdProducto(index){
    $('#idProducto').html('');
         $.post("../../control/ControlProducto.php", 
            {
            accion: "tipoProducto", 
            id : $("#categoriaProducto").val()
            },

            function(data)
            {               
       //   $('#contenedor').html(data);
          
            var lista = eval(data.trim());
          
              for(var i in lista){ 
            var combo=document.getElementById("idProducto");
            var producto = lista[i];
            combo.options.add(new Option(producto[1],producto[0]));   
              $("#idProducto option[value="+index+"]").attr("selected",true); 
            }       
        });
     }

      function mensaje(respuesta){

    if(respuesta=="1"){
      $("#contenedor").html("<h3>Datos Guardados Correctamente</h3>");
      $("#contenedor").css({"background-color":"#A8DBA8","padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #036564", "border-radius": "15px","opacity": "0.8"});
    }else{
      if(respuesta=="0"){
        $("#contenedor").html("<h3>Error!</h3>Porfavor comuniquese con el servico de soporte tecnico");
        $("#contenedor").css({"background-color":"#FA3C08","padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #6B0103", "border-radius": "15px","opacity": "0.8"});
      }else{
        $("#contenedor").html("<h3>ADVERTENCIAS!</h3>" + respuesta);
        $("#contenedor").css({"background-color":"#E5F04C" ,"padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #E97F02", "border-radius": "15px","opacity": "0.8"});
      }
    }
    $("#contenedor").slideDown(1000);
    setTimeout ("pausa()", 6000);

  }
  function pausa(){
       $("#contenedor").slideUp(1000);
    }