<?php

// jangan lupa memanggil controller yang digunakan dengan perintah use
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SettingsController;


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

// Routing dengan Closure (Anonymous Function) / Tidak memerlukan controller terpisah
Route::get('/', function () {
    return view('login');
});

// Routing dengan Controller
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/karyawan', [KaryawanController::class,'index'])->name('karyawan');
Route::get('/analytics', [AnalyticsController::class,'index'])->name('analytics');
Route::get('/settings', [SettingsController::class,'index'])->name('settings');

Route::get('karyawan/{id}/show', [KaryawanController::class, 'show'])->name('karyawan.show');
Route::get('karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');


Route::get('/kosong', function () {
    return view('menu.kosong');
})->name('kosong');


// coba membuat tabel yg berealsi dan gunakan recycle di seed menggunakan factory


// membuat absensi dan karyawan menggunakan tinker
// use App\Models\Absensi;Absensi::factory(10)->create();
// php artisan db:seed --class=AbsensiSeeder