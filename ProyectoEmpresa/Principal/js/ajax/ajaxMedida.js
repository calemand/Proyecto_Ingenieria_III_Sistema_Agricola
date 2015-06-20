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


function get_unidades(){

    $("#tabla").find("tr:gt(0)").remove();

    var ajax = new nuevoAjax();
    var capaMostrarDatosHtml = document.getElementById('resultado');
    ajax.open("POST","../../control/ControlUnidad.php",true);
    var accion = "accion=seleccionar";
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   // ajax.setRequestHeader("Content-length", accion.length);
 //   ajax.setRequestHeader("Connection", "close");
    ajax.send(accion); 

    ajax.onreadystatechange=function(){

        if(ajax.readyState==4){
         //     capaMostrarDatosHtml.innerHTML = ajax.responseText;
        
            var medida=eval(ajax.responseText.trim());
       //     alert(medida);
   
          for(var i in medida){ 
            var lista=document.getElementById("medida");
            var tipo = medida[i];
            lista.options.add(new Option(tipo[0],tipo[1]));     
            }

        }
    }
}