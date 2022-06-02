<?php
if(!isset($_POST["sender"])){
    header('Location:http://localhost/FinalPHP/login_formulario.php');
}
else{
    include("abrir_conexion.php");
    $DocEnviado=$_POST["documento"];
    $consulta=mysqli_query($conexion,"SELECT *FROM $usuario where Documento = $DocEnviado");
    $resultado=mysqli_fetch_array($consulta);
    if($resultado==null){
        ?>
        <p name="Error">Está vacío</p>
        <?php       
    }
    else{

        if($_POST["clave"]==$resultado["clave"]){

            session_start();
        $_SESSION["usuario"]=$resultado;

        if($_SESSION["usuario"]["rolid"]==1){
            header('Location:http://localhost/FinalPHP/index.php');
        }
        else if($_SESSION["usuario"]["rolid"]==2){
            header('Location:http://localhost/FinalPHP/indexuser.php');
        }
        
        }
        else{
            header('Location:http://localhost/FinalPHP/login_formulario.php');
        }
    }
}
?>