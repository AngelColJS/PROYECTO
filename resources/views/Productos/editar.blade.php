@extends('plantilla')

@section('contenido')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Producto</font></font></h3>
</div>
<form action="{{ route('productos.updatee', $product) }}" method="post" enctype="multipart/form-data>">
@csrf
@method('PUT')
<div class="card-body">
<div class="form-group">
    <label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></label>
<input type="number" class="form-control" id="id" name="id"  value="{{$product->id}}" placeholder="">
<label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
<input type="text" class="form-control" id="nombre" name="nombre" value="{{$product->nombre}}" placeholder="Ingrese Producto">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Q</font></font></span>
</div>
<input type="num" class="form-control" id="precio" name="precio"  value="{{$product->precio}}" placeholder="precio">
</div>

<label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descripcion</font></font></label>
<br>
<textarea name="descripcion" id="descripcion" cols="147" rows="10">{{$product->descripcion}}</textarea>
<br>
<label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></label>
<input type="number" class="form-control" id="cantidad" name="cantidad"  value="{{$product->cantidad}}" placeholder="">
</div>
</div class="card-footer">

<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar Datos</font></font></button>
</div>
</form>

@endsection