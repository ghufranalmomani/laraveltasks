<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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

     


Route::get('movies',[MovieController::class,'view2'])->middleware('auth');


Route::get('add',[MovieController::class,'view']);

Route::get('add', [MovieController::Class,'Viewadd']);
Route::post('add', [MovieController::class, 'createData']);
Route::get('update/id/{id}', [MovieController::class, 'view']);
Route::post('update/id/{id}', [MovieController::class, 'update1']);
Route::get('delete/id/{id}', [MovieController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
