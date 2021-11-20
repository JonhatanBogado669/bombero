<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    public function index(){
        $solicitante=Solicitante::all();
        return response()->json([
            "success"=>true,
            "message"=>"Lista Solicitante",
            "data"=>$solicitante
        ]);
    }

    public function store(Request $request){
        $input=$request->all();
        $validator=Validator::make($input,[
            'nombre'=>'required',
            'documento'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'servicio_id'=>'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $solicitante=Solicitante::create($input);
        return response()->json([
            "success"=>true,
            "message"=>"Lista Solicitante",
            "data"=>$solicitante
        ]);
    }

    public function show(){
        //
    }

    public function update(Request $request, Solicitante $solicitante){
        $input=$request->all();
        $validator=Validator::make($input,[
            'nombre'=>'required',
            'documento'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'servicio_id'=>'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $solicitante->nombre = $input['nombre'];
        $solicitante->documento = $input['documento'];
        $solicitante->telefono = $input['telefono'];
        $solicitante->direccion = $input['direccion'];
        $solicitante->servicio_id = $input['servicio_id'];
        return response()->json([
            "success"=>true,
            "message"=>"Lista Solicitante",
            "data"=>$solicitante
        ]);
    }

    public function destroy(Solicitante $solicitante){
        $solicitante->delete();
        return response()->json([
            "success"=>true,
            "message"=>"Lista Solicitante",
            "data"=>$solicitante
        ]);
    }
}
