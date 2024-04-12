@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Afiliado</h1>

Numero de Empleado {{$empleado}}

<table class='table'>
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ciudad</th>
        <th>Telefono</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($datos as $dato)
    <tr>
        <td>{{$dato->id}}</td>
        <td>{{$dato->codafiliado}}</td>
        <td>{{$dato->nombre}}</td>
        <td>{{$dato->apellido}}</td>
        <td>{{$dato->ciudad}}</td>
        <td>{{$dato->telefono}}</td>
        <td>{{$dato->edad}}</td>
        <td><a href="/Retiro/{{$dato->id}}/{{$empleado}}" class='btn btn-info'>Retiro</a>
            <a href="/Deposito/{{$dato->id}}/{{$empleado}}" class='btn btn-info'>Deposito</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection