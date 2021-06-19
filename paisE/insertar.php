<?php
include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="INSERT INTO pais_extranjero VALUES('$id','$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../pais_extranjero.php");
    
}else {
    Header("Location: ../pais_extranjero.php");
}
?>