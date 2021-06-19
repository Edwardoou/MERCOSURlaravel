<?php
include("../conexion.php");
$con=conectar();

$iddiplo=$_POST['iddiplo'];
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$detalle=$_POST['detalle'];

$sql="INSERT INTO reladiplo VALUES('$iddiplo','$titulo','$fecha','$detalle')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../reladiplo.php");
    
}else {
    Header("Location: ../reladiplo.php");
}
?>