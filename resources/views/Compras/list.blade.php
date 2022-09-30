@extends('plantilla')

@section('contenido')
<div class="row">
          <div class="col-12">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach ($compras as $compras)
<tr>
    <td>{{ $compras->id }}</td>
    <td>{{ $compras->nit }}</td>
    <td> {{ $compras->nombre }}</td>
    <td>{{ $compras->direccion }}</td>
    <td>{{ $compras->fecha }}</td>
    <td>{{ $compras->estado }}</td>
    <td>

   <a href ="{{route('compras.editar', $compras->id) }}" class="btn btn-warning" title="editar"><i class="fas fa-user-edit"></i></a>
   <a href ="{{route('compras.borrar', $compras) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
   <a href ="{{route('compras.agregar', $compras->id) }}" class="btn btn-warning" title="agregar"><i  class="fas fa-solid fa-cart-plus"></i></a>
 
    </td>
</tr>
@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nit</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </nav>     
@endsection