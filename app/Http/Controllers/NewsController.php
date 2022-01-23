<?php


namespace App\Http\Controllers;


use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

    public function index(Request  $request)
    {
        $newsLists =News::where('on_shelf',1)->orderBy('created_at','desc')->get();

        return view('newsList',['newsList'=>$newsLists]);
    }


    public function show(Request  $request,News $news)
    {
        return view('newsInfo',['news'=>$news]);
    }
}
