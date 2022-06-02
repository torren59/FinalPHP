<?php
if(isset($_POST["logoutbtn"])){
    session_start();
    session_destroy();
    header('Location:http://localhost/FinalPHP/login_formulario.php');
}
?>