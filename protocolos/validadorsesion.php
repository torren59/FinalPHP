<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header('Location:http://localhost/FinalPHP/vistas/login_formulario.php');
}
?>