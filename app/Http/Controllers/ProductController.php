<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Category;
use App\Category2;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 产品首页
    public function product()
    {
        return view('product');
    }

    // 产品列表页
    public function list($id)
    {
        $banner = Banners::where('type', Banners::TYPE_PRODUCT_LIST)->orderBy('id', 'desc')->first();

        $cates = Category2::get();

        $products = Product::where('on_sale', 1)->where('category_id', $id)->orderBy('id', 'desc')->get();

        return view('product_list', compact('banner', 'cates', 'id', 'products'));
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

        $products = Product::where('id','!=',$id)->get();

        return view('product_info', compact('product','products'));
    }

}
