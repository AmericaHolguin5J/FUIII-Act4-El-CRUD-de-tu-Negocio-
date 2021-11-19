<?php
include("conexion.php");
$con=conectar();

$cod_guardia=$_POST['cod_guardia'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO guardia VALUES('$cod_guardia','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: guardia.php");
    
}else {
}
?>