<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquriesController;


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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/course', [HomeController::class,'course'])->name('course');
Route::get('/instructor', [HomeController::class,'instructor'])->name('instructor');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::post('/store', [InquriesController::class,'store'])->name('inquery.store');




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
