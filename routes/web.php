<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');
Route::get('/aboutus', 'MainController@aboutus');
Route::get('/reviews', 'MainController@reviews');
Route::get('/contacts', 'MainController@contacts');
Route::get('/services', 'MainController@services');
