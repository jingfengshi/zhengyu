<?php


namespace App\Http\Controllers;


use App\Banners;
use App\Cert;

class CertController  extends Controller
{
    public function index()
    {
        $banner = Banners::where('type', Banners::TYPE_CERT)->orderBy('id', 'desc')->first();


        $certs = Cert::orderBy('id', 'desc')->get();



        return view('cert', compact('banner', 'certs'));
    }


}
