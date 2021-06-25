@extends('layout.app')

@section('content')
<div class="container mt-8">

                        <div class="col-md-12">
                            <h3>Ingrese datos a actualizar</h3>
                            
	 	 	<form method="POST" action="{{ route('comercial.update', $comercial->id) }}" role="form">
	 	 	{{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID de la Relación Comercial" value="{{$comercial->id}}">
                                    </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_miembro_nombre" placeholder="Pais Miembro" value="{{$comercial->pais_miembro_nombre}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo" value="{{$comercial->tipo}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="pais_extranjero_nombre" placeholder="Pais Extranjero" value="{{$comercial->pais_extranjero_nombre}}">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje" value="{{$comercial->porcentaje}}">   
                            </div>
                            <div class="text-right">
    <button type="submit" class="btn btn-primary">Guardar datos</button>
  
    <button href="javascript:history.back()" class="btn btn-dark">Volver</button>
    </div>
@endsection
