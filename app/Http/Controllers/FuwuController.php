<?php


namespace App\Http\Controllers;


use App\Banners;
use App\Config;

class FuwuController extends Controller
{
    public function index()
    {
        $banner = Banners::where('type', Banners::TYPE_FUWU)->orderBy('id', 'desc')->first();

        $config = Config::query()->where('type', Config::TYPE_FUWU)->get()->keyBy('name')->toArray();

        return view('service', compact('banner', 'config'));
    }
}
