<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LaraController;

use App\Http\Controllers\form_validate;



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


Route::get('home', [PostController::class, 'ViewData'] );

Route::get('home', [PostController::class, 'home'] );
Route::get('create', [PostController::class, 'create'] );
Route::post('home', [PostController::class, 'insert'] );
Route::get('delete/id/{id}', [PostController::class,'destroy']);

Route::get('home', [PostController::class, 'home']);
Route::get('edit/{id}', [PostController::class, 'update']);



Route::get('index', [LaraController::class, 'display'] );

Route::get('index', [postController::class, 'index'] );
Route::get('create', [PostController::class, 'create'] );
Route::post('index', [PostController::class, 'insert'] );
Route::get('delete/id/{id}', [PostController::class,'destroy']);

Route::get('index', [PostController::class, 'index']);
Route::get('edit/{id}', [PostController::class, 'update']);




Route::post('form', [form_validate::Class, 'form_validate']);
Route::view('show','form');


Route::post('/signup', [form_validate::Class, 'form_validate']);
Route::view("check","signup");






