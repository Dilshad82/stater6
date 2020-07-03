<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/w2', function () {

//     $date = [] ;
//     $date['id'] = 10 ;
//     $date['name'] = 'dilshad abdulazim' ;
//     return view('welcom2' , $date);
// });








// Route::get('index' , 'Front\UserController@getindex');


//  // route parameters
// // 1. required parameters==>($id) ,, required==>مطلوب
// Route::get('/show-number/{id}', function ($id) {

//     return $id;
// })->name('a');
// // 2. optional parameters==> ,, optional={?}==>اختياري
// Route::get('/show-string/{id?}', function () {

//     return 'welcome' ;
// })->name('b');

// // route name
// // Route::namespace('Front')->group(function(){

// //     // all route only access controller or methods in folder name=>Front
// //     Route::get('users' , 'UserController@showUserName');

// // });

// // 1 
// // Route::prefix('users')->group(function(){

// //     Route::get('show' , 'UserController@showUserName');
// //     Route::delete('delete' , 'UserController@showUserName');
// //     Route::get('edit' , 'UserController@showUserName');
// //     Route::put('update' , 'UserController@showUserName');
// // });
// // or 
// // 2 
// // Route::group(['prefix' => 'users' ] , function(){
// //     // set of routes
// //     Route::get('/' , function(){
// //         return 'work' ;
// //     });
// //     Route::get('show' , 'UserController@showUserName');
// //     Route::delete('delete' , 'UserController@showUserName');
// //     Route::get('edit' , 'UserController@showUserName');
// //     Route::put('update' , 'UserController@showUserName');
// // });

// Route::group(['namespace' => 'Admin' ] , function(){
    
//     Route::get('second' , 'SecondController@showString')->middleware('auth');
//     Route::get('second1' , 'SecondController@showString1');

// });

// Route::get('login' , function(){
    
//     return 'Must Br Login To Access This Route' ;
// })->name('login');
 

// //  Route::get('users' , 'UserController@index');

// // Route::group(['middleware' => 'auth' ] , function(){
    
// //     Route::get('users' , 'UserController@index');
// // });


// Route::resource('news' , 'NewsController');
