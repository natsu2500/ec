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

// DashBoard top
Route::get('/dashboard', 'DashBoardController@index');

// DashBoard 商品登録
Route::get('/dashboard/productregister', 'ProductRegisterController@index');
Route::post('/dashboard/productregister/add', 'ProductRegisterController@create');
//DashBoard 商品登録 サブカテゴリー取得
Route::get('/dashboard/productregister/subcategory', 'ProductRegisterController@getSubCategries');
