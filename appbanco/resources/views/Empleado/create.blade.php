@extends('layouts.principal')

@section('hijos')
<h1>Crear Empleado</h1>
<div class='card-body'>
<form action="/Empleado" method="POST">
    @CSRF
    <div class='form-group'>
    <label for="codempleado">Codigo de Empleado:</label>
    <input type="text" name='codempleado' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="nombre">Nombre:</label>
    <input type="text" name='nombre' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="apellido">Apellido:</label>
    <input type="text" name='apellido' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="nivel">Nivel:</label>
    <input type="text" name='nivel' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="telefono">Telefono:</label>
    <input type="text" name='telefono' class='form-control'>
    </div>
    <div style='height:20px;'></div>
    <div class='text-center'>
        <button class='btn btn-primary' type='submit'>Subir</button>
    </div>
</form>
</div>
@endsection