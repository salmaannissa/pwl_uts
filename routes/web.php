<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', [DashboardController::class, 'index']);
Route::resource('/dokter', DokterController::class)->parameter('dokter', 'id');
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
  
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
