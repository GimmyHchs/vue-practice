<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// basic
Route::group(['prefix' => 'vue'], function() {
    Route::get('event-handle', function () {
        return view('vue.basic.event-handle');
    });
    Route::get('default', function () {
        return view('vue.basic.default');
    });
    Route::get('data-binding', function () {
        return view('vue.basic.data-binding');
    });
    Route::get('for-list', function () {
        return view('vue.basic.for-list');
    });
    Route::get('pass-variable', function () {
        return view('vue.basic.pass-variable');
    });
});

//advance
Route::group(['prefix' => 'vue'], function() {
    Route::get('methods-computed', function () {
        return view('vue.advance.methods-computed');
    });
    Route::get('article/resource', function () {
        return view('vue.advance.resource-ajax');
    });
    Route::get('article/crud', 'ArticleController@crud');
    Route::get('article/all', 'ArticleController@all');
    // Route::get('article/api/all', function() {
    //     return App\Article::all();
    // });
    Route::resource('article', 'ArticleController');
});
