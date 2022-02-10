<?php

// 单页
Route::get('/', 'IndexController@index');// 首页
Route::get('/about', 'SiteController@about')->name('about');// 关于我们
Route::get('/connect', 'SiteController@connect')->name('connect');// 联系我们

Route::get('/brand', 'BrandController@index')->name('brand');// 服务品牌
Route::get('/cert', 'CertController@index')->name('cert');// 证书
Route::get('/ccCert', 'CertController@ccCert')->name('ccCert');// 证书
// 产品分类
Route::get('/cate', 'CategoriesController@index')->name('cate');
Route::get('/cate/{cate}', 'CategoriesController@showCategory');
// 产品
Route::get('/products-search/{title}', 'ProductController@search')->name('search');// 产品搜索结果页 和产品列表页基本一致
Route::get('/product/{id}', 'ProductController@show');// 产品详情页 - 普通版 - 带左侧分类栏的产品详情页面
Route::get('/product-info/{id}', 'ProductController@info');// 产品详情页 - 创新版 - 仅有图文和手册下载的产品详情页面


//服务

Route::get('/service', 'FuwuController@index')->name('service');// 服务

// 案例
Route::get('/cases', 'CasesController@index')->name('cases');
Route::get('/cases/{id}', 'CasesController@info');

// 新闻
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{news}', 'NewsController@show')->name('news.show');

//隐私
Route::get('/private', 'PrivateController@yinsi')->name('private');

//企业信息
Route::get('/coInfo', 'PrivateController@qiye')->name('coInfo');

//职业
Route::get('/occupation', 'OccupationController@index')->name('occupation');

//供应商
Route::get('/supply', 'gongyingshangController@index')->name('supply');
