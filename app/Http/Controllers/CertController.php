<?php


namespace App\Http\Controllers;


use App\Banners;
use App\Cert;

class CertController  extends Controller
{
    public function index()
    {
        $banner = Banners::where('type', Banners::TYPE_CERT)->orderBy('id', 'desc')->first();


        $certs = Cert::where('type','honor')->orderBy('id', 'desc')->get();



        return view('cert', compact('banner', 'certs'));
    }


    public function ccCert()
    {
        $banner = Banners::where('type', Banners::TYPE_CERT)->orderBy('id', 'desc')->first();


        $certs = Cert::where('type','certificate')->orderBy('id', 'desc')->get();



        return view('ccCert', compact('banner', 'certs'));
    }


}
