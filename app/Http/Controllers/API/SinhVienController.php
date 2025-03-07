<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SinhVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SinhVienController extends Controller
{


    public function getTest()
    {
        // Cách 1: Lấy một sinh viên cụ thể
        $sinhVien = SinhVien::first();
        $test = $sinhVien->lopHocs;

        // Hoặc Cách 2: Lấy tất cả sinh viên với relationship
        // $sinhVien = SinhVien::with('lopHocs')->get();

        return response()->json([
            'status' => true,
            'data' => $test  // với cách 1
            // 'data' => $sinhVien  // với cách 2
        ]);
    }
    public function getProfile()
    {
        $sinhVien = Auth::guard('sanctum')->user();
        return response()->json([
            'status' => true,
            'data' => $sinhVien
        ]);
    }
    public function login(Request $request)
    {
        $check = SinhVien::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($check) {
            return response()->json([
                'status' => 1,
                'message' => "Đăng nhập thành công!",
                'token'     => $check->createToken('token_sinh_vien')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Tài khoản hoặc mật khẩu không đúng.",
            ]);
        }
    }
    public function getThoiKhoaBieu()
    {
        $sinhVien = Auth::guard('sanctum')->user();
        $result = DB::table('thoi_khoa_bieus')
            ->join('lop_hocs', 'lop_hocs.ma_lop', '=', 'thoi_khoa_bieus.ma_lop')
            ->join('sinh_vien_lop_hocs', 'sinh_vien_lop_hocs.ma_lop', '=', 'lop_hocs.ma_lop')
            ->join('sinh_viens', 'sinh_viens.ma_sinh_vien', '=', 'sinh_vien_lop_hocs.ma_sinh_vien')
            ->where('sinh_vien_lop_hocs.ma_sinh_vien', $sinhVien->ma_sinh_vien)
            ->select([
                'lop_hocs.ten_lop',
                'sinh_vien_lop_hocs.ma_sinh_vien',
                'thoi_khoa_bieus.thu_trong_tuan',
                'sinh_viens.ho_ten'

            ])
            ->get();

        $result = $result->map(function ($item) {
            // Sử dụng Carbon::setLocale('vi') để hiển thị tiếng Việt
            Carbon::setLocale('vi');

            // Tạo ngày với thứ tương ứng (trừ 1 vì Carbon bắt đầu từ 0)
            $thu = Carbon::now()->startOfWeek()->addDays($item->thu_trong_tuan - 1)->dayName;

            return [
                'ten_lop' => $item->ten_lop,
                'ma_sinh_vien' => $item->ma_sinh_vien,
                'ho_ten' => $item->ho_ten,
                'thu_trong_tuan' => ucfirst($thu) // Viết hoa chữ cái đầu
            ];
        });

        return response()->json([
            'status' => true,
            'data' => $result
        ]);
    }
}
