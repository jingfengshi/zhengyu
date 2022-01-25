<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function Product()
    {
        return view('product');
    }

    public function Products()
    {
        return view('products');
    }

    public function Brand(){
        return view('brand');
    }

    public function Connect(){
        return view('connect',['ak'=>'1LTwc6gzPPHzhQ1eGdxFN26LsFR0ocDB']);
    }

    public function Cert(){
        return view('cert');
    }

    public function Service(){
        return view('service');
    }

    public function About(){
        return view('about');
    }
}
