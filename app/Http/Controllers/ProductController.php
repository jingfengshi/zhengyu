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
            $recommendProducts =$this->reCommand($product->category_id,$product->id);
            return view('products', compact('product', 'products','categories','recommendProducts'));
        }else{
            $cate=Category2::find($product->category_id);
           $categories = Category2::where('type',$cate->type)->get();

           $type = $cate->type;
            return view('product_info', compact('product', 'categories','type'));
        }

    }


    protected function reCommand($cate,$excludeId)
    {
        $products=Product::where('is_recommend',1)->where('id','!=',$excludeId)->take(4)->get();
        if($hasNum=count($products)<4){
            $needNum = 4- $hasNum;
            $needProducts=Product::where('category_id',$cate)
                ->where('id','!=',$excludeId)
                ->whereNotIn('id',$products->pluck('id')->toArray())
                ->take($needNum)->get();
            $products=array_merge($products->toArray(),$needProducts->toArray());
        }
        return $products;
    }




}
