<?php

use App\Http\Controllers\alternatifController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AValueController;
use App\Http\Controllers\CpiController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PasienController;
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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
  Route::get('/dashboard', [DashboardController::class, 'index']);

});

//alternatif
Route::get('/alternatifs', [alternatifController::class, 'index']);
Route::get('/alternatif/{id}', [alternatifController::class, 'edit']);
Route::put('/edit_alternatif/{id}', [alternatifController::class, 'update']);

//criteria
Route::get('/criterias', [CriteriaController::class, 'index']);
Route::get('/criteria/{id}', [CriteriaController::class, 'edit']);
Route::put('/edit_criteria/{id}', [CriteriaController::class, 'update']);

//nilai
Route::get('/avalue', [AValueController::class, 'index']);
Route::get('/value/{id}', [AValueController::class, 'showValue']);
Route::put('/edit_value/{id}', [AValueController::class, 'edit']);

//perhitungan
Route::get('/calculate', [CpiController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
