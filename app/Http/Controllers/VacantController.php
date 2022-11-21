<?php

namespace App\Http\Controllers;
use App\Models\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function index(){
        $vacants = Vacant::all()->toArray();
        return array_reverse($vacants);
    }
}
