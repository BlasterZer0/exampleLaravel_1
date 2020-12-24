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
    return view('auth/login');
});

Auth::routes();

//Route::('/')
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Edit Data
Route::get('edit-records','App\Http\Controllers\UpdateController@index');
Route::get('edit/{id}','App\Http\Controllers\UpdateController@show');
Route::post('edit/{id}','App\Http\Controllers\UpdateController@edit');
//Delete Data
Route::get('delete-records','App\Http\Controllers\DeleteController@index');
Route::get('delete/{id}','App\Http\Controllers\DeleteController@destroy'); 
//Insert Data
Route::get('insert','App\Http\Controllers\InsertController@insertform');
Route::post('create','App\Http\Controllers\InsertController@insert'); 
