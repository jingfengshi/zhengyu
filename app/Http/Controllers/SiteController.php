<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function Product()
    {
        return view('product');
    }

    public function Products()
    {
        return view('products');
    }

    public function ProductList()
    {
        return view('product_list');
    }

    public function ProductInfo()
    {
        return view('product_info');
    }

    public function Brand(){
        return view('brand');
    }

    public function Cases(){
        return view('cases');
    }

    public function Case(){
        return view('case');
    }

    public function Connect(){
        return view('connect');
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
