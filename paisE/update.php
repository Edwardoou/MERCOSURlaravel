<?php

include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="UPDATE pais_extranjero SET nombre='$nombre' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../pais_extranjero.php");
    }
    else{
        Header("Location: ../pais_extranjero.php");
    }
?>