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
Route::get('edit-records','App\Http\Controllers\StudUpdateController@index');
Route::get('edit/{id}','App\Http\Controllers\StudUpdateController@show');
Route::post('edit/{id}','App\Http\Controllers\StudUpdateController@edit');
//Delete Data
Route::get('delete-records','App\Http\Controllers\StudDeleteController@index');
Route::get('delete/{id}','App\Http\Controllers\StudDeleteController@destroy'); 
//Insert Data
Route::get('insert','App\Http\Controllers\StudInsertController@insertform');
Route::post('create','App\Http\Controllers\StudInsertController@insert'); 
