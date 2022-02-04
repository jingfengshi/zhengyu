<?php


namespace App\Http\Controllers;


use App\Config;

class PrivateController extends Controller
{
    public function yinsi()
    {

        $content = Config::where('name', '隐私声明')->first();

        return view('private',compact('content'));
    }

    public function qiye()
    {

        $content = Config::where('name', '企业信息')->first();

        return view('qiyeInfo',compact('content'));
    }
}
