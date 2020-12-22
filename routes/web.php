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
//Route::get('/stud_create', [App\Http\Controllers\StudInsertController::class])->name('stud_create');
//Route::get('/stud_edit_view', function () {
//    return view('stud_edit_view');
//})->name('stud_edit_view');
//Route::('/')

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
