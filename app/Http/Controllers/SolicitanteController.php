<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitante;



class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Solicitante::all();
        return view('solicitante', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datoF= \App\Models\User::all();
        return view('solicitante'), compact('solicitante','datoF'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Solicitante::create($data);

        return redirect()->route('solicitante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitante $solicitante)
    {
        $datoF= \App\Models\User::all();
        return view('solicitante.edit', compact('solicitante','datoF'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request, Solicitante $solicitante)
    {
        $project->update($request->all());

        return redirect()->route('solicitante.index')
        ->with('success', 'Solicitante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitante $solicitante)
    {
        $project->delete();

        return redirect()->route('solicitante')
            ->with('success', 'Se borrado el registro');
    }
}
