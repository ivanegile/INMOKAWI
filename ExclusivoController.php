<?php

namespace App\Http\Controllers;

use App\Exclusivo;
use Illuminate\Http\Request;

class ExclusivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exclusivo');
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
            
            
            \App\Exclusivo::create($validatedData);

        Exclusivo::create([  
            'nombre' => request('nombre'),
            'telefono' => request('telefono'),
            'celular' => request('celular'),
            'credito' => request('credito'),
            'opcion' => request('opcion'),
            'otro' => request('otro'),
            'presupuesto' => request('presupuesto'),
        ]);

        

        return redirect('/create');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Exclusivo  $exclusivo
     * @return \Illuminate\Http\Response
     */
    public function show(Exclusivo $exclusivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exclusivo  $exclusivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Exclusivo $exclusivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exclusivo  $exclusivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exclusivo $exclusivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exclusivo  $exclusivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exclusivo $exclusivo)
    {
        //
    }
}
