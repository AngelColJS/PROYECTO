@extends('plantilla')

@section('contenido')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Compra</font></font></h3>
</div>
<form action="{{ route('compras.updatee', $compras) }}" method="post" enctype="multipart/form-data>">
@csrf
@method('PUT')
<div class="card-body">
<div class="form-group">

    <label for="compra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></label>
<input type="number" class="form-control" id="id" name="id"  value="{{$compras->id}}" placeholder="">

<label for="compra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nit</font></font></label>
<input type="text" class="form-control" id="nit" name="nit" value="{{$compras->nit}}" placeholder="Ingrese Producto">

<label for="compra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
<input type="text" class="form-control" id="nombre" name="nombre" value="{{$compras->nombre}}" placeholder="Ingrese Producto">

<label for="compra"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Direccion</font></font></label>
<input type="text" class="form-control" id="direccion" name="direccion" value="{{$compras->direccion}}" placeholder="Ingrese Producto">

<label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha</font></font></label>
<input type="date" class="form-control" id="fecha" name="fecha" value="{{$compras->fecha}}" placeholder="Ingrese Producto">
<br>
<label for="producto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
<input type="text" class="form-control" id="cantidad" name="cantidad"  value="{{$compras->cantidad}}" placeholder="">
</div>
</div class="card-footer">

<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar Compras</font></font></button>
</div>
</form>

@endsection