@extends('layout.app')

@section('content')
<div class="container mt-8">

                        <div class="col-md-12">
                            <h3>Ingrese datos a actualizar</h3>
	 	 	<form method="POST" action="{{ route('diplomatica.update', $diplomaticas->id) }}" role="form">
	 	 	{{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="Id del Pais Miembro" value="{{$diplomaticas->id}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" value="{{$diplomaticas->titulo}}">   
                            </div>
                            <div class="form-group">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="{{$diplomaticas->fecha}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="detalle" placeholder="Detalle" value="{{$diplomaticas->detalle}}">
                            </div>
                            <div class="text-right">
    <button type="submit" class="btn btn-primary">Guardar datos</button>
    
    <button href="javascript:history.back()" class="btn btn-dark">Volver</button>
    </div>
    </div>
    </div>
@endsection
