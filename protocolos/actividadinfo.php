<?php
include("../conexion/abrir_conexion.php");

//Retorna todos los registros dentro de actividad- Para desplegar todos los resultados usar un while($variable = sqli_fetch_array)
$sqlactividad1=" SELECT * from $actividad ";
$sqlactividad1c=mysqli_query($conexion,$sqlactividad1);


//Retorna la fecha esa guevosnada
$sqlactividad2=" SELECT * from $fecha_habilitada ";
$sqlactividad2c=mysqli_query($conexion,$sqlactividad2);

include("../conexion/cerrar_conexion.php");
?>