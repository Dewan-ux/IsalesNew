<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelRoomTypeController;
use App\Http\Controllers\KelasHajiController;
use App\Http\Controllers\PaketHajiController;
use App\Http\Controllers\UmrohController;
use App\Http\Controllers\KelasUmrohController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourTypeController;
use App\Http\Controllers\LaTypeController;
use App\Http\Controllers\ListLaController;
use App\Http\Controllers\TypePaymentController;
use App\Http\Controllers\ListBankController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TransaksiUmrohController;
use App\Http\Controllers\TransaksiHajiController;
use App\Http\Controllers\RegisTravelController;
use App\Http\Controllers\KomisiController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\CustomerController;
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

// Route::get('/', function () {
//     return view('v_home');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

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
Route::get('/roomtype', [HotelRoomTypeController::class, 'index']);
Route::get('/roomtype/detail/{HotelRoomTypeID}', [HotelRoomTypeController::class, 'detail']);
Route::get('/hotel/detail/{HotelListID}', [HotelController::class, 'detail']);

// Haji
Route::get('/kelashaji', [KelasHajiController::class, 'index']);
Route::get('/kelashaji/detail/{ClassID}', [KelasHajiController::class, 'detail']);
Route::get('/kelashaji/add', [KelasHajiController::class, 'add']);
Route::post('/kelashaji/insert', [KelasHajiController::class, 'insert']);
Route::get('/pakethaji', [PaketHajiController::class, 'index']);
Route::get('/pakethaji/add', [PaketHajiController::class, 'add']);
Route::post('/pakethaji/insert', [PaketHajiController::class, 'insert']);
Route::get('/pakethaji/detail/{PackageHajiID}', [PaketHajiController::class, 'detail']);

// Umroh
Route::get('/umroh', [UmrohController::class, 'index']);
Route::get('/umroh/add', [UmrohController::class, 'add']);
Route::post('/umroh/insert', [UmrohController::class, 'insert']);
Route::get('/umroh/detail/{PackageID}', [UmrohController::class, 'detail']);
Route::get('/kelasumroh', [KelasUmrohController::class, 'index']);
Route::get('/kelasumroh/add', [KelasUmrohController::class, 'add']);
Route::post('/kelasumroh/insert', [KelasUmrohController::class, 'insert']);
Route::get('/kelasumroh/detail/{PackageClassID}', [KelasUmrohController::class, 'detail']);


// Tour
Route::get('/tour', [TourController::class, 'index']);
Route::get('/tour/add', [TourController::class, 'add']);
Route::post('/tour/insert', [TourController::class, 'insert']);
Route::get('/tour/detail/{TourPriceID}', [TourController::class, 'detail']);
Route::get('/tourtype', [TourTypeController::class, 'index']);
Route::get('/tourtype/add', [TourTypeController::class, 'add']);
Route::post('/tourtype/insert', [TourTypeController::class, 'insert']);
Route::get('/tourtype/detail/{TourTypeID}', [TourTypeController::class, 'detail']);

// Land Arrangement
Route::get('/latype', [LaTypeController::class, 'index']);
Route::get('/latype/add', [LaTypeController::class, 'add']);
Route::post('/latype/insert', [LaTypeController::class, 'insert']);
Route::get('/latype/detail/{LaTypeID}', [LaTypeController::class, 'detail']);
Route::get('/listla', [ListLaController::class, 'index']);
Route::get('/listla/add', [ListLaController::class, 'add']);
Route::post('/listla/insert', [ListLaController::class, 'insert']);
Route::get('/listla/detail/{ListLaID}', [ListLaController::class, 'detail']);

// Payment
Route::get('/typepayment', [TypePaymentController::class, 'index']);
Route::get('/typepayment/add', [TypePaymentController::class, 'add']);
Route::post('/typepayment/insert', [TypePaymentController::class, 'insert']);

// Bank
Route::get('/listbank', [ListBankController::class, 'index']);
Route::get('/listbank/detail/{BankID}', [ListBankController::class, 'detail']);

// List Registrasi Travel
Route::get('/registravel', [RegisTravelController::class, 'index']);

// Komisi
Route::get('/komisi', [KomisiController::class, 'index']);

// Detail Transaksi
Route::get('/detailtransaksi', [DetailTransaksiController::class, 'index']);

// Transaction
// Umroh
Route::get('/transaksiumroh', [TransaksiUmrohController::class, 'index']);

// Haji
Route::get('/transaksihaji', [TransaksiHajiController::class, 'index']);

// Promo
Route::get('/listpromo', [PromoController::class, 'index']);

//Customer
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/detail/{CustomerId}', [CustomerController::class, 'detail']);
Route::get('/customer/add', [CustomerController::class, 'add']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::get('/customer/edit/{CustomerId}', [CustomerController::class, 'edit']);
Route::post('/customer/update/{CustomerId}', [CustomerController::class, 'update']);
Route::get('/customer-delete/{CustomerId}', [CustomerController::class, 'destroy']);
Route::get('/customer/Upgradeagent/{CustomerId}', [CustomerController::class, 'Upgradeagent']);
Route::post('/customer/Agent/{CustomerId}', [CustomerController::class, 'Agent']);

//user
Route::get('/userlist', [CustomerController::class, 'userlist']);

