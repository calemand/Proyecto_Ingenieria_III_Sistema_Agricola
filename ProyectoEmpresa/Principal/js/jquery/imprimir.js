$(document).ready(function(){
	$("#imprimir").click(function(){
		var ficha=document.getElementById("miTabla");
		var ventimp=window.open(' ','popimpr');
		ventimp.document.write(ficha.innerHTML);
		ventimp.document.close();
		ventimp.print();
		ventimp.close();
	});
});