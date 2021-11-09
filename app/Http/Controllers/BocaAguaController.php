<?php

namespace App\Http\Controllers;

use App\Models\BocaAgua;
use Illuminate\Http\Request;

class BocaAguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //CONEXION CON LAS TABLAS boca_agua Y SU RELACIONES
    public function index(Request $request)
    {
        $buscar=$request->get('buscar');
        $data= BocaAgua::where('numero','like','%'.$buscar.'%')
            ->get(['boca_agua.id','boca_agua.direccion','boca_agua.numero','boca_agua.latitud','boca_agua.longitud']);
    return view('bocaagua.index', compact('data','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bocaagua.create');
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
            'numero'=>'required',
            'direccion'=>'required',
            'latitud'=>'required',
            'longitud'=>'required'
        ]);
        $inputs =$request->all(); 
        BocaAgua::create($inputs);

        return redirect()->route('bocaagua.index')
                         ->with('success', 'Boca de agua registrada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BocaAgua  $bocaAgua
     * @return \Illuminate\Http\Response
     */
    public function show(BocaAgua $bocaAgua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BocaAgua  $bocaAgua
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=BocaAgua::find($id);
       
        return view('bocaagua.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BocaAgua  $bocaAgua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=BocaAgua::find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('bocaagua.index')
                         ->with('success','Registro de boca de agua actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BocaAgua  $bocaAgua
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=BocaAgua::findOrFail($id);
        $data->delete();

        return redirect()->route('bocaagua.index')
                         ->with('success','Registro de boca de agua eliminado.');
    }
}
