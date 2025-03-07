<?php

use App\Http\Controllers\GiangVienController;
use App\Http\Controllers\SinhVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// API SINH VIÊN
Route::post('/sinh-vien/login', [SinhVienController::class, 'login']);



// API GIẢNG VIÊN
Route::post('/giang-vien/login', [GiangVienController::class, 'login']);
