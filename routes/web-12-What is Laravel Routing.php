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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    return 'welcome' ;
});
 // route parameters
// 1. required parameters==>($id) ,, required==>مطلوب
Route::get('/test2/{id}', function ($id) {

    return $id;
});
// 2. optional parameters==> ,, optional={?}==>اختياري
Route::get('/test3/{id?}', function () {

    return 'welcome' ;
});

// route name
Route::get('/show-number/{id}', function ($id) {

    return $id;
})->name('a');
// 2. optional parameters==> ,, optional={?}==>اختياري
Route::get('/show-string/{id?}', function () {

    return 'welcome' ;
})->name('b');


