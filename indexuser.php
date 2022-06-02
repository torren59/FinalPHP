<?php
include ("validadorsesion.php");
?>

<?php
include ("head.php");
?>

<p>Usuario</p>

<form method="post" action="logout.php">
    <button type="submit" name="logoutbtn">Cerrar sesion</button>
</form>

<?php
include("footer.php");
?>