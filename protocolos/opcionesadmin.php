<?php
if(isset($_POST["op"])){
    $vistaparcial=$_POST["op"];

    switch($vistaparcial){
        case 2:
            include("../vistas/eventospublicados.php");
        break;
        case 1:
            include("../vistas/gestioneventos.php");
        break;
        case 3:
            include("../vistas/agregarevento.php");
        break;
    }
}
else{
    echo("post no recibido");
}
?>