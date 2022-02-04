<?php

// 单页
Route::get('/', 'IndexController@index');// 首页
Route::get('/about', 'SiteController@about')->name('about');// 关于我们
Route::get('/connect', 'SiteController@connect');// 联系我们

Route::get('/brand', 'BrandController@index');// 服务品牌
Route::get('/cert', 'CertController@index');// 证书

// 产品
Route::get('/products', 'ProductController@product');// 产品首页
Route::get('/products/{id}', 'ProductController@list');// 产品列表页
Route::get('/products-search/{title}', 'ProductController@search')->name('search');// 产品搜索结果页 和产品列表页基本一致
Route::get('/product/{id}', 'ProductController@show');// 产品详情页 - 普通版 - 带左侧分类栏的产品详情页面
Route::get('/product-info/{id}', 'ProductController@info');// 产品详情页 - 创新版 - 仅有图文和手册下载的产品详情页面



//服务

Route::get('/service', 'FuwuController@index')->name('service');// 服务

// 案例
Route::get('/cases', 'CasesController@index');
Route::get('/cases/{id}', 'CasesController@info');

// 新闻
Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@show')->name('news.show');

//隐私
Route::get('/private', 'PrivateController@yinsi')->name('private');

//企业信息
Route::get('/coInfo', 'PrivateController@qiye')->name('coInfo');

//职业
Route::get('/occupation', 'OccupationController@index')->name('occupation');
