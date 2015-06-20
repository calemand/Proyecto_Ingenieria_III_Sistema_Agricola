var id = "";
var salario = "";
var horas = "";
var fechaInicio="";
var fehaPago = "";
$(document).ready(function(){

	getPlanillas();

	$("#fechaInicio").datepicker();
	$("#fechaFinal").datepicker();
	$("#contInforme").hide();

	$("#limpiar").click(function(){
		limpiarForm();
	});
	$("#cancelar").click(function(){
		$("#contInforme").slideUp();
		$("#registrar").show();
		//$("#cancelar").hide();
		$("#actualizar").hide();
	});

	$("#registrar").click(function(){
		$.post("../../control/ControlPlanilla.php", 
		    {
		    accion: "insertar", 
		    cedula : id,
		    sueldo: salario,
		    horas: horas,
		    fechaInicio: fechaInicio,
		    fecha: fehaPago
		    },
		 function(persona)
		    {
			    $("#contInforme").slideUp();
			    getPlanillas();
		    });
	
	});

	$("#actualizar").hide();
/********************El autocpompletar cedulas de empleados***************************************/
	var autocompletar = new Array();
	$.post("../../control/ControlEmpleado.php",	{accion:"getCedulas"},
	function(data){
		var list = eval(data.trim());
		for(var i in list){ 
		autocompletar.push(list[i]);
		}
	});
	$('#cedula').autocomplete({
	  source: autocompletar
	});
		
	$("#calcular").click(function(){
		id = $("#cedula").val();
		fechaInicio =  $("#fechaInicio").val();
		var fecha2 = $("#fechaFinal").val();
		fehaPago = fecha2;
		$.post("../../control/ControlPlanilla.php",
			{
			accion:"calcular",
			cedula : id,
			fechaInicio : fechaInicio,
			fechaFinal : fecha2
			},
		function(data){
			if(data=="0.2"){
				$("#mensajeCalculo").html("El rango de fecha de los dias a calcular salario ya esta cancelados");
				$("#mensajeCalculo").css({"background-color":"#E5F04C" ,"padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #E97F02", "border-radius": "15px","opacity": "0.8","font-weight":"bold"});
			}else{
				if(data=="0.1"){
					$("#mensajeCalculo").html("Llene todos los datos del formulario");
					$("#mensajeCalculo").css({"background-color":"#E5F04C" ,"padding": "1.0em 2.0em 1.0em 2.0em", "border": "2px solid #E97F02", "border-radius": "15px","opacity": "0.8","font-weight":"bold"});
				}else{

					mostrarInforme(data);
					getEmpleado(id);
					getSalario(id,fechaInicio,fecha2)
					$("#contInforme").slideDown();
				}
			}
		});
	});

});



function limpiarForm(){
		document.getElementById("myForm").reset();
}

function mostrarInforme(data){
	var planilla=eval(data.trim());
	$('#informe').html( '<table  cellpadding="0" cellspacing="0" border="0" class="display" id="miTablaPlanilla"></table>' );

	var mitabla =  $('#miTablaPlanilla').dataTable({
		"data": planilla,
		"columns": 
		[
			{ "title": "Hora Inicio" },
			{ "title": "Hora Final" },
			{ "title": "Horas Diarias" },
			{ "title": "Fecha" },
			{ "title": "Puesto" },
			{ "title": "Monto" },
		],
		"lengthMenu": [[7,15,30, -1], [7, 15, 30, "Todo"]]
	});
}

	function getEmpleado(id){
		$.post("../../control/ControlEmpleado.php", 
		    {
		    accion: "obtener", 
		    cedula : id
		    },
		 function(persona)
		    {               
			var empleado = eval(persona.trim());
			$('#id').html(empleado[0]);
			$('#nombre').html(empleado[1]+" "+empleado[2]);
			$('#correo').html(empleado[3]);
			$('#tel').html(empleado[4]);
			$('#lugar').html(empleado[5]);
	    });
	}

function getSalario(id,fecha1,fecha2){
	$.post("../../control/ControlPlanilla.php",
		{
		accion:"getSalario",
		cedula : id,
		fechaInicio : fecha1,
		fechaFinal : fecha2
		},
	function(data){
		planilla = eval(data.trim());
		var sueldo =new Number(planilla[1]);
		horas =new Number(planilla[0]);
		salario = sueldo;
		$('#horas').html(horas.toFixed(2)+" hr");
		$('#salario').html(sueldo.toFixed());
		$('#dias').html(planilla[2]);
	});
}

function getPlanillas(){
	$.post("../../control/ControlPlanilla.php",
		{
		accion:"getPlanillas"
		},
	function(data){
		var listaPlanilla=eval(data.trim());
		 $('#demo').html( '<table  cellpadding="0" cellspacing="0" border="0" class="display" id="miTabla"></table>' );        
         var mitabla =  $('#miTabla').dataTable({
			"data": listaPlanilla,
			"columns": 
			[
				{ "title": "Código" },
				{ "title": "Identificacón " },
				{ "title": "Nombre" },
				{ "title": "Apellidos" },
				{ "title": "Fecha de pago" },
				{ "title": "Horas" },
				{ "title": "Salario" }
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