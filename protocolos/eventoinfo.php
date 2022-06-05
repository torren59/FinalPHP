<?php
include("../conexion/abrir_conexion.php");

//Inserta un nuevo evento con todos sus datos correspondientes
$sqlevento1= "INSERT INTO $evento 
(eventoid,actividadid,fecha_evento,hora,aforo,estado)
values 
('$eventid','$actividadid','$fecha_evento','$hora','$aforo','$estado')";

$sqlevento1c= mysqli_query($conexion,$sqlevento1);

include("../conexion/cerrar_conexion.php");
?>