<?php
global $referencedate;
$referencedate=date('Y-m-d'); //Así lo devuelve date 2022-06-05
// SQL SOLICITUD select date_format(now(),'%Y-%m-%d'); devuelve 2022-06-15
//DATE_ADD('2018-01-01', INTERVAL 364 DAY); para agregar fechas
// Así lo devuelve el post de html 2022-06-09

//Solicitudes utiles sql
//select date_format('2022-06-04','%Y-%m-%W') Pasa la fecha pero con el día con nombre
?>