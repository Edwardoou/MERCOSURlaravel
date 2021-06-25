<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Miembros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="app">
    <link href="/css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
    window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
    <header>
  
            <a href="#" class="logo">
        <img src="/img/logo/30logo.png" alt="" width="140" height="94" class="d-inline-block align-text-center" > 
        MERCOSUR
        <ul>
        <li><a href=""></a></li>
        <li><a href="/index.php">Menu</a></li>
        <li><a href="/comercial">Comerciales</a></li>
        <li><a href="/diplomatica">Diplomaticas</a></li>
        <li><a href="/paisE">Extranjeros</a></li>
        <li><a href="/paisM">Miembros</a></li>
        <li><a href="/usuarios">Usuarios</a></li>
        @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                        @endguest
                </a>         
                </ul> 
                </div>
            </div>

    <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------->
</head>
<section class="banner"></section>

    <body>
            <div class="container mt-5" style="padding-top:50px">
                    <div class="row"> 
                    <a href="{{ route('paisM.create') }}" class="btn btn-info" >Añadir Paises Miembros</a>
                        <div class="col-md-12">
                        <br>
                        <table class="table text-center bg-white" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdPaisMiembro</th>
                                        <th>Nombre</th>
                                        <th colspan="2">Acciones</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                        @if($miembro->count())
                        @foreach($miembro as $miem)
                        <tr>
                        <td>{{$miem->id}}</td>
                        <td>{{$miem->nombre}}</td>

                        
                        <td><a class="btn btn-warning " href="{{action('PaisMController@edit', $miem->id)}}" >Editar</a></td>


                        <td>
                        <form action="{{action('PaisMController@destroy', $miem->id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">

                        <button class="btn btn-danger btn-xs" type="submit">Borrar</button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                        @else
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