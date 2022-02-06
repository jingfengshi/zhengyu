<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Cases;

class CasesController extends Controller
{
    public function index()
    {
        $banner = Banners::where('type', Banners::TYPE_CASES)->orderBy('id', 'desc')->first();

        $cases = Cases::where('show', 1)->orderBy('id', 'desc')->paginate(6);

        return view('cases', compact('banner', 'cases'));
    }

    public function info($id)
    {
        $case = Cases::findOne($id);

        $prev = Cases::where('id', '<', $case->id)->where('show', 1)->max('id');
        $next = Cases::where('id', '>', $case->id)->where('show', 1)->min('id');

        return view('case', compact('case', 'prev', 'next'));
    }
}
