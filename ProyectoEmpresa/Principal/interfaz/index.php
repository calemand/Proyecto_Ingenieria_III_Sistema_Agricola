<?php

session_start();
if (!isset($_SESSION['usuario'])){
    header("location:./login");
}else{
	  header("location:./inicio");
}
?>