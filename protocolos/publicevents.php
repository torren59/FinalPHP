<?php
include("./referencedate.php");
session_start();
$_SESSION["PublicarState"]="";

echo("Llega por lo menos");

if(isset($_POST["op"])){
    $publicacion=$_POST["publicacion"];
    $limitdate=retornalunes($referencedate);
    echo($limitdate);

    if($publicacion==1){

        include("../conexion/abrir_conexion.php");
        $sqlpublicar=" UPDATE $evento SET estado=1 WHERE fecha_evento >= '$referencedate' and fecha_evento < '$limitdate' ";
        $sqlpublicarc=mysqli_query($conexion,$sqlpublicar);

        include("../conexion/cerrar_conexion.php");

        header('Location:http://localhost/FinalPHP/vistas/gestioneventos.php');
        $_SESSION["PublicarState"]="Eventos publicados exitosamente";
        
        
        
        

    }

    else if($publicacion==2){

        $lastmonthday=finmesactual($referencedate);

        include("../conexion/abrir_conexion.php");

        $sqlpublicarc=" UPDATE $evento SET estado=1 WHERE  fecha_evento>= '$referencedate' and fecha_evento<='$lastmonthday' ";
        $sqlpublicarr=mysqli_query($conexion,$sqlpublicarc);
        include("../conexion/cerrar_conexion.php");

        header('Location:http://localhost/FinalPHP/vistas/gestioneventos.php');
        $_SESSION["PublicarState"]="Eventos publicados exitosamente";
    }
    
}
?>