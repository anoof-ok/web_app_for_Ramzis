<?php

use App\Http\Controllers\auth\register;
use App\Http\Controllers\auth\login;
use App\Http\Controllers\auth\logout;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\post;
use App\Http\Controllers\posts;
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

Route::get('/',function() {
    return view('home');
})->name('home');
Route::get('/dashboard',[dashboard::class,'index'])->name('dashboard');
Route::get('/register',[register::class,'index'])->name('register');
Route::post('/register',[register::class,'store']);

Route::get('/post',[post::class,'index'])->name('post');
Route::post('/post',[post::class,'store']);


Route::post('/logout',[logout::class,'store'])->name('logout');

Route::get('/login',[login::class,'index'])->name('login');
Route::post('/login',[login::class,'login']);



