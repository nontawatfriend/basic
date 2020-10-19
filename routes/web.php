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
    return view('showdata');
});
Route::get('showdata', function () {
    return view('showdata');
});
Route::get('add', function () {
    return view('add');
});
Route::get('showdata','App\Http\Controllers\test01@showdata');
Route::post('insert','App\Http\Controllers\test01@insert');
Route::get('edit/{id}','App\Http\Controllers\test01@edit'); /* ส่งแบบget */
Route::get('update/{id}','App\Http\Controllers\test01@update');
Route::get('delete/{id}','App\Http\Controllers\test01@delete'); /* ส่งแบบget */
//Route::post('chang','App\Http\Controllers\test01@chang'); //ส่งแบบ post
