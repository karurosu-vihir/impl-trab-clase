@extends('layouts.principal')

@section('hijos')
<body onload='fechahoy();'>
<h1>Hacer deposito</h1>
<div class='card-body'>
<form action="/Deposito" method="POST">
    @CSRF
    <div class='form-group'>
    <label for="codempleado">Codigo de Empleado:</label>
    <input type="text" name='codempleado' class='form-control' value="{{$empleado}}" readonly>
    </div>
    <div class='form-group'>
    <label for="codafiliado">Codigo de Afiliado:</label>
    <input type="text" name='codafiliado' class='form-control' value="{{$afiliado}}" readonly>
    </div>
    <div class='form-group'>
    <label for="fecha">Fecha:</label>
    <input type="date" name='fecha' id='fecha' class='form-control' readonly>
    </div>
    <div class='form-group'>
    <label for="monto">Monto:</label>
    <input type="text" name='monto' class='form-control'>
    </div>
    <div style='height:20px;'></div>
    <div class='text-center'>
        <button class='btn btn-primary' type='submit'>Subir</button>
    </div>
</form>
</div>
<script>
    var fechahoy = () => {
    document.getElementById('fecha').valueAsDate = new Date();
    }
</script>

</body>
@endsection