<?php

include("../conexion.php");
$con=conectar();

$idcomer=$_GET['id'];

$sql="DELETE FROM relacomercial  WHERE idcomer='$idcomer'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../relacomercial.php");
    }
    else{
        Header("Location: ../relacomercial.php");
    }
?>
