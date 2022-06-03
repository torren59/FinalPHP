<?php
include ("../protocolos/validadorsesion.php");
require ("../protocolos/referencedate.php");
include ("head.php");
?>


<div class="contenido-listado">
    <?php
    if(!isset($_POST["2"])){
    ?>
        <!--Gestión de eventos-->
        <div class="listado-item">
            <button class="btn listado-btn">Crear evento</button>
        </div>



    <?php
    }else{
    ?>
     <!--listado de eventos-->





    <?php
    }
    ?>
    
</div>


<?php
include("footer.php");
?>