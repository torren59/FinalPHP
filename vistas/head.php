<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../root/estilosadmin.css" <?=date('Y-m-d H:i:s')?> > 
    <title>Admin</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

<nav class="admin-nav">
    <div class="admin-nav-main">
        <ul class="admin-nav-ul" >

            <form action="">

            <div class="admin-nav-item">
                <li><button type="button" class="admin-nav-btn btn" id="admin-nav-btn1" onclick="navitemselect('admin-nav-btn1')" value="1">Gestión de eventos</button></li>
            </div>
            <div class="admin-nav-item">
                <li><button type="button" class="admin-nav-btn btn" id="admin-nav-btn2" onclick="navitemselect('admin-nav-btn2')" value="2" >Eventos publicados</button></li>
            </div>

            </form>

            <script>
            $('#admin-nav-btn1').click(
                function(){
                    let op=document.getElementById('admin-nav-btn1').value;
                    let ruta= "op="+op;

                    $.ajax({
                        url: 'http://localhost/FinalPHP/protocolos/opcionesadmin.php',
                        type: 'POST',
                        data: ruta,
                    }).done(function(res){
                        $('#answer').html(res)
                    }).fail(function (){
                        console.log("Error");
                    }).always(function (){
                        console.log("complete");
                    });
                }
            );
            $("#admin-nav-btn2").click(
                function(){
                    let op=document.getElementById('admin-nav-btn2').value;
                    let ruta= "op="+op;

                    $.ajax({
                        url: 'http://localhost/FinalPHP/protocolos/opcionesadmin.php',
                        type: 'POST',
                        data: ruta,
                    }).done(function(res){
                        $('#answer').html(res)
                    }).fail(function (){
                        console.log("Error");
                    }).always(function (){
                        console.log("complete");
                    });
                }
            );
        </script>


            <div class="admin-nav-item-logout">
                <li> <form action="../protocolos/logout.php" method="post"><button type="submit" name="logoutbtn" class="admin-nav-btn-logout btn btn-warning" >Cerrar sesión</button></form> </li>
            </div>
        </ul>
    </div>
</nav>

