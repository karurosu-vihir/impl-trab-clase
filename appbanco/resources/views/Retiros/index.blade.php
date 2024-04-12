@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Retiros Afiliados</h1>
<p>Afiliado: {{$afiliado->id}} {{$afiliado->nombre}}</p>
<table class='table'>
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo Afiliado</th>
        <th>Codigo Empleado</th>
        <th>Fecha</th>
        <th>Monto</th>
    </tr>
</thead>
<tbody>
    @foreach($datos as $dato)
    @if($dato->codafiliado === $afiliado->id)
    <tr>
        <td>{{$dato->id}}</td>
        <td>{{$dato->codafiliado}}</td>
        <td>{{$dato->codempleado}}</td>
        <td>{{$dato->fecha}}</td>
        <td>{{$dato->monto}}</td>
    </tr>
    @else

    @endif
    @endforeach
</tbody>
</table>
<div class='text-center'>
<a href="/Empleado" class='btn btn-primary'>Volver</a>
</div>
@endsection