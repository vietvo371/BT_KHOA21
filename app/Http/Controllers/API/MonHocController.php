<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MonHoc;
use App\Models\DiemSo;
use App\Models\DangKy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MonHocController extends Controller
{
    public function getDiem(Request $request)
    {
        $sinhVien = Auth::guard('sanctum')->user();

        $diem = DB::table('diem_sos')
            ->join('dang_kys', 'dang_kys.ma_dang_ky', '=', 'diem_sos.ma_dang_ky')
            ->join('sinh_viens', 'sinh_viens.ma_sinh_vien', '=', 'dang_kys.ma_sinh_vien')
            ->join('mon_hocs', 'mon_hocs.ma_mon_hoc', '=', 'dang_kys.ma_mon_hoc')
            ->where('sinh_viens.ma_sinh_vien', $sinhVien->ma_sinh_vien)
            ->where('dang_kys.ma_mon_hoc', $request->ma_mon_hoc)
            ->select([
                'mon_hocs.ten_mon_hoc',
                'diem_sos.diem_giua_ky',
                'diem_sos.diem_cuoi_ky',
                'diem_sos.diem_tong_ket'
            ])
            ->get();

        return response()->json([
            'status' => true,
            'data' => $diem
        ]);
    }

    public function dangKyMonHoc(Request $request)
    {
        $sinhVien = Auth::guard('sanctum')->user();
        $maMonHoc = $request->ma_mon_hoc;

        // Kiểm tra môn học đã đăng ký chưa
        $daHoc = DB::table('sinh_vien_lop_hocs')
            ->join('lop_hocs', 'lop_hocs.ma_lop', '=', 'sinh_vien_lop_hocs.ma_lop')
            ->where('sinh_vien_lop_hocs.ma_sinh_vien', $sinhVien->ma_sinh_vien)
            ->where('lop_hocs.ma_mon_hoc', $maMonHoc)
            ->first();

        if ($daHoc) {
            return response()->json([
                'status' => false,
                'message' => 'Môn học đã được đăng ký'
            ], 400);
        }
        $monHoc = MonHoc::where('ma_mon_hoc', $maMonHoc)->first();
        if (!$monHoc) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy môn học'
            ], 404);
        }

        $dangKy = DangKy::create([
            'ma_dang_ky' => random_int(10000000, 99999999),
            'ma_sinh_vien' => $sinhVien->ma_sinh_vien,
            'ma_mon_hoc' => $maMonHoc,
            'ngay_dang_ky' => now(),
            'hoc_ky' => $request->hoc_ky,
            'nam_hoc' => $request->nam_hoc,
            'ten_mon_hoc' => $monHoc->ten_mon_hoc,
        ]);

        // Thêm vào bảng đăng ký
        return response()->json([
            'status' => true,
            'message' => 'Đăng ký thành công'
        ]);
    }

    public function dangKyTinChi(Request $request)
    {
        $sinhVien = Auth::guard('sanctum')->user();
        $maMonHoc = $request->ma_mon_hoc;

        // Kiểm tra môn học đã học chưa
        $daHoc = DB::table('sinh_vien_lop_hocs')
            ->join('lop_hocs', 'lop_hocs.ma_lop', '=', 'sinh_vien_lop_hocs.ma_lop')
            ->where('sinh_vien_lop_hocs.ma_sinh_vien', $sinhVien->ma_sinh_vien)
            ->where('lop_hocs.ma_mon_hoc', $maMonHoc)
            ->exists();

        if ($daHoc) {
            return response()->json([
                'status' => false,
                'message' => 'Môn học đã được đăng ký trước đó'
            ], 400);
        }

        // Lấy thông tin môn học
        $monHoc = DB::table('mon_hocs')
            ->where('ma_mon_hoc', $maMonHoc)
            ->first();

        if (!$monHoc) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy môn học'
            ], 404);
        }

        // Thêm vào bảng đăng ký
        $dangKy = DangKy::create([
            'ma_dang_ky' => random_int(10000000, 99999999),
            'ma_sinh_vien' => $sinhVien->ma_sinh_vien,
            'ma_mon_hoc' => $maMonHoc,
            'ngay_dang_ky' => now(),
            'hoc_ky' => "Học kỳ 1",
            'nam_hoc' => "2024-2025",
            'ten_mon_hoc' => $monHoc->ten_mon_hoc,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Đăng ký tín chỉ thành công',
            'mon_hoc' => $monHoc
        ]);
    }
}
