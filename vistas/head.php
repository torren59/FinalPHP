<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../root/estiloadmin.css" <?=date('Y-m-d H:i:s')?> > 
    <title>Admin</title>
</head>
<body>

<nav class="admin-nav">
    <div class="admin-nav-main">
        <ul class="admin-nav-ul" >

            <form action="index.php" method="post">

            <div class="admin-nav-item">
                <li><button type="submit" class="admin-nav-btn btn" id="1" onclick="navitemselect(1)" name="1" >Gestión de eventos</button></li>
            </div>
            <div class="admin-nav-item">
                <li><button type="submit" class="admin-nav-btn btn" id="2" onclick="navitemselect(2)" name="2">Eventos publicados</button></li>
            </div>

            </form>
            <div class="admin-nav-item-logout">
                <li> <form action="../protocolos/logout.php" method="post"><button type="submit" name="logoutbtn" class="admin-nav-btn-logout btn btn-warning" >Cerrar sesión</button></form> </li>
            </div>
        </ul>
    </div>
</nav>
