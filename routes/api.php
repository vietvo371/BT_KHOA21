<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SinhVienController;
use App\Http\Controllers\API\MonHocController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API không cần xác thực
Route::post('/sinhvien/login', [SinhVienController::class, 'login']);

// API cần xác thực
// Lấy thông tin thời khoá biểu
Route::get('/thoikhoabieu', [SinhVienController::class, 'getThoiKhoaBieu'])->middleware('sinhvien');

// Lấy điểm số môn học
Route::post('/diem', [MonHocController::class, 'getDiem'])->middleware('sinhvien');

// Đăng ký lớp học
Route::post('/dangky-lophoc', [MonHocController::class, 'dangKyMonHoc'])->middleware('sinhvien');

// Đăng ký tín chỉ
Route::post('/dangky-tinchi', [MonHocController::class, 'dangKyTinChi'])->middleware('sinhvien');
Route::post('/profile', [SinhVienController::class, 'getProfile'])->middleware('sinhvien');
