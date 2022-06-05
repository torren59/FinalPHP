<?php
include("../conexion/abrir_conexion.php");

//Convierte fechas recibidas en string a numeros enteros
function fechaanumero($datetoint){

    $infod1= substr($datetoint,0,4);
    $infod2= substr($datetoint,5,2);
    $infod3= substr($datetoint,8,2);

    $infods1= strval($infod1);
    $infods2= strval($infod2);
    $infods3= strval($infod3);

    $infodsdef=$infods1.$infods2.$infods3;
    $infodsult= $infodsdef+0;

    return $infodsult;
}


include("../conexion/cerrar_conexion.php");
?>