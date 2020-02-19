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
        return view('exclusivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exclusivo = new Exclusivo();

        $exclusivo->nombre = request('nombre');
        $exclusivo->apellido = request('apellido');
        $exclusivo->presupuesto = request('presupuesto');

        $exclusivo->save();

        return redirect('/');
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
