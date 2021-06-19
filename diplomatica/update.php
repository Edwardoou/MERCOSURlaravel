<?php

include("../conexion.php");
$con=conectar();

$iddiplo=$_POST['iddiplo'];
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$detalle=$_POST['detalle'];

$sql="UPDATE reladiplo SET titulo='$titulo',fecha='$fecha', detalle='$detalle' WHERE iddiplo='$iddiplo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../reladiplo.php");
    }
    else{
        Header("Location: ../reladiplo.php");
    }
?>