<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Cases;

class CasesController extends Controller
{
    public function index()
    {
        $banner = Banners::where('type', Banners::TYPE_CASES)->orderBy('id', 'desc')->first();

        $cases = Cases::where('show', 1)->orderBy('id', 'desc')->get();

        return view('cases', compact('banner', 'cases'));
    }
}
