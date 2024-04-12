@extends('layouts.principal')

@section('hijos')
<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>
                    <h4>Editar Producto
                        <a href="/Empleado" class='btn btn-danger float-end'>ATRAS</a>
                    </h4>
                </div>

                <div class='card-body'>
                <form action="/Empleado/{{$registro->id}}" method='POST'>
                            @csrf
                            @method('PUT')
                            <div class='form-group mb-3'>
                            <label for="id">Id:</label>
                            <input type="text" name='id' id='id' class='form-control' value="{{$registro->id}}" disabled>
                            </div>
                            <div class='form-group mb-3'>
                            <label for="codempleado">Codigo:</label>
                            <input type="text" name='codempleado' id='codempleado' class='form-control' value="{{$registro->codempleado}}">
                            </div>
                            <div class='form-group mb-3'>
                            <label for="nombre">Nombre:</label>
                            <input type="text" name='nombre' id='nombre' class='form-control' value="{{$registro->nombre}}">
                            </div>
                            <div class='form-group mb-3'>
                            <label for="apellido">Apelido:</label>
                            <input type="text" name='apellido' id='apellido' class='form-control' value="{{$registro->apellido}}">
                            </div>
                            <div class='form-group mb-3'>
                            <label for="nivel">Nivel:</label>
                            <input type="number" name='nivel' id='nivel' class='form-control' value="{{$registro->nivel}}">
                            </div>
                            <div class='form-group mb-3'>
                            <label for="telefono">Telefono:</label>
                            <input type="text" name='telefono' id='telefono' class='form-control' value="{{$registro->telefono}}">
                            </div>
                            <div class='form-group mb-3'>
                            <button type='submit' class='btn btn-primary'>Guardar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection