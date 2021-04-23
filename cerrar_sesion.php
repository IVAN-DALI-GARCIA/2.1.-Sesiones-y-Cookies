<?php 

session_start();
$VarSesion = $_SESSION["usuario"];
if ($VarSesion == null || $VarSesion ='') {
    die();
}else {
    session_unset();
    session_destroy();
    header("Location:index.html");
}



?>