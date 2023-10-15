<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

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

Route::get('/',[DashboardController::class,'index'] );
Route::get('/userlogin',[DashboardController::class,'login'] );
Route::get('/userregister',[DashboardController::class,'register'] );
// Route::get('/myblog',[DashboardController::class,'myblog'] );
Route::get('/addblog',[DashboardController::class,'addblog'] );
Route::get('/createblog',[BlogController::class,'createblog'] );
Route::get('/editblog/{id}',[BlogController::class,'editblog'] );

Route::post('/insertblog', [DashboardController::class,'insertblog']);

Route::resource('blogs', BlogController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
