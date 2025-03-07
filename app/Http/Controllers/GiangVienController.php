<?php

namespace App\Http\Controllers;

use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    public function login(Request $request)
    {
        $giangVien = GiangVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if (!$giangVien) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không tồn tại'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $giangVien->createToken('token-giang-vien')->plainTextToken
            ]);
        }
    }
}
