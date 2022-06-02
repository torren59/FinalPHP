<?php
session_start();

if(!isset($_SESSION["usuario"])){
    header('Location:http://localhost/FinalPHP/login_formulario.php');
}
?>