<?php


namespace App\Http\Controllers;


use App\Cases;
use App\Category2;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request  $request)
    {
        $categories =Category2::with('products')->where('type',$request->input('type','protected'))->get();
        $cases = Cases::where('show', 1)->orderBy('id', 'desc')->limit(3)->get();
        return view('product', compact('cases', 'categories'));
    }



    public function showCategory(Request  $request,Category2 $cate)
    {
        $type = $cate->type;
        $allCategories = Category2::where('type',$type)->get();
        return view('product_list',compact('cate','allCategories'));
    }
}
