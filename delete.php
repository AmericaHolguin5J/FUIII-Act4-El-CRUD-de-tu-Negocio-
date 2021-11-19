<?php

include("conexion.php");
$con=conectar();

$cod_guardia=$_GET['id'];

$sql="DELETE FROM guardia  WHERE cod_guardia='$cod_guardia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: guardia.php");
    }
?>
