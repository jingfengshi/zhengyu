<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/productHome', function () {
    return view('productHome');
});

// 首页
Route::get('/', 'SiteController@index');
// 产品列表页
Route::get('/product-list', 'SiteController@productList');

Route::get('/header', function(){
    return view('brand.brand');
});
