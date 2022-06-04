<?php
session_start();
if(isset($_POST["op"])){
    $eventid;
    $actividadid=$_POST["actividadid"];
    $fecha_evento=$_POST["fecha_evento"];
    $hora=$_POST["hora"];
    $aforo=$_POST["aforo"];

    if($nombre==null || $descripcion==null){
        header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
        
        $_SESSION["eventState"]="Completa todos los campos para crear esta actividad";
    }
    else if(strlen($nombre)>15){
        header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
        
        $_SESSION["eventState"]="El nombre debe tener menos de 15 caracteres";
    }
    else if(strlen($descripcion)>100){
        header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
        
        $_SESSION["eventState"]="La descripción debe tener menos de 100 caracteres";
    }
    else{
        include("../conexion/abrir_conexion.php");
        $pase=0;
        while($pase==0){
            $eventid=rand(100,999);
            $VERIF_ACTIVIDADID=" SELECT actividadid from $actividad where actividadid = '$eventid' ";
            $consulta=mysqli_query($conexion,$VERIF_ACTIVIDADID);
            $resultado=mysqli_fetch_array($consulta);
            $dbreturned=$resultado["actividadid"];
            if($dbreturned!=$eventid){$pase=1;}
        }

    $CREATEACT="INSERT INTO $actividad 
    (actividadid,nombre,descripcion)
    values 
    ('$eventid','$nombre','$descripcion')";

    mysqli_query($conexion,$CREATEACT);
    header('Location:http://localhost/FinalPHP/vistas/agregaractividad.php');
    
    $_SESSION["eventState"]="Actividad guardada exitosamente";
        include("../conexion/cerrar_conexion.php");
    }
}
?>