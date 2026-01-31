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

    $router->resource('destination-categories', DestinationCategoryController::class);
    $router->resource('destinations', DestinationController::class);
    $router->resource('destination-details-inserts', DestinationDetailsInsertController::class);
    $router->resource('durations', DurationController::class);

    $router->resource('blog-categories', BlogCategoryController::class);
    $router->resource('blogs', BlogController::class);

});
