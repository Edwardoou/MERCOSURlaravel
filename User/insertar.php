<?php
include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="INSERT INTO users VALUES('$id','$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../users.php");
    
}else {
    Header("Location: ../users.php");
}
?>