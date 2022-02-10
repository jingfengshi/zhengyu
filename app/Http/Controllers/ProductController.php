<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Category2;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        if(!$product->is_creative){
            $categories = Category2::with('products')->get();
            return view('products', compact('product', 'products','categories'));
        }else{
            $cate=Category2::find($product->category_id);

           $categories = Category2::where('type',$cate->type)->get();
           $type = $cate->type;
            return view('product_info', compact('product', 'categories','type'));
        }

    }

}
