<?php

include("../conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM users  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../users.php");
    }
    else{
        Header("Location: ../users.php");
    }
?>
