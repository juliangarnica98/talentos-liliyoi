<?php

namespace App\Http\Controllers;
use App\Models\Vacant;
use App\Models\Position;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function index(){
        $array_vacants = array();
        // $vacants = Vacant::all()->toArray();
        $vacants = Vacant::all();
        $positions = Position::all();
        foreach ($vacants as $vacant ) {
            $id=$vacant->id;
            $description=$vacant->description;
            $salary=$vacant->salary;
            foreach ($positions as $position) {
                if($vacant->position_id===$position->id){
                    $positi=$position->description;
                } 
            }
            array_push($array_vacants, $id, $description ,'$ '.$salary, $positi);
        }
       
        return array_reverse($array_vacants);
    }
}
