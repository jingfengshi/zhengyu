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
    $router->resource('cert', CertController::class);

});
