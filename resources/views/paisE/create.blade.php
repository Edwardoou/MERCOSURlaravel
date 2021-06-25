@extends('layout.app')

@section('content')
<div class="container mt-8">

                        <div class="col-md-12">
                            <form action="{{route('paisE.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="IdPaisExtranjero" required="required">
                                    </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" required="">
                            </div>
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>
                        </div>
                        </div>
@endsection
