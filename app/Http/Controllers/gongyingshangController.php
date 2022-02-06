<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class gongyingshangController extends Controller
{
    public function index(Request  $request)
    {
        return view('gongyingshang');
    }
}
