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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stud_edit_view', [App\Http\Controllers\StudUpdateController::class, 'index'])->name('stud_edit_view');
//Route::get('/stud_edit_view', function () {
//    return view('stud_edit_view');
//})->name('stud_edit_view');
//Route::('/')

//retrive data
Route::get('edit-records','App\Http\Controllers\StudUpdateController@index');
Route::get('edit/{id}','App\Http\Controllers\StudUpdateController@show');
Route::post('edit/{id}','App\Http\Controllers\StudUpdateController@edit'); 
