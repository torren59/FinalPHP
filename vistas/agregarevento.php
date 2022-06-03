<?php
include("../vistas/head.php");
?>

<div class="contenido-listado">


    <form action="../protocolos/opcionesadmin.php" method="post" >

    <div class="add-event-item">
        <button type="submit" class="admin-nav-btn btn" name="op"  value="1"><-Atrás</button>
    </div>

        <div class="mb-3 add-event-item">
        <label class="form-label">Nombre</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
        <label class="form-label">Descripción</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    

    </form>
</div>

