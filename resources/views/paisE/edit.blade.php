@extends('layout.app')

@section('content')
<div class="container mt-8">

                        <div class="col-md-12">
                            <h3>Ingrese datos a actualizar</h3>
	 	 	 	 	 	 <form method="POST" action="{{ route('paisE.update', $extranjero->id) }}" role="form">
	 	 	 	 	 	 	 {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="IdpaisEiembro" value="{{$extranjero->id}}">
                                    </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="{{$extranjero->nombre}}">
                            </div> 
                            <div class="text-right">
    <button type="submit" class="btn btn-primary ">Guardar datos</button>
    
    <button href="javascript:history.back()" class="btn btn-dark">Volver</button>
    </div>
    </div>
    </div>
@endsection
