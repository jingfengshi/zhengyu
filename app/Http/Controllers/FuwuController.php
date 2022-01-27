<?php


namespace App\Http\Controllers;


use App\Banners;
use App\Config;
use Illuminate\Http\Request;

class FuwuController extends Controller
{
    public function index(Request  $request)
    {
        $type=$request->input('q','');

        $banner = Banners::where('type', Banners::TYPE_FUWU)->orderBy('id', 'desc')->first();

        $config = Config::query()->where('type', Config::TYPE_FUWU)->get()->keyBy('name')->toArray();

        if($type=='gold'){
            return view('service', compact('banner', 'config'));
        }else{
            return view('service_try', compact('banner', 'config'));
        }


    }
}
