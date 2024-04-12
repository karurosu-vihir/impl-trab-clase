<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;
use App\Models\Empleado;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Afiliado::All();
        return view('Afiliados.index')->with('datos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Afiliados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Afiliado = new Afiliado();

        $Afiliado->codafiliado=$request->get('codafiliado');
        $Afiliado->nombre=$request->get('nombre');
        $Afiliado->apellido=$request->get('apellido');
        $Afiliado->ciudad=$request->get('ciudad');
        $Afiliado->telefono=$request->get('telefono');
        $Afiliado->edad=$request->get('edad');
        $Afiliado->save();
        return redirect('/Afiliado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado = $id;
        $datos = Afiliado::All();
        return view('Afiliados.index2')->with('empleado',$empleado)->with('datos',$datos); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $registro = Afiliado::find($id);
        return view("Afiliados.edit")->with('registro',$registro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $registro = Afiliado::find($id);

        $registro->codafiliado=$request->get('codafiliado');
        $registro->nombre=$request->get('nombre');
        $registro->apellido=$request->get('apellido');
        $registro->ciudad=$request->get('ciudad');
        $registro->telefono=$request->get('telefono');
        $registro->edad=$request->get('edad');
        $registro->save();
        return redirect('/Afiliado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $registro=Afiliado::find($id);
        $registro->delete();
        return redirect('/Afiliado');
    }

}
