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
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach ($accesorio as $accesorio)
<tr>
    <td>{{ $accesorio->id }}</td>
    <td>{{ $accesorio->nombre }}</td>
    <td>Q. {{ $accesorio->precio }}</td>
    <td>{{ $accesorio->descripcion }}</td>
    <td>{{ $accesorio->cantidad }}</td>
    <td>{{ $accesorio->updated_at }}</td>
    <td>

   <a href ="{{route('accesorios.editar', $accesorio->id) }}" class="btn btn-warning" title="editar"><i class="fas fa-user-edit"></i></a>
   <a href ="{{route('accesorios.borrar', $accesorio) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
 
    </td>
</tr>
@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </nav>     
@endsection