<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('admin/{slug}', [PartController::class, 'index']);
Route::get('part/{slug}/{part}', [PartController::class, 'edit']);
Route::patch('part/{slug}/{part}', [PartController::class, 'update']);
Route::patch('uploadimg/{slug}/{part}', [PartController::class, 'uploadimg']);
Route::delete('delete/{slug}/{part}', [PartController::class, 'destroy']);
Route::post('store', [PartController::class, 'store']);