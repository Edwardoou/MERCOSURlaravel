<!DOCTYPE html>
<html lang="en">
    <head>
        <title> RELACION COMERCIAL </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
    </head>

    <header>
    <a href="http://localhost:8000/index.php" class="logo">
        <img src="img/logo/30logo.png" alt="" width="140" height="94" class="d-inline-block align-text-center">
        MERCOSUR
    </a>
    <ul>
        <li><a href="http://localhost:8000/index.php">Menu</a></li>
        <li><a href="http://localhost:8000/comercial">R. Comerciales</a></li>
        <li><a href="http://localhost:8000/diplomatica">R. Diplomaticas</a></li>
        <li><a href="http://localhost:8000/paisE">P. Extranjeros</a></li>
        <li><a href="http://localhost:8000/paisM">P. Miembros</a></li>
    </ul>
</header>
<section class="banner"></section>

    <body>
            <div class="container mt-5" style="padding-top:50px">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                            <form action="{{route('comercial.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="idcomer"></label>
                                    <input type="text" class="form-control mb-3" name="idcomer" placeholder="Id" required="required">
                            </div>
                            <div class="form-group">
                            <label for="pais_miembro_nombre"></label>
                                    <input type="text" class="form-control mb-3" name="pais_miembro_nombre" placeholder="PaisMiem" required="required">
                            </div>
                            <div class="form-group">
                            <label for="tipo""></label>
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo" required="required">
                            </div>    
                            <div class="form-group">
                            <label for="pais_extranjero_nombre"></label>
                                    <input type="text" class="form-control mb-3" name="pais_extranjero_nombre" placeholder="PaisExtr" required="required">
                            </div>    
                            <div class="form-group">
                            <label for="porcentaje"></label>
                                    <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            
                        </div>

                        <div class="col-md-8">
                            <table class="table text-center" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Idcomer</th>
                                        <th>PaisMiembro</th>
                                        <th>Tipo</th>
                                        <th>PaisExtranjero</th>
                                        <th>Porcentaje</th>
                                        <th colspan="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comercial as $comercio)
                                    <tr>
                                        <td class="text-center">{{ $comercio->idcomer}}</td>
                                        <td class="text-center">{{ $comercio->pais_miembro_nombre}}</td>
                                        <td class="text-center">{{ $comercio->tipo}}</td>
                                        <td class="text-center">{{ $comercio->pais_extranjero_nombre}}</td>
                                        <td class="text-center">{{ $comercio->porcentaje}}</td>
                                        <td class="text-center">
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>