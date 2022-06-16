<?php
include("../protocolos/validadorsesion.php");
include("../conexion/abrir_conexion.php");
include("../protocolos/referencedate.php");
?>



<div class="renderzone">
    <div class="listzone">
        <?php
        $lunes=retornadomingo($referencedate);
            $queryevent=" SELECT *FROM $evento WHERE estado=1 AND fecha_evento BETWEEN '$referencedate' and '$lunes' ";
            $Consultaevent=mysqli_query($conexion, $queryevent);

        while($eventos=mysqli_fetch_array($Consultaevent)){
            $activid=$eventos["actividadid"];

            $queryact="SELECT *FROM $actividad WHERE actividadid=' $activid '";
            $consultaact = mysqli_query($conexion, $queryact);
            $actividades=mysqli_fetch_array($consultaact);
        ?>

        <div class="listcard">
            <div class="cardtitle">
                <?php
                echo($actividades["nombre"]);
                ?>
            </div>
            <div class="carddescription">
                <?php
                echo($actividades["descripcion"]);
                ?>
            </div>
            <div class="cardinfo">
                Fch:
                <?php
                echo($eventos["fecha_evento"]);
                ?>
            </div>
            <div class="cardinfo">
                Hora:
                <?php
                echo($eventos["hora"]);
                ?>
            </div>
            <div class="cardinfo">
                Cupos:
                <?php
                echo($eventos["aforo"]);
                ?>
            </div>
            <div class="cardinfo">
                Restan:
                <?php
                echo($eventos["aforo"]-$eventos["asistencia"]);
                ?>
            </div>
            <div class="cardinfo">
                Info5
            </div>
            <div class="cardinfo">
                Info6
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>