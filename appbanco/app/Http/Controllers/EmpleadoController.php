<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Empleados = Empleado::all(); 
        return view('Empleado.index') -> with('Empleados',$Empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Empleado = new Empleado();

        $Empleado->codempleado=$request->get('codempleado');
        $Empleado->nombre=$request->get('nombre');
        $Empleado->apellido=$request->get('apellido');
        $Empleado->nivel=$request->get('nivel');
        $Empleado->telefono=$request->get('telefono');
        $Empleado->save();
        return redirect('/Empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $registro = Empleado::find($id);
        return view("Empleado.edit")->with('registro',$registro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $registro = Empleado::find($id);

        $registro->codempleado=$request->get('codempleado');
        $registro->nombre=$request->get('nombre');
        $registro->apellido=$request->get('apellido');
        $registro->nivel=$request->get('nivel');
        $registro->telefono=$request->get('telefono');
        $registro->save();
        return redirect('/Empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $registro=Empleado::find($id);
        $registro->delete();
        return redirect('/Empleado');
    }
}
