<?php 
    include("../conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM relacomercial WHERE idcomer='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idcomer" value="<?php echo $row['idcomer']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="pais_miembro_nombre" placeholder="PaisMiem" value="<?php echo $row['pais_miembro_nombre'] ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo" value="<?php echo $row['tipo'] ?>">
                                <input type="text" class="form-control mb-3" name="pais_extranjero_nombre" placeholder="PaisExtr" value="<?php echo $row['pais_extranjero_nombre'] ?>">                        
                                <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje" value="<?php echo $row['porcentaje'] ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                </div>
    </body>
</html>