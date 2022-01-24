<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function info($id)
    {
        $product = Product::findOne($id);

        $products = Product::where('on_sale', 1)->where('id', '!=', $id)->orderBy('id', 'desc')->limit(12)->get();

        return view('product_info', compact('product', 'products'));
    }
}
