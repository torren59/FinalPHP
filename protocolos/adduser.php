<?php
include("./referencedate.php");
session_start();


if(isset($_POST["op"])){
    

    $documento=$_POST["documento"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $contrasena=$_POST["clave"];

    

    include("../conexion/abrir_conexion.php");

    

 
    $sqluser1="SELECT *FROM $usuario where documento = '$documento'";
    $sqluser1c=mysqli_query($conexion,$sqluser1);
    $TotResult=mysqli_num_rows($sqluser1c);
        
    if($TotResult>0){
        
        
        header('Location:http://localhost/FinalPHP/vistas/agregarusuario.php');
        $_SESSION["UserState"]="Documento ya se encuentra registrado";
        return;
    
    }
    

    if($documento==null || $nombre==null||$apellido==null || $contrasena==null){
        
        header('Location:http://localhost/FinalPHP/vistas/agregarusuario.php');
        $_SESSION["UserState"]="Llena todos los campos";
    }

    else if(strlen($nombre)>15||strlen($apellido)>15||strlen($clave)>30){
        
        header('Location:http://localhost/FinalPHP/vistas/agregarusuario.php');
        $_SESSION["UserState"]="El nombre no debe tener más de 15 caracteres <br>El apellido no debe tener más de 15 caracteres
        <br> La clave no debe tener más de 10 caracteres";
    }

    else{ 

    $CREATEUSR="INSERT INTO $usuario 
    (documento,rolid,nombre,apellido,clave)
    values 
    ('$documento','2','$nombre','$apellido','$contrasena')";
    mysqli_query($conexion,$CREATEUSR);

    include("../conexion/cerrar_conexion.php");
    
    header('Location:http://localhost/FinalPHP/vistas/agregarusuario.php');
    
    $_SESSION["UserState"]='Tu usuario ya ha sido creado, dirígete al login y accede con el documento y clave que has registrado';

    }

    
    
}
    

?>