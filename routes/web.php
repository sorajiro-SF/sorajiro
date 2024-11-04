<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Postcontroller::class,'index']);
Route::get('/posts/create', [Postcontroller::class,'create']);
Route::get('/posts/{post}',[Postcontroller::class,'show']);
Route::post('/posts',[Postcontroller::class,'store']);
//RESTのURLの考え方はここじゃね？//
