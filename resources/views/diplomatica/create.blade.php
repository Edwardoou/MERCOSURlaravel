@extends('layout.app')

@section('content')

<div class="container  mt-8" >
                    <div class="row"> 
                        <div class="col-md-12">
                            <form action="{{route('diplomatica.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID del Pais Miembro" required="required">
                                    </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" required="required">
                            </div>
                            <div class="form-group">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" required="required">
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="detalle" placeholder="Detalle" required="required">
                            <div class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>

@endsection
