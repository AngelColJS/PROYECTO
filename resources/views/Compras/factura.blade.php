@extends('plantilla')

@section('contenido')
<div class="row">
          <div class="col-12">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID_Cliente</th>
                    <th>Producto</th>
                    <td>Precio</td>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach ($productos as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->nombre }}</td>
    <td>Q. {{ $product->precio }}</td>
    <td> {{ $product->cantidad }}</td>
    <td>{{$product->updated_at}}</td>
    <td>Q. {{ $product->total }}</td>
    <td>
     
   <a href =" {{ route('descargar.pdf') }} " class="btn btn-warning" title="imprimir"><i class="fas fa-print"></i></a>
   <a href =" {{ route('detalle.eliminar', $product) }} " class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
   
 
    </td>
</tr>
@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID_Cliente</th>
                    <th>Producto</th>
                    <td>Precio</td>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </nav>     
@endsection
