<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\PDFController;

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
Route::get('edit-records', [UpdateController::class, 'index']);
Route::get('edit/{id}', [UpdateController::class, 'show']);
Route::post('edit/{id}', [UpdateController::class, 'edit']);
//PDF
Route::get('create-pdf', [PDFController::class, 'exportPDF']);
//Delete Data
Route::get('delete-records', [DeleteController::class, 'index']);
Route::get('delete/{id}', [DeleteController::class, 'destroy']);
//Insert Data
Route::get('insert', [InsertController::class, 'insertform']);
Route::post('create', [InsertController::class, 'insert']);
