<?php

use Illuminate\Support\Facades\Route;
//login
use App\Http\Controllers\AuthController;
use App\Http\Controllers\siswa\DsiswaController;
use App\Http\controllers\admin\userController;
use App\Http\Controllers\admin\settingController;
use App\Http\Controllers\admin\guruController;
use App\Http\Controllers\admin\siswaController;
use App\Http\Controllers\admin\AjadwalController;
//endlogin
//ADMIN
use App\Http\Controllers\admin\DadminController;
//ENDADMIN
//star guru
use App\Http\Controllers\guru\DguruController;

//endguru




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

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('proses', 'prosesLogin');
    Route::get('register', 'register');
    Route::post('daftar', 'daftar');
    Route::get('logout', 'logout');
});


Route::middleware('auth')->group(function () {
//Halaman admin
    Route::prefix('admin')->group(function () {
        Route::get('/', [DadminController::class, 'index']);
        Route::controller(userController::class)->group(function () {
            Route::get('user', 'index');
        });
        Route::controller(userController::class)->group(function () {
            Route::get('user', 'index');
            Route::post('user/create', 'create');
        });
        Route::controller(settingController::class)->group(function () {
            Route::get('mapel', 'mapel_index');
            Route::post('mapel_create', 'mapel_create');
            Route::post('mapel_edit/{id}', 'mapel_edit');
            Route::get('mapel_hapus/{id}', 'mapel_hapus');
            // kelas
            Route::get('kelas', 'kelas_index');
            Route::post('kelas_create', 'kelas_create');
            Route::post('kelas_edit/{id}', 'kelas_edit');
            Route::get('kelas_hapus/{id}', 'kelas_hapus');
        });
        //guru
        Route::controller(guruController::class)->group(function () {
            Route::get('guru', 'guru_index');
            Route::post('guru_create', 'guru_create');
            Route::post('guru_edit/{id}', 'guru_edit');
            Route::get('guru_hapus/{id}', 'guru_hapus');
        });
        Route::controller(siswaController::class)->group(function () {
            Route::get('siswa', 'siswa_index');
            Route::post('siswa_create', 'siswa_create');
            Route::post('siswa_edit/{id}', 'siswa_edit');
            Route::get('siswa_hapus/{id}', 'siswa_hapus');
        });
        Route::controller(AjadwalController::class)->group(function () {
            Route::get('jadwal', 'index');
            Route::get('jadwal/jam', 'jam');
            Route::post('jadwal/jam/create', 'add_jam');

            Route::get('jadwal/cek','cek');
            Route::post('jadwal/create','add_jadwal');
        });
    });
//halaman guru
Route::prefix('guru')->group(function () {
    Route::get('/', [DguruController::class, 'index']);

    // Route::controller(userController::class)->group(function () {
    //     Route::get('user', 'index');
    // });
    // Route::controller(userController::class)->group(function () {
    //     Route::get('user', 'index');
    //     Route::post('user/create', 'create');
    // });
    // Route::controller(settingController::class)->group(function () {
    //     Route::get('mapel', 'mapel_index');
    //     Route::post('mapel_create', 'mapel_create');
    //     Route::post('mapel_edit/{id}', 'mapel_edit');
    //     Route::get('mapel_hapus/{id}', 'mapel_hapus');
    //     // kelas
    //     Route::get('kelas', 'kelas_index');
    //     Route::post('kelas_create', 'kelas_create');
    //     Route::post('kelas_edit/{id}', 'kelas_edit');
    //     Route::get('kelas_hapus/{id}', 'kelas_hapus');
    // });
    //guru
    // Route::controller(guruController::class)->group(function () {
    //     Route::get('guru', 'guru_index');
    //     Route::post('guru_create', 'guru_create');
    //     Route::post('guru_edit/{id}', 'guru_edit');
    //     Route::get('guru_hapus/{id}', 'guru_hapus');
    // });
    // Route::controller(siswaController::class)->group(function () {
    //     Route::get('siswa', 'siswa_index');
    //     Route::post('siswa_create', 'siswa_create');
    //     Route::post('siswa_edit/{id}', 'siswa_edit');
    //     Route::get('siswa_hapus/{id}', 'siswa_hapus');
    // });
    // Route::controller(AjadwalController::class)->group(function () {
    //     Route::get('jadwal', 'index');
    //     Route::get('jadwal/jam', 'jam');
    //     Route::post('jadwal/jam/create', 'add_jam');

    //     Route::get('jadwal/cek','cek');
    //     Route::post('jadwal/create','add_jadwal');
    // });
});
});
Route::get('generate-qrcode', [DguruController::class, 'generateQrCode']);