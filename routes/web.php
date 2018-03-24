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
})->name('trangchu');
Route::get('register',[
    'uses'=>'RegisterController@getRegister',
    'as'=>'dang_ki'
]);
Route::post('register',[
    'uses'=>'RegisterController@postRegister',
    'as'=>'dang_ki'
]);
Route::get('login',[
    'uses'=>'RegisterController@getLogin',
    'as'=>'dang_nhap'
]);
Route::post('login',[
    'uses'=>'RegisterController@postLogin',
    'as'=>'dang_nhap'
]);

Route::get('logout',[
    'uses'=>'RegisterController@getLogout',
    'as'=>'dangxuat'
]);
Route::group([
    'prefix'=>'/',
    'middleware'=>'adminCheck'
],function(){
    Route::get('home',function(){
        return view('pages/home');
    })->name('home');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('trangchu');
Route::get('home',[
            'uses'=>'AdminController@getHomePage',
            'as' => 'home'
        ]);
Route::get('edit/{id}-{alias}',[
            'uses'=>'AdminController@getEditFood',
            'as' => 'edit'
        ]);
// Route::get('edit',[
//     'uses'=>'AdminController@getEditFood',
//     'as'=>'edit'
//     ]);
Route::get('delete/{id}-{alias}',[
            'uses'=>'AdminController@getDeleteFood',
            'as' => 'delete'
        ]);