<?php

namespace App\Http\Controllers;

use App\Service;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Service::where('show', 1)->orderBy('id', 'desc')->get();

        return view('brand', compact('brands'));
    }
}
