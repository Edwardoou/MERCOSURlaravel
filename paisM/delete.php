<?php

include("../conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM pais_miembro  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../pais_miembro.php");
    }
    else{
        Header("Location: ../pais_miembro.php");
    }
?>
