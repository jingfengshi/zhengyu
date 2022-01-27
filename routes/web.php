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

// 首页
Route::get('/', 'IndexController@index');


// 产品首页
Route::get('/product', 'SiteController@product');
// 产品列表页
Route::get('/product-list/{id}', 'ProductController@list');
// 产品页
Route::get('/products', 'SiteController@products');
// 产品详情页
Route::get('/product-info/{id}', 'ProductController@info');
// 服务品牌
Route::get('/brand', 'BrandController@index');
// 案例列表
Route::get('/cases', 'CasesController@index');
// 案例详情
Route::get('/cases/{id}', 'CasesController@info');
// 联系我们
Route::get('/connect', 'SiteController@connect');

// 服务
Route::get('/service', 'FuwuController@index');
// 关于我们
Route::get('/about', 'SiteController@about');





// 证书
Route::get('/cert', 'CertController@index');

//产品列表页
Route::get('/product', 'ProductController@list');
Route::get('/products/{product}', 'ProductController@show');

// 新闻
Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show')->name('news.show');
