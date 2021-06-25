<?php

include("../conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];

$sql="UPDATE users SET name='$name',email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../users.php");
    }
    else{
        Header("Location: ../users.php");
    }
?>