<?php
if(isset($_POST["op"])){
    $actividadid=123;
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    if($nombre==null || $descripcion==null){
        header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
        session_start();
        $_SESSION["ActivityState"]="Completa todos los campos para crear esta actividad";
    }
    else{
        include("../conexion/abrir_conexion.php");

    $CREATEACT="INSERT INTO $actividad 
    (actividadid,nombre,descripcion)
    values 
    ('$actividadid','$nombre','$descripcion')";

    mysqli_query($conexion,$CREATEACT);
    header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
    session_start();
    $_SESSION["ActivityState"]="Actividad guardada exitosamente";
        include("../conexion/cerrar_conexion.php");
    }
}
?>