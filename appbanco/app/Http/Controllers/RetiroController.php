<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;
use App\Models\Afiliado;
use App\Models\Empleado;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Retiros = Retiro::all(); 
        return view('Retiros.index') -> with('Retiros',$Retiros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2)
    {
        //
        return view('Retiros.create')->with('afiliado',$id)->with('empleado',$id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Retiro();
        $id2 = $request->get('codempleado');
        $id = $request->get('codafiliado');
        $afiliado = Afiliado::find($id);
        
        $registro->codempleado=$request->get('codempleado');
        $registro->codafiliado=$request->get('codafiliado');
        $registro->fecha=$request->get('fecha');
        $registro->monto=$request->get('monto');
        $registro->save();
        $datos = Retiro::All();
        return view('Retiros.index')->with('afiliado',$afiliado)->with('datos',$datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $id2)
    {
        //
        $datos = Retiro::All();
        $afiliado = Afiliado::find($id);
        $empleado = Empleado::find($id);

        return view('Retiros.index2')->with('datos',$datos)->with('afiliado',$afiliado)->with('empleado',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $id2, string $id3)
    {
        //
        $registro=Retiro::find($id);
        $registro->delete();
        $afiliado = Afiliado::find($id2);
        $datos = Retiro::All();
        return view('Retiros.index')->with('afiliado',$afiliado)->with('datos',$datos);
    }
}
