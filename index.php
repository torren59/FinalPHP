<?php
include ("validadorsesion.php");
?>

<?php
include ("head.php");
?>

<?php
$nombre=$_SESSION["usuario"]["nombre"];
echo("Hola ".$nombre. "Caremodá");
?>

<form method="post" action="logout.php">
    <button type="submit" name="logoutbtn">Cerrar sesion</button>
</form>

<?php
include("footer.php");
?>