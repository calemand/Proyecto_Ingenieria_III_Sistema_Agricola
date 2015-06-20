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

function insertarJefe(){

    var capaMostrarDatosHtml = document.getElementById('contenedor');

	var cedula = document.getElementById('cedula').value;
    var pass1 = document.getElementById("pass1").value;
 alert(cedula+" "+pass1);
    var ajax = new nuevoAjax();
    url = "../../control/ControlUsuario.php?accion=insertar&cedula="+cedula+"&pass="+pass1+"&tipo=0";
    alert(url);
    ajax.open("GET",url); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(null);
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            capaMostrarDatosHtml.innerHTML=ajax.responseText;
		window.location ="../inicio";
        }
    }
}