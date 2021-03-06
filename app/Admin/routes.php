<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->post('upload', 'ImageUploadController@upload');
    $router->resource('news', NewsController::class);
    //$router->resource('configs', ConfigsController::class);
    $router->get('configs', 'ConfigsController@index');
    $router->post('configs', 'ConfigsController@save');



    $router->get('fuwu', 'FuwuController@index');
    $router->post('fuwu', 'FuwuController@save');


    //证书
    $router->resource('cert', CertController::class);
    //品牌
    $router->resource('service', ServiceController::class);
    //案例
    $router->resource('cases', CasesController::class);
    //banners
    $router->resource('banners', BannersController::class);


    //产品
    $router->get('products', 'ProductsController@index');
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');


    //分类
    $router->get('categories', 'CategoriesController@index');
    $router->get('categories/create', 'CategoriesController@create');
    $router->get('categories/{id}/edit', 'CategoriesController@edit');
    $router->post('categories', 'CategoriesController@store');
    $router->put('categories/{id}', 'CategoriesController@update');
    $router->delete('categories/{id}', 'CategoriesController@destroy');
    $router->get('api/categories', 'CategoriesController@apiIndex');


    $router->resource('product-guiges', ProductsGuigeController::class);
});
