<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumo=Insumo::all();
        return view('insumo.index', ['insumo' =>$insumo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>'required',
            'descripcion'=>'required',
            'stock'=>'required',
         
        ]);
        $inputs =$request->all(); 
        Insumo::create($inputs);

        return redirect()->route('insumo.index')
                         ->with('success', 'Insumo registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(Insumo $insumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insumo=Insumo::find($id);
        return view('insumo.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $insumo=Insumo::find($id);
        $insumo->fill($request->all());
        $insumo->save();
        return redirect()->route('insumo.index')
                         ->with('success','Registro de insumo actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insumo=Insumo::findOrFail($id);
        $insumo->delete();

        return redirect()->route('insumo.index')
                         ->with('success','Registro de insumo eliminado.');
    }
}
