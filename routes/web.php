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
    return view('includes.test');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/product',
    [
        'uses' => 'ProductController@index',
        'as'=> 'product'
    ]);

Route::get('/product/add', 'ProductController@add');



Route::post('/product/add',
    [
        'uses' => 'ProductController@postCreate',
        'as'=> 'add'
    ]);

//Route::get('user/profile', 'UserController@showProfile')->name('profile');

//Route::post('/product/add','ProductController@postCreate');
