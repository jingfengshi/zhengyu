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
Route::get('/', 'SiteController@index');
// 产品首页
Route::get('/product', 'SiteController@product');
// 产品列表页
Route::get('/product-list', 'SiteController@productList');
// 产品页
Route::get('/products', 'SiteController@products');
// 产品页
Route::get('/product-info', 'SiteController@productInfo');
// 服务品牌
Route::get('/brand', 'SiteController@brand');
// 案例列表
Route::get('/cases', 'SiteController@cases');
// 案例详情
Route::get('/case', 'SiteController@case');
