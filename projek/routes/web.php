<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PemesananController;

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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
// Route::get('/reservation', [PemesananController::class, 'showReservationForm'])->name('reservation.form');
// Route::post('/store', [PemesananController::class, 'store'])->name('reservation.store');

// Route::get('/pemesanan', 'PemesananController@index')->name('pemesanan.index');
// Route::post('/pemesanan/pesan', 'PemesananController@pesan')->name('pemesanan.pesan');

// Route::get('/show-package-names', [PaketController::class, 'showPackageNames']);

// HOME
// Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// Pemesanan routes
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/create', [PemesananController::class, 'create']);
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('store');

// HOME 2
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('reservation');
// // MENU
// Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

// // MENU MAKANAN
// Route::get('/menumakan', [MakananController::class, 'index'])->name('menumakan');

// // MENU MINUMAN
// Route::get('/menuminum', [MinumanController::class, 'index'])->name('menuminum');

// // // KERANJANG
// // Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');
// // Route::get('/showkeranjang', [PemesananController::class, 'showKeranjang'])->name('showkeranjang');

// // // Route for keranjang() in PemesananController
// // Route::get('/keranjang/all', [PemesananController::class, 'keranjang'])->name('keranjang.all');

// // KERANJANG
// Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');

// // Route for showKeranjang() in PemesananController
// Route::get('/showkeranjang', [PemesananController::class, 'showKeranjang'])->name('showkeranjang');

// // Route for keranjang() in PemesananController
// Route::get('/keranjang/all', [PemesananController::class, 'keranjang'])->name('keranjang.all');


// // RIWAYAT
// Route::get('/riwayat', [HomeController::class, 'riwayat'])->name('riwayat');

// LOGIN - REGISTER
// Route::post('/halamanlogin', [AuthManager::class, 'loginPost'])->name('login.post');
// Route::post('/halamanregister', [AuthManager::class, 'registerPost'])->name('register.post');
// Route::get('/register', 'AuthManager@showRegistrationForm')->name('register');
// Route::post('/register', 'AuthManager@registerPost')->name('register.post');
// Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
// Route::get('/halamanlogin', [AuthManager::class, 'halamanlogin'])->name('halamanlogin');
// Route::get('/halamanregister', [AuthManager::class, 'halamanregister'])->name('halamanregister');

// Route::get('/halamanlogin', [AuthManager::class, 'halamanlogin'])->name('halamanlogin');
// Route::get('/halamanregister', [AuthManager::class, 'halamanregister'])->name('halamanregister');
// Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
// Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
// Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/login', [AuthManager::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthManager::class, 'login'])->name('login.post');
Route::get('/register', [AuthManager::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthManager::class, 'register'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

// // Tenant
// Route::middleware(['auth'])->group(function () {
//     Route::get('/tenant', [TenantController::class, 'index'])->name('tenant.index');
//     Route::get('/tenant/create', [TenantController::class, 'create'])->name('tenant.create');
//     Route::post('/tenant', [TenantController::class, 'store'])->name('tenant.store');
//     Route::get('/tenant/{tenant}/edit', [TenantController::class, 'edit'])->name('tenant.edit');
//     Route::put('/tenant/{tenant}', [TenantController::class, 'update'])->name('tenant.update');
//     Route::delete('/tenant/{tenant}', [TenantController::class, 'destroy'])->name('tenant.destroy');
// });

// // Pemesanan
// Route::post('/pemesanan', [PemesananController::class, 'store']);
// Route::put('/pemesanan/{id_pemesanan}', [PemesananController::class, 'update']);
// Route::delete('/pemesanan/{id_pemesanan}', [PemesananController::class, 'destroy']);
// Route::get('/pemesanan', [PemesananController::class, 'index']);
// Route::get('/pemesanan/{id_pemesanan}', [PemesananController::class, 'show']);
// Route::get('/pemesanan/{id_pemesanan}/makanan', [PemesananController::class, 'showMakanan']);
// Route::get('/pemesanan/{id_pemesanan}/minuman', [PemesananController::class, 'showMinuman']);
// Route::get('/pemesanan/{id_pemesanan}/users', [PemesananController::class, 'showUsers']);

// // Pembayaran
// Route::get('/pembayaran', [PembayaranController::class, 'index']);
// Route::get('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'show']);
// Route::post('/pembayaran', [PembayaranController::class, 'store']);
// Route::put('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'update']);
// Route::delete('/pembayaran/{id_pembayaran}', [PembayaranController::class, 'destroy']);

