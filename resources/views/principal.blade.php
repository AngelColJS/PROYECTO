@extends('plantilla')

@section('contenido')

<div class="card">
    <div class="card-body">
        @if (auth()->user()->id =='Administrador')
            <h5>Bienvenid@ al sistema: <strong
                    style="color: rgb(20, 179, 241)">{{ ucwords(auth()->user()->name) }}</strong> </h5>
        @else
            <h5>Bienvenid@ al sistema: <strong
                    style="color: rgb(20, 179, 241)">{{ ucwords(auth()->user()->name) }}</strong> </h5>
            <hr>
            <h5>Si necesita ayuda. Por favor comunicarse con el encargado de la tienda</h5>
        @endif
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="mt-5">
    <div class="row text-bold " style="color: rgb(135, 141, 153)">
        <div class="col-md-8">
            <p class="text-right">&copy; {{ date('Y') }} Sistema Angel Col</p>
        </div>
        <div class="col-md-4">
            <p class="text-right ">Versión 1.0.0</p>
        </div>
    </div>
</footer>

@endsection