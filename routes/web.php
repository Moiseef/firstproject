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

Route::get('/', function () {
    return view('welcome');
});
// all in one
Route::get('/home', 'App\Http\Controllers\MyPlaceController@index');

Route::get('/about', 'App\Http\Controllers\MyPlaceController@indexsecond');

Route::get('/portfolio', 'App\Http\Controllers\MyPlaceController@indexthre');

Route::get('/contact', 'App\Http\Controllers\MyPlaceController@indexfor');

// one for one 

Route::get('/part1', 'App\Http\Controllers\MyPartController@partfirst');

Route::get('/part2', 'App\Http\Controllers\MyPartSecondController@part2');

Route::get('/part3', 'App\Http\Controllers\MyPartThirdController@part3');

Route::get('/part4', 'App\Http\Controllers\MyPartForthController@part4');
