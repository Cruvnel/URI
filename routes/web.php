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


Route::get('calculator/soma/{v1}/{v2}', 'App\Http\Controllers\Calculator\CalcController@soma')
    -> where('v1', '[0-9]+')
    -> where('v2', '[0-9]+');