<!DOCTYPE html>  
<html>  
  <head>
  <title>Empresa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include ("../login/seguridad.php");
    ?>
    
    <input type="hidden" id="idUsuario" value='<?php echo $_SESSION['usuario']?>'/>
    <input type="hidden" id="tipoUsuario" value='<?php echo $_SESSION['tipo']?>'/>

    <script lang="JavaScript" src="../../js/json/json.js" ></script> 
    <script src="../../js/jquery/jquery-1.9.1.js"></script>
    <script lang="JavaScript" src="../../js/jquery/jQuery.js" ></script>  
    <script lang="JavaScript" src="../../js/json/jsonMenu.js" ></script>
    <!--******************************* bootstrap ****************************************-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/style.css" rel="stylesheet" />
    <script src="../../js/bootstrap.js"></script>
    <!-- ******************************* maskedinput ****************************************-->
    <script lang="JavaScript" src="../../js/jquery/jquery.maskedinput.min.js"></script>
    <!--*******************************JQuery Data Picker****************************************--> 
    <script src="../../js/jquery/jquery-ui.js"></script>
    <script lang="JavaScript" src="../../js/jquery/datepicker.js" ></script>
    <link rel="stylesheet" type="text/css" href="../../css/jquery-ui.css" />
    <!--*******************************JQuery time Picker****************************************--> 
    <script src="../../js/timePicker/jquery.ui.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../../js/timePicker/jquery.ui.timepicker.css">
    <!--******************************* data table ******************************* -->
    <link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../../css/dataTables.tableTools.css" >
    <link rel="stylesheet" type="text/css" href="../../css/media_print.css" >
    <script lang="JavaScript" src="../../js/jquery/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" src="../../js/jquery/dataTables.tableTools.js"></script> 
  </head>
	<body >

	<nav class="navbar navbar-inverse" id="noImprimir">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menú</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Insumos<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href='#' class="link">Proveedores</a></li>
            <li><a href='#' class="link">Inventario de Insumos</a></li>
            <li><a href='#' class="link">Registrar Insumos</a></li>
            <li><a href='#' class="link">Entrada de Insumos</a></li>
            <li><a href='#' class="link">Salida de Insumos</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href='#' class="link">Productos</a></li>
            <li><a href='#' class="link">Categoria de Productos</a></li>
            <li><a href='#' class="link">Unidades de Medida</a></li>
          </ul>
        </li>
         <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empleados<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href='#' class="link">Empleados</a></li>
              <li><a href='#' class="link">Puestos</a></li>
              <li><a href='#' class="link">Registro de Jornada</a></li>
               <li><a href='#' class="link">Planilla</a></li>
          </ul>
        </li>
        <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Herramientas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href='#' class="link">Registro de Herramientas</a></li>
              <li><a href='#' class="link">Inventario de Herramientas</a></li>
              <li><a href='#' class="link">Entrada de Herramientas</a></li>
              <li><a href='#' class="link">Salida de Herramientas</a></li>
              <li><a href='#' class="link">Prestamo de Herramientas</a></li>
          </ul>
         </li>
         <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cosechas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href='#' class="link">Registro de Cosehas</a></li>
          </ul>
        </li>
        
        <li><a href='#' class="link"  id="adminUsurios">Usuarios</a></li> <!--Unico Sin Categoria -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../login/cerrar.php?cerrar"><?php echo $_SESSION['usuario'];?>     Cerrar sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- *******************************Contenedor****************************************-->

  <DIV  id="contenedorModulos"></DIV>
  <footer>
   <p>
      Ingenieros: Alemán, Carlos; Artavia, Greivin; Gomez, Reiner.
   </p>
  </footer>
</body> 
</html>