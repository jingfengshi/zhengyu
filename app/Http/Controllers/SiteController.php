<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function ProductList()
    {
        return view('product_list');
    }

    public function Products()
    {
        return view('products');
    }
}
