@extends('layouts.principal')
<head>
    <style>
        form{
            display: inline-block;
        }
    </style>
</head>
@section('hijos')
<h1>Modulo de Afiliados</h1>

<a href="Afiliado/create" class='btn btn-primary'>Crear Nuevo dato</a>
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
        <td><a href="Afiliado/{{$dato->id}}/edit" class='btn btn-info'>Editar</a>
            <form action="/Afiliado/{{$dato->id}}" method='POST'>
                @csrf
                @method('Delete')
                <button type='submit' class='btn btn-warning'>Eliminar</button>
            </form>

        </td>
    </tr>
    @endforeach
</tbody>
</table>


@endsection