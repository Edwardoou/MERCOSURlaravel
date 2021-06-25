<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAISES MIEMBROS </title>
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
    <a href="#" class="logo">
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
                            <form action="{{route('paisE.store')}}" method="post">

                            <div class="form-group">
                            <label for="id"></label>
                                    <input type="text" class="form-control mb-3" name="id" placeholder="IdPaisExtranjero" required="">
                            <div class="form-group">
                            </div>
                            <label for="nombre"></label>
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required="">
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary mr-5" >Guardar</button>
                            
                        </div>

                        <div class="col-md-9">
                        <table class="table text-center" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdPaisExtranjero</th>
                                        <th>Nombre</th>
                                        <th colspan="4">Acciones</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                @if($extranjero->count())
                                @foreach($extranjero as $extr)
                                    <tr>
                                        <td class="text-center">{{ $extr->id}}</td>
                                        <td class="text-center">{{ $extr->nombre}}</td>
                                
                                        <td><a class="btn btn-primary btn-xs" href="{{route('paisE.edit', $extr->id)}}">Editar<span class="glyphicon glyphicon-pencil"></span></a></td>
                                        <td>
                            
                                        <form action="{{ route('paisE.delete', $extr->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-xs" type="submit">Borrar<span class="glyphicon glyphicon-trash"></span></button>
                                        </form>
                                        </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                        <td colspan="10">No hay registro !!</td>
                                        </tr>
                                        @endif
                                        </tbody>
                                        </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
