<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Validator;

class CandidateController extends Controller
{
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'cell' => 'required|max:25',
            'email' => 'required|max:25',
            'ide' => 'required|max:25',
            'type_ide' => 'required|max:25',
            'position' => 'required|max:25',
            'experiencie' => 'required|max:25',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        $candidate = new Candidate;
        $candidate->name=$request->name;
        $candidate->last_name=$request->last_name;
        $candidate->cell=$request->cell;
        $candidate->email=$request->email;
        $candidate->ide=$request->ide;
        $candidate->type_ide=$request->type_ide;
        $candidate->position=$request->ide;
        $candidate->experiencie=$request->experiencie;
        $candidate->cv="Direccion de hoja de vida";
        $candidate->status= 1;
        $candidate->save();
        return response()->json(['success'=>'Se ha registrado satisfactoriamente']);
    
        
    }
}
