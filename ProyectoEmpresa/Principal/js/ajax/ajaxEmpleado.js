//Funcion de ajax
function nuevoAjax(){
    var xmlhttp = false;
    try{
        //par que sirva en cualquier browser que no sea Internet Explorew
        xmlhttp= ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            //para sirva en internet explorex
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlhttp= false;
        }
    }
    if(!xmlhttp && typeof XMLHttpRequest != 'undefined' ){
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function get_empleados(){

  //  $("#tabla").find("tr:gt(0)").remove();

    var ajax = new nuevoAjax();
    var capaMostrarDatosHtml = document.getElementById('resultado');
    ajax.open("POST","../../control/ControlEmpleado.php",true);
    var accion = "accion=seleccionar";
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(accion); 

    ajax.onreadystatechange=function(){

        if(ajax.readyState==4){
           
        
            var listaEmpleados=eval(ajax.responseText.trim());
         $('#demo').html( '<table  cellpadding="0" cellspacing="0" border="0" class="display" id="miTabla"></table>' );
          
         var mitabla =  $('#miTabla').dataTable({
            "data": listaEmpleados,

            "columns": 
            [
            { "title": "Cedula" },
            { "title": "Nombre" },
             { "title": "Apellido" },
             { "title": "Correo" },
             { "title": "Telefono" },
             { "title": "Direccion" },
             { "title": "Genero" },
             { "title": "" ,"class":"noImprimir","searchable": false,"orderable": false},
            { "title": "","class":"noImprimir","searchable": false,"orderable": false}
           ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
            "sDom": 'T<"clear">lfrtip',

              "oTableTools": 
              {
                "sSwfPath": "../../swf/copy_csv_xls_pdf.swf",
                "aButtons": ["pdf","xls"]
              }
        });
        }
    }
}

