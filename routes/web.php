<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('buku', BukuController::class);

Route::resource('buku', BukuController::class)->name('index', 'buku');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/data-buku', [App\Http\Controllers\HomeController::class, 'dataBuku'])->name('data.buku');

Route::resource('peminjaman', PeminjamanController::class);
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

Route::resource('pengembalian', PengembalianController::class);
Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [HomeController::class, 'logout'])->name('home.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/data-pengguna',[DashboardController::class,'showDataPengguna'])->name('dashboard.showDataPengguna')->middleware('admin');
    
});

Route::group(['middleware' => ['admin']], function(){
    Route::get('/data-pengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');

});

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/home', function () {
    return view('home');
})->name('home.index');

Route::get('/anggota', [DashboardController::class, 'showDataPengguna'])->name('anggota');

Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
