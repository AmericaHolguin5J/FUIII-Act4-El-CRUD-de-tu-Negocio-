<?php

include("conexion.php");
$con=conectar();

$cod_guardia=$_POST['cod_guardia'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE guardia SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_guardia='$cod_guardia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: guardia.php");
    }
?>