<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    @foreach ($compras as $comp)
        <p>NIT: {{$comp->nit}}</p>
        <P>Nombre: {{$comp->nombre}}</P>
    @endforeach

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Productos</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nombre }}</td>
            <td>Q. {{ $user->precio}}</td>
            <td>{{$user->cantidad}}</td>
            <td>Q. {{$user->total}}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>