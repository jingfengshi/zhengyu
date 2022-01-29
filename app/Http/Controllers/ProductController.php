<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Cases;
use App\Category2;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 产品首页
    public function product()
    {
        $products = Product::where('on_sale', 1)->orderBy('id', 'desc')->limit(8)->get();

        $cases = Cases::where('show', 1)->orderBy('id', 'desc')->limit(3)->get();

        $cates = Category2::get();

        return view('product', compact('products', 'cases', 'cates'));
    }

    // 产品列表页
    public function list($id)
    {
        $banner = Banners::where('type', Banners::TYPE_PRODUCT_LIST)->orderBy('id', 'desc')->first();

        $cates = Category2::get();

        $products = Product::where('on_sale', 1)->where('category_id', $id)->orderBy('id', 'desc')->get();

        return view('product_list', compact('banner', 'cates', 'id', 'products'));
    }

    public function search($title)
    {
        $banner = Banners::where('type', Banners::TYPE_PRODUCT_LIST)->orderBy('id', 'desc')->first();

        $cates = Category2::get();

        $products = Product::where('on_sale', 1)->where('title', 'like', '%' . $title . '%')->orderBy('id', 'desc')->get();

        return view('product_search', compact('banner', 'cates', 'products'));
    }

    // 产品详情页普通版
    public function show(Request $request, Product $product)
    {
        $categories = Category2::with('products')->get();

        return view('products', compact('product', 'categories'));
    }

    public function info($id)
    {
        $product = Product::findOne($id);

        $products = Product::where('id', '!=', $id)->get();

        return view('product_info', compact('product', 'products'));
    }

}
