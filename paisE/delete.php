<?php

include("../conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM pais_extranjero  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../pais_extranjero.php");
    }
    else{
        Header("Location: ../pais_extranjero.php");
    }
?>
