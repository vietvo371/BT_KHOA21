<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function login(Request $request)
    {
        $sinhVien = SinhVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (!$sinhVien) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không tồn tại'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $sinhVien->createToken('token-sinh-vien')->plainTextToken
            ]);
        }
    }
}
