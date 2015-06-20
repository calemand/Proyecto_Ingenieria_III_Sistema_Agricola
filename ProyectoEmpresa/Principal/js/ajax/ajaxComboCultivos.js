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



function get_Cultivos(){

		var ajax = new nuevoAjax();
    	var capaMostrarDatosHtml = document.getElementById('resultado');
        
      

		ajax.open("POST","../../control/ControlProducto.php",true);

		var accion = "accion=seleccionar";
       
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   
   //ajax.setRequestHeader("Content-length", accion.length);
   //ajax.setRequestHeader("Connection", "close");
	
   ajax.send(accion); 

	
		ajax.onreadystatechange=function(){
         
        if(ajax.readyState==4){
            
	//capaMostrarDatosHtml.innerHTML=ajax.responseText;
			
		 var listaTipo=eval(ajax.responseText.trim());
          
		  for(var i in listaTipo){ 

			var lista=document.getElementById("cultivo");
			var tipo = listaTipo[i];
			lista.options.add(new Option(tipo[2],tipo[2]));
			}

		}

	}	
}