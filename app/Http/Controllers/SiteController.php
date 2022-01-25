<?php

namespace App\Http\Controllers;

use App\Banners;
use App\Config;

class SiteController extends Controller
{
    public function About()
    {
        $banner = Banners::where('type', Banners::TYPE_ABOUT)->first();

        $content = Config::where('name', '关于我们')->first();

        return view('about', compact('banner', 'content'));
    }

    public function Connect()
    {
        return view('connect', ['ak' => '1LTwc6gzPPHzhQ1eGdxFN26LsFR0ocDB']);
    }





    public function Product()
    {
        return view('product');
    }

    public function Products()
    {
        return view('products');
    }

    public function Cert()
    {
        return view('cert');
    }

    public function Service()
    {
        return view('service');
    }
}
