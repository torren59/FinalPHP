<?php
/*

//Inserta un nuevo evento con todos sus datos correspondientes
$sqlevento1= "INSERT INTO $evento 
(eventoid,actividadid,fecha_evento,hora,aforo,estado)
values 
('$eventid','$actividadid','$fecha_evento','$hora','$aforo','$estado')";

$sqlevento1c= mysqli_query($conexion,$sqlevento1);

*/

function queryevents(){
    include("../conexion/abrir_conexion.php");
    $script=" SELECT *FROM $evento WHERE estado=1";
    $Consulta=mysqli_query($conexion, $script);
    return $consulta;
    include("../conexion/cerrar_conexion.php");
}

function queryactivity($actividadid){
    include("../conexion/abrir_conexion.php");
    $query="SELECT *FROM $actividad WHERE actividadid='$actividadid'";
    $consulta = mysqli_query($conexion, $query);
    return $consulta;
    include("../conexion/cerrar_conexion.php");

}

?>