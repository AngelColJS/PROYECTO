@extends('plantilla')

@section('contenido')
<div class="row">
          <div class="col-12">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach ($productos as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td> {{ $product->nombre }}</td>
    <td>{{ $product->precio }}</td>
    <td>{{ $product->cantidad }}</td>
    <td>{{ $product->total }}</td>
</tr>
@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </nav>     
@endsection