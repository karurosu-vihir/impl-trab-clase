@extends('layouts.principal')
<head>
    <style>
        form{
            display: inline-block;
        }
    </style>
</head>
@section('hijos')
<h1>Modulo de Empleado</h1>

<a href="Empleado/create" class='btn btn-primary'>Crear Nuevo Empleado</a>
<table class='table'>
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nivel</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($Empleados as $Empleado)
    <tr>
        <td>{{$Empleado->id}}</td>
        <td>{{$Empleado->codempleado}}</td>
        <td>{{$Empleado->nombre}}</td>
        <td>{{$Empleado->apellido}}</td>
        <td>{{$Empleado->nivel}}</td>
        <td>{{$Empleado->telefono}}</td>
        <td><a href="/Empleado/{{$Empleado->id}}/edit" class='btn btn-info'>Editar</a>
            <a href="Afiliado/{{$Empleado->id}}" class='btn btn-success'>Afiliados</a>
            <form action="/Empleado/{{$Empleado->id}}" method='POST'>
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