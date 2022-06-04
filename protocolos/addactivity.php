<?php
session_start();
if(isset($_POST["op"])){
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    if($nombre==null || $descripcion==null){
        header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
        
        $_SESSION["ActivityState"]="Completa todos los campos para crear esta actividad";
    }
    else if(strlen($nombre)>15){ 
            header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
            $_SESSION["ActivityState"]="El nombre debe tener menos de 15 caracteres";
        }
    elseif(strlen($descripcion)>100){
            header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
            $_SESSION["ActivityState"]="La descripción debe tener menos de 100 caracteres";
        }
    
    else{
        include("../conexion/abrir_conexion.php");
        $paso=0;
        while($paso==0){
            //SEGUIR AQUÍ, VALIDAR QUE NO EXISTE EL ID
        }

    $CREATEACT="INSERT INTO $actividad 
    (actividadid,nombre,descripcion)
    values 
    ('$actividadid','$nombre','$descripcion')";

    mysqli_query($conexion,$CREATEACT);
    header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
    $_SESSION["ActivityState"]="Actividad guardada exitosamente";
        include("../conexion/cerrar_conexion.php");
    }
}
?>