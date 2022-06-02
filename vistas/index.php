<?php
include ("../protocolos/validadorsesion.php");
?>

<?php
include ("head.php");
?>

<?php
$nombre=$_SESSION["usuario"]["nombre"];
echo("Hola ".$nombre);
?>

<?php
include("footer.php");
?>