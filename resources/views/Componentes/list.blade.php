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
@foreach ($component as $component)
<tr>
    <td>{{ $component->id }}</td>
    <td>{{ $component->nombre }}</td>
    <td>Q. {{ $component->precio }}</td>
    <td>{{ $component->descripcion }}</td>
    <td>{{ $component->cantidad }}</td>
    <td>{{ $component->updated_at }}</td>
    <td>

   <a href ="{{route('componentes.editar', $component->id) }}" class="btn btn-warning" title="editar"><i class="fas fa-user-edit"></i></a>
   <a href ="{{route('componentes.borrar', $component) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
 
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