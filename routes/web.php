<?php

use App\Http\Controllers\AdminutamaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('admin/utama', [AdminutamaController::class, 'index']);
Route::post('admin/users/store', [AdminutamaController::class, 'storeuser']);
Route::delete('admin/users/{id}/destroy', [AdminutamaController::class, 'destroyuser']);
Route::get('admin/users/{id}', [AdminutamaController::class, 'edituser']);
Route::patch('admin/users/{id}/update', [AdminutamaController::class, 'updateuser']);

Route::post('admin/prodi/store', [AdminutamaController::class, 'storeprodi']);
Route::delete('admin/prodi/{id}/destroy', [AdminutamaController::class, 'destroyprodi']);
Route::get('admin/prodi/{id}', [AdminutamaController::class, 'editprodi']);
Route::patch('admin/prodi/{id}/update', [AdminutamaController::class, 'updateprodi']);

Route::get('admin/{slug}', [PartController::class, 'index']);
Route::get('part/{slug}/{part}', [PartController::class, 'edit']);
Route::patch('part/{slug}/{part}', [PartController::class, 'update']);
Route::patch('uploadimg/{slug}/{part}', [PartController::class, 'uploadimg']);
Route::delete('delete/{slug}/{part}', [PartController::class, 'destroy']);
Route::post('store', [PartController::class, 'store']);
