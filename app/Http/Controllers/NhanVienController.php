<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function login(Request $request)
    {
        $nhanVien = NhanVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (!$nhanVien) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không tồn tại'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $nhanVien->createToken('token-nhan-vien')->plainTextToken
            ]);
        }
    }
}
