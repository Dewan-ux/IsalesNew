<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UmrohController;
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
    return view('v_home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// visa
Route::get('/visa', [VisaController::class, 'index']);
Route::get('/visa/detail/{VisaTypeID}', [VisaController::class, 'detail']);
Route::get('/visa/add', [VisaController::class, 'add']);
Route::post('/visa/insert', [VisaController::class, 'insert']);
Route::get('/visa/edit/{VisaTypeID}', [VisaController::class, 'edit']);
Route::post('/visa/update/{VisaTypeID}', [VisaController::class, 'update']);
Route::get('/visa/delete/{VisaTypeID}', [VisaController::class, 'delete']);

// Hotel
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/detail/{HotelListID}', [HotelController::class, 'detail']);

// Umroh
Route::get('/umroh', [UmrohController::class, 'index']);
Route::get('/umroh/detail/{PackageID}', [UmrohController::class, 'detail']);