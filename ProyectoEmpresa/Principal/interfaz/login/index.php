<!DOCTYPE html> 
<?php
    session_start();
    if (isset($_SESSION['usuario'])){
        header("location:../inicio");
    }
?>
<html lang="es">
    <head>
        <title>Validando usuarios en PHP</title>
        <meta charset="UTF-8">
        <script lang="JavaScript" src="../../js/json/json.js" ></script>  
        <script lang="JavaScript" src="../../js/jquery/jQueryLibraryv1.9.1.js" ></script>
        <script lang="JavaScript" src="../../js/json/jsonUsuario.js" ></script>
        <script lang="JavaScript" src="../../js/jquery/jqueryUsuario.js"></script>
        <script lang="JavaScript" src="../../js/jquery/jquery.maskedinput.min.js"></script> 
        <script src="../../js/bootstrap.js"></script>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container"  id="formLogin">
            <form>
                <h2 class="form-signin-heading">Entrar al Sistema</h2>
                <label class="sr-only">Numero de cedula</label><br>
                <input type="text"  id="cedula" class="form-control" placeholder="Número de cédula" required autofocus>
                <label class="sr-only">Contraseña</label>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
                <div class="checkbox">
                     <label class="sr-only"></label>
                    <label><input type="checkbox" value="remember-me">Remember me</label>
                </div>
                 <label class="sr-only">Login</label>
                <button id="login" class="btn btn-lg btn-success btn-block">Sign in</button>
            </form>
        </div>
        <DIV id="contenedor"></DIV>
    </body>
</html>