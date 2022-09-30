@extends('plantilla')

@section('contenido')
<form action="{{ route('compras.guardar') }}" method="POST" enctype="multipart/form-data">
@csrf    
<div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Nit</label>
    <input type="text" class="form-control" name="nit" id="nit" >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="num" class="form-control" name="nombre" id="nombre" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" >
                </div>
  
    </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    </form>
    </div>
@endsection