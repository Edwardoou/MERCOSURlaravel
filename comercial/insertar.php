<?php
include("../conexion.php");
$con=conectar();

$idcomer=$_POST['idcomer'];
$pais_miembro_nombre=$_POST['pais_miembro_nombre'];
$tipo=$_POST['tipo'];
$pais_extranjero_nombre=$_POST['pais_extranjero_nombre'];
$porcentaje=$_POST['porcentaje'];

$sql="INSERT INTO relacomercial VALUES('$idcomer','$pais_miembro_nombre','$tipo','$pais_extranjero_nombre','$porcentaje')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../relacomercial.php");
    
}else {
    Header("Location: ../relacomercial.php");
}
?>