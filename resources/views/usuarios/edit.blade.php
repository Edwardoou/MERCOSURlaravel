@extends('layout.app')

@section('content')
<div class="container mt-8">

                        <div class="col-md-12">
                            <h3>Ingrese datos a actualizar</h3>
                            
	 	 	<form method="POST" action="{{ route('usuarios.update', $usuario->id) }}" role="form">
	 	 	 	 	 	 	 {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="IdUsuario" value="{{$usuario->id}}">
                                    </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="name" placeholder="Nombre" value="{{$usuario->name}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Correo" value="{{$usuario->email}}">
                        </div>  
                            <div class="text-right">
    <button type="submit" class="btn btn-primary">Guardar datos</button>
    
    <button href="javascript:history.back()" class="btn btn-dark">Volver</button>
    </div>
    </div>
    </div>

@endsection
