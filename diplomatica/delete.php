<?php

include("../conexion.php");
$con=conectar();

$iddiplo=$_GET['id'];

$sql="DELETE FROM reladiplo  WHERE iddiplo='$iddiplo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../reladiplo.php");
    }
    else{
        Header("Location: ../reladiplo.php");
    }
?>
