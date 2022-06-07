<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use App\Models\User;  

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


Route::get('/id/{id}/name/{name}', [PagesController::class, 'index']);




// Route::get('/user',function()  
// {  
//   return User::find(1)->post;  
// });
Route::get('/user',[PagesController::class,'post']);