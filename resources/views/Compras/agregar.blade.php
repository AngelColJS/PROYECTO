@extends('plantilla')

@section('contenido')
<form action=" {{ route('detalle.guardar', )  }} " method="POST" enctype="multipart/form-data">
    @csrf
<div class="col-md-11">
<div class="form-group">
    <label for="">Producto</label>
<select name="productos_id" id="productos_id" class="form-control"  >
    <option value="">--Seleccione un Producto--</option>
    @foreach ($productos as $product)
        <option name="nombre" id="id" value=" {{$product['nombre']}} ">{{ $product['nombre'] }}- Q{{ $product['precio'] }}</option>
    @endforeach
    @foreach ($componentes as $component)
        <option name="nombre" id="id"  value=" {{$component['nombre']}} ">{{ $component['nombre'] }} - Q{{ $component['precio'] }}</option>
    @endforeach
    @foreach ($accesorios as $accesori)
    <option name="nombre"  id="id" value=" {{$accesori['nombre']}} ">{{ $accesori['nombre'] }}- Q{{ $accesori['precio'] }}</option>
@endforeach
</select>
<br>

<div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="number" class="form-control" name="precio" id="precio" >
    </div>
<div class="form-group">
    <label for="exampleInputPassword1">Cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="cantidad" >
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
</div>
</div>               
@endsection

