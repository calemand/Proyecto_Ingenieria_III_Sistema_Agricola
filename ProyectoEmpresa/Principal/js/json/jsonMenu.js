$(document).ready(function(){
	$('#loading').hide();
	 $('[data-toggle="popover"]').popover();   
	if($("#tipoUsuario").val()==1){
		$("#adminUsurios").hide();
	}
	 //cargar el array de direcciones
	$.post("../../negocios/url.json",function(data){url = eval(data);});
	//carga los formularios seleccionados desde el menu
	$(".link").click(function(e){
		e.preventDefault();
		$.post(url[$(this).text()], 
		function(data){    
			$(document).ready(function(){
				$('#contenedorModulos').html(data); 
				//Para digitar solo letras
				$('.string').formato(' abcdefghijklmnñopqrstuvwxyzáéíioóuú');
				//Para digitar solo numeros    
				$('.int').formato('0123456789');
			});
		});
	});
});

	function mensaje(respuesta){
		respuesta = respuesta.trim();
		if(respuesta=="1"){
			$("#contenedor").html("<h3>Datos Guardados Correctamente</h3>");
			$("#contenedor").css({"background-color":"#A8DBA8","padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #036564", "border-radius": "15px","opacity": "0.8","font-weight":"bold"});
		}else{
			if(respuesta=="0"){
				$("#contenedor").html("<h3>Error!</h3>Porfavor comuniquese con el servico de soporte tecnico");
				$("#contenedor").css({"background-color":"#FA3C08","padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #6B0103", "border-radius": "15px","opacity": "0.8","font-weight":"bold"});
			}else{
				$("#contenedor").html("<h3>ADVERTENCIAS!</h3>" + respuesta);
				$("#contenedor").css({"background-color":"#E5F04C" ,"padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #E97F02", "border-radius": "15px","opacity": "0.8","font-weight":"bold"});
			}
		}
		$("#contenedor").slideDown(1000);
		setTimeout ("pausa()", 6000);
	}
 	function pausa(){
       $("#contenedor").slideUp(1000);
    }
     //funcion para validar el formato de entrada de los inputs
(function(a){a.fn.formato=function(b){a(this).on({keypress:function(a){var c=a.which,d=a.keyCode,e=String.fromCharCode(c).toLowerCase(),f=b;(-1!=f.indexOf(e)||9==d||37!=c&&37==d||39==d&&39!=c||8==d||46==d&&46!=c)&&161!=c||a.preventDefault()}})}})(jQuery);



// Impedir el uso de clicderecho
var clickmessage="\nProyecto de Ingenieria III.\n\nProhibida la reproduccion parcial o total de este sitio\nsin previa autorizacion de los Ingenieros:\n\nCarlos Alemán\nReiner Gómez\nGreivin Artavia";

function disableclick(e) {
	if (document.all) {
		if (event.button==2||event.button==3) {
			if (event.srcElement.tagName=="IMG"){
				alert(clickmessage);
				return false;
			}
		}
	}
	else if (document.layers) {
		if (e.which == 3) {
			alert(clickmessage);
			return false;
		}
	}
	else if (document.getElementById){
		if (e.which==3&&e.target.tagName=="IMG"){
			alert(clickmessage)
			return false
		}
	}
}

function associateimages(){
	for(i=0;i<document.images.length;i++)
	document.images[i].onmousedown=disableclick;
}

if (document.all)
document.onmousedown=disableclick
else if (document.getElementById)
document.onmouseup=disableclick
else if (document.layers)
associateimages()

// Desactivar el Click Derecho
var message=clickmessage;

function clickIE4(){
	if (event.button==2){
		alert(message);
		return false;
	}
}

function clickNS4(e){
	if (document.layers||document.getElementById&&!document.all){
		if (e.which==2||e.which==3){
			alert(message);
			return false;
		}
	}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")