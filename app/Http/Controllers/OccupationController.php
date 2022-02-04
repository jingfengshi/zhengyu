<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OccupationController extends Controller
{
    public function index(Request  $request)
    {
        if($request->filled('q')){
            return view('occupationInfo');
        }else{
            return view('occupation');
        }

    }
}
