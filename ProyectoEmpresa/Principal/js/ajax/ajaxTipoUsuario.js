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



function get_tipoUsuarios(){

		var ajax = new nuevoAjax();
    	var capaMostrarDatosHtml = document.getElementById('contenedor');
        /*
        2 tipoEmpleados ir a ControlTipoEmpleados
        */
		ajax.open("POST","../../control/ControlTipoUsuario.php",true);

		var accion = "accion=seleccionar";
        // setRequestHeader para enviar con el POST
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //se envia la accion o los datos que sean nesesarios
 //  ajax.setRequestHeader("Content-length", accion.length);
  // ajax.setRequestHeader("Connection", "close");
	
   ajax.send(accion); 

	
		ajax.onreadystatechange=function(){
            
        if(ajax.readyState==4){
            
	//	capaMostrarDatosHtml.innerHTML=ajax.responseText;
			
		 var listaTipo=eval(ajax.responseText.trim());
		  for(var i in listaTipo){ 
			var lista=document.getElementById("puesto");
			var tipo = listaTipo[i];
			lista.options.add(new Option(tipo[1],tipo[0]));
			}

		}

	}	
}

