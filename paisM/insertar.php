<?php
include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="INSERT INTO pais_miembro VALUES('$id','$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../pais_miembro.php");
    
}else {
    Header("Location: ../pais_miembro.php");
}
?>