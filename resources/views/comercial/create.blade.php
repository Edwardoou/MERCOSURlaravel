@extends('layout.app')

@section('content')
<div class="container mt-8" >
                    <div class="row"> 
                        <div class="col-md-12">
                            <form action="{{route('comercial.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                
                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID de la Relación Comercial" required="required">
                                    </div>
                            <div class="form-group">
        
                                    <input type="text" class="form-control mb-3" name="pais_miembro_nombre" placeholder="Nombre del Pais Miembro" required="required">
                            </div>
                            <div class="form-group">
                        
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo" required="required">
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                        
                                    <input type="text" class="form-control mb-3" name="pais_extranjero_nombre" placeholder="Nombre del Pais Extranjero" required="required">
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                
                                    <input type="text" class="form-control mb-3" name="porcentaje" placeholder="Porcentaje" required="required">
                            <div class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary mr-5">Guardar</button>
                            <input type="button" onclick="history.back()" value="Volver" class="btn btn-dark">
                        </div>

@endsection
