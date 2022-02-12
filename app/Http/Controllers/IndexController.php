<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Cases;
use App\Category2;
use App\News;
use App\Product;

class IndexController extends Controller
{
    public function Index()
    {
        $news = News::where('on_shelf', 1)->orderBy('id', 'desc')->limit(3)->get();
        $products = Product::where('on_sale', 1)->where('is_creative',1)->orderBy('id', 'desc')->limit(9)->get();
        $cases = Cases::where('show', 1)->orderBy('id', 'desc')->limit(12)->get();
        $banner_left = Banners::where('type', Banners::TYPE_INDEX_LEFT)->orderBy('id', 'desc')->first();
        $banner_right = Banners::where('type', Banners::TYPE_INDEX_RIGHT)->orderBy('id', 'desc')->first();

        $cates = Category2::all()->groupBy('type');
        return view('index', compact('news', 'products', 'cases', 'banner_left', 'banner_right','cates'));
    }
}
