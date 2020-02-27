<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;
use App\Rules\ValidFormulario;
use Illuminate\Support\DB;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|string',
            'telefono' => 'required|numeric|min:7',
            'celular' => 'nullable|numeric|min:10',
            'credito' => 'required_unless:opcion, on',
            'otro' => 'string|nullable',
            'opcion' => 'nullable',
            'seguro' => 'required|numeric|min:11',
            'presupuesto' => 'required',
            ]);
            
          \App\Formulario::create($validatedData);

         Formulario::create([  
            'nombre' => request('nombre'),
            'telefono' => request('telefono'),
            'celular' => request('celular'),
            'credito' => request('credito'),
            'seguro' => request('seguro'),
            'opcion' => request('opcion'),
            'otro' => request('otro'),
            'presupuesto' => request('presupuesto'),
        ]);
            
        return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
