<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function list($id)
    {
        $banner = Banners::where('type', Banners::TYPE_PRODUCT_LIST)->orderBy('id', 'desc')->first();

        $cates = Category::get()->toArray();

        foreach ($cates as $key => $cate) {
            $childs = Category::select('id')->where('parent_id', $cate['id'])->get()->toArray();
            $cates[$key]['childs'] = $childs ? array_map(function ($v) {
                return $v['id'];
            }, $childs) : [];
        }

        $ids = [];
        if ($childs = Category::select('id')->where('parent_id', $id)->get()->toArray()) {
            $ids = array_map(function ($v) {
                return $v['id'];
            }, $childs);
        }
        array_push($ids, $id);

        $products = Product::where('on_sale', 1)->whereIn('category_id', $ids)->orderBy('id', 'desc')->get();

        return view('product_list', compact('banner', 'cates', 'id', 'products'));
    }

    public function info($id)
    {
        $product = Product::findOne($id);

        $products = Product::where('on_sale', 1)->where('id', '!=', $id)->orderBy('id', 'desc')->limit(12)->get();

        return view('product_info', compact('product', 'products'));
    }
}
