@extends('layouts.principal')

@section('hijos')
<h1>Crear Empleado</h1>
<div class='card-body'>
<form action="/Afiliado" method="POST">
    @CSRF
    <div class='form-group'>
    <label for="codafiliado">Codigo de Afiliado:</label>
    <input type="text" name='codafiliado' class='form-control'>
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
    <label for="ciudad">Ciudad:</label>
    <input type="text" name='ciudad' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="telefono">Telefono:</label>
    <input type="text" name='telefono' class='form-control'>
    </div>
    <div class='form-group'>
    <label for="edad">Edad:</label>
    <input type="number" name='edad' class='form-control'>
    </div>
    <div style='height:20px;'></div>
    <div class='text-center'>
        <button class='btn btn-primary' type='submit'>Subir</button>
    </div>
</form>
</div>
@endsection