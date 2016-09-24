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


Route::group(['prefix' => 'vue'], function() {
    Route::get('event-handle', function () {
        return view('vue.event-handle');
    });
    Route::get('default', function () {
        return view('vue.default');
    });
    Route::get('data-binding', function () {
        return view('vue.data-binding');
    });
    Route::get('for-list', function () {
        return view('vue.for-list');
    });
    Route::get('pass-variable', function () {
        return view('vue.pass-variable');
    });
});
