<?php
include ("head.php");
include("../protocolos/eventoinfo.php");
?>

<form action="../protocolos/opcionesadmin.php" method="post"><!--Form de botonera general-->
<div class="contenido-listado">
    <div class="add-content-block col-12">  
        <div class="add-content-block col-4">
    <div class="add-event-item" >
        <button class="gest-event-btn btn" name="op" id="gest-event-btn-add" value="3" >Agregar nueva actividad</button>
    </div>
        </div>
        <div class="add-content-block col-3">
    <div class="add-event-item" >
        <button class="gest-event-btn btn" name="op" id="gest-event-btn-add" value="4" >Agregar nuevo evento</button>
    </div>
        </div>
        <div class="add-content-block col-4">
    <div class="add-event-item" >
        <button class="gest-event-btn btn" name="op" id="gest-event-btn-add" value="7" >Agregar eventos conjuntos</button>
    </div>
        </div>
        </form>

        <br><hr>

        <form action="../protocolos/publicevents.php" method="POST">  
        <div class="add-content-block col-11">
            <div class="add-content-block col-3">
            <label class="form-label">Publicar todos los eventos de:</label>
            </div>
            <div class="add-content-block col-4">
            <select class="form-select" aria-label="Default select example" name="publicacion">
                <option name="publicacion" value="1">Esta semana</option>
                <option name="publicacion" value="2">Este mes</option>
            </select> 
            </div>
            <div class="add-content-block col-1">
                <button type="submit" class="admin-pub-btn btn" name="op"  value="9">Publicar</button>
            </div>

            <div class="add-content-block col-3">
                <?php if(isset($_SESSION["PublicarState"])){ echo($_SESSION["PublicarState"]); $_SESSION["PublicarState"]=""; } ?>
            </div>
        </div>
        <br><br>
        <div class="add-content-block col-11">

            <?php
            include("../conexion/abrir_conexion.php");
            
            $sqleventcard=" SELECT *FROM $evento ";
            $sqleventcardc=mysqli_query($conexion,$sqleventcard);
            
            
            $sqlactcard=" SELECT *FROM $actividad WHERE actividadid='$activid' ";
            $sqlactcardc=mysqli_query($conexion,$sqlactcard);
            $sqlactcardr=mysqli_fetch_array($sqlactcardc);
            
            while($sqleventcardr=mysqli_fetch_array($sqleventcardc)){   

                $activid=$sqleventcardr["actividadid"];
                $sqlactcard=" SELECT *FROM $actividad WHERE actividadid='$activid' ";
                $sqlactcardc=mysqli_query($conexion,$sqlactcard);
                $sqlactcardr=mysqli_fetch_array($sqlactcardc);

            echo('   

            <div class="list-card">

                <div class="add-event-item">
                    '.$sqlactcardr["nombre"].'
                </div>

                <div class="desc-panel col-12">

                <div class="add-content-block col-11" >
                    DESCRIPCION
                </div>
                
                    
                </div>

                <div class="add-content-block col-7">
                    Fecha
                </div>

                <div class="add-content-block col-4">
                    Hora
                </div> 

                <div class="add-content-block col-6">
                    Aforo
                </div>

                <div class="add-content-block col-5">
                    Cupos
                </div>
                <hr>
                <div class="add-content-block col-5">
                <button type="submit" class="admin-pub-btn btn" name="op"  value="10">Publicar</button>
                </div>

                <div class="add-content-block col-5">
                <button type="submit" class="btn-success btn" name="op"  value="11">Info</button>
                </div>

            </div>
            ');
        }
        ?>
        </div>
        </form>

        <?php
        include("../conexion/cerrar_conexion.php");
        ?>

        

    </div>
</div>

