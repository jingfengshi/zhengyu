<?php


namespace App\Http\Controllers;


use App\Cases;
use App\Category2;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $cates = Category2::with(['products'=>function($query){
            $query->orderBy('sort','desc');
        }])->where('type', $request->input('type', 'protected'))->orderBy('sort','desc')->get();

        $cases = Cases::where('show', 1)->where('type',$request->input('type', 'protected'))->orderBy('id', 'desc')->limit(3)->get();
        $type = $request->input('type', null);
        return view('product', compact('cases', 'cates', 'type'));
    }

    public function showCategory(Request $request, Category2 $cate)
    {
        $type = $cate->type;
        $allCategories = Category2::with(['products'=>function($query){
            $query->orderBy('sort','desc');
        }])->where('type', $type)->orderBy('sort','desc')->get();
        return view('product_list', compact('cate', 'allCategories','type'));
    }
}
