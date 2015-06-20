<html>
<head>
<title>Validando usuarios en PHP</title>
<meta charset="UTF-8">
</head>
<body>
<?php
include ("seguridad.php");
session_unset();
session_destroy();
 header("location:../../");
?>
</body>
</html>