<?php
include ("head.php");
?>

<div class="cuadrologin">
<form action="login.php" method="post">
    <label for="documento">
            Documento
        </label>
        <br>
        <input type="number" for="documento" name="documento" />
        <br>
        <label for="clave">
            contraseña
        </label>
        <br>
        <input type="text" for="clave" name="clave" />
        <br>
        <button type="submit" name="sender">Enviar</button>
</form>
</div>
<p class="estadoacceso"></p>

<?php
include ("footer.php");
?>

    