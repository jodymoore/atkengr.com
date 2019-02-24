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

use App\User;

if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

Route::get('/', function () {
    return view('welcome');
});


/**
*  Main home page visitors see when they visit just /
*/
Route::get('/', 'MainController@show');

/**
*  /show
*/
Route::get('/products', 'MainController@showProducts');


/**
*  /showContact
*/
Route::get('/contact', 'MainController@showContact');

/**
*  /showBuy
*/
Route::get('/buy', 'MainController@showBuy');

/**
*  /order
*/
Route::get('/order', 'CartController@show');


Auth::routes();

Route::get('/home', 'HomeController@index');
