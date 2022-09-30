@extends('plantilla')

@section('contenido')
<form action="{{ route('productos.guardar') }}" method="POST" enctype="multipart/form-data">
@csrf    
<div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="num" class="form-control" name="precio" id="precio" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" >
            </div>
  
   
    
    </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    </form>
    </div>
@endsection