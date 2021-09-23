<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APILoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KelasHajiController;
use App\Http\Controllers\PaketHajiController;
use App\Http\Controllers\UmrohController;
use App\Http\Controllers\KelasUmrohController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourTypeController;
use App\Http\Controllers\LaTypeController;
use App\Http\Controllers\ListLaController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\FlightClassController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Auth::routes();

//Login
Route::post('/register', [App\Http\Controllers\APILoginController::class, 'APIRegister']);
Route::post('/login', [App\Http\Controllers\APILoginController::class, 'APIlogin']);
Route::post('/logout', [App\Http\Controllers\APILoginController::class, 'APIlogout']);
Route::get('/login', [App\Http\Controllers\APILoginController::class, 'APIIndex']);

//Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

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

// Haji
Route::get('/kelashaji', [KelasHajiController::class, 'index']);
Route::get('/kelashaji/detail/{ClassID}', [KelasHajiController::class, 'detail']);
Route::get('/pakethaji', [PaketHajiController::class, 'index']);
Route::get('/pakethaji/detail/{PackageHajiID}', [PaketHajiController::class, 'detail']);

// Umroh
Route::get('/umroh', [UmrohController::class, 'index']);
Route::get('/kelasumroh', [KelasUmrohController::class, 'index']);
Route::get('/umroh/detail/{PackageID}', [UmrohController::class, 'detail']);

// Tour
Route::get('/tour', [TourController::class, 'index']);
Route::get('/tour/detail/{TourPriceID}', [TourController::class, 'detail']);
Route::get('/tourtype', [TourTypeController::class, 'index']);
Route::get('/tourtype/detail/{TourTypeID}', [TourTypeController::class, 'detail']);

// Land Arrangement
Route::get('/latype', [LaTypeController::class, 'index']);
Route::get('/listla', [ListLaController::class, 'index']);

// Tiket Pesawat
Route::get('/flight', [FlightController::class, 'index']);
Route::get('/flight/detail/{FlightListID}', [FlightController::class, 'detail']);
Route::get('/flightclass', [FlightClassController::class, 'index']);
Route::get('/flightclass/detail/{FlightListClassID}', [FlightClassController::class, 'detail']);

//Customer
Route::get('/customer', [CustomerController::class, 'APIIndex']);
Route::get('/customer/detail/{CustomerId}', [CustomerController::class, 'detail']);
Route::get('/customer/add', [CustomerController::class, 'APIadd']);
Route::post('/customer/store', [CustomerController::class, 'APIstore']);
Route::get('/customer/edit/{CustomerId}', [CustomerController::class, 'APIedit']);
Route::post('/customer/update/{CustomerId}', [CustomerController::class, 'APIupdate']);
Route::get('/customer-delete/{CustomerId}', [CustomerController::class, 'APIdestroy']);
Route::get('/customer/Upgradeagent/{CustomerId}', [CustomerController::class, 'Upgradeagent']);
Route::post('/customer/Agent/{CustomerId}', [CustomerController::class, 'Agent']);

//Transaksi
Route::get('/transaksi', [TransactionController::class, 'index']);