<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\SolicitanteResource;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitante = Solicitante::all();
        return response([ 'solicitante' => SolicitanteResource::collection($solicitante), 'message' => 'Retrieved successfully'], 200);
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

        $validator = Validator::make($data, [
           
            'nombre' => 'required|max:255',
            'documento' => 'required',
            'direccion' => 'required|max:255',
            'telefono' => 'required|max:255',
            'servicio_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $solicitante = Solicitante::create($data);

        return response(['solicitante' => new SolicitanteResource($solicitante), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitante $solicitante)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        $solicitante->update($request->all());

        return response(['solicitante' => new SolicitanteResource($solicitante), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitante  $Solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();

        return response(['message' => 'Deleted']);
    }
}