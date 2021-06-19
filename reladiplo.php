<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM reladiplo";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RELACION DIPLOMATICA </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
    <a href="#" class="logo">
        <img src="img/logo/30logo.png" alt="" width="140" height="94" class="d-inline-block align-text-center">
        MERCOSUR
    </a>
    <ul>
        <li><a href="index.php">Menu</a></li>
        <li><a href="relacomercial.php">R. Comerciales</a></li>
        <li><a href="reladiplo.php">R. Diplomaticas</a></li>
        <li><a href="pais_extranjero.php">P. Extranjeros</a></li>
        <li><a href="pais_miembro.php">P. Miembros</a></li>
    </ul>
</header>
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
            <div class="container mt-5" style="padding-top:50px">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="diplomatica/insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="iddiplo" placeholder="Id" required="required">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" required="required">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" required="required"> 
                                    <input type="text" class="form-control mb-3" name="detalle" placeholder="Detalle" required="required">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                        <table class="table text-center" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Iddiplo</th>
                                        <th>Titulo</th>
                                        <th>Fecha</th>
                                        <th>Detalle</th>
                                        <th colspan="2">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['iddiplo']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['fecha']?></th> 
                                                <th><?php  echo $row['detalle']?></th> 
                                                <th><a href="diplomatica/actualizar.php?id=<?php echo $row['iddiplo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="diplomatica/delete.php?id=<?php echo $row['iddiplo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>