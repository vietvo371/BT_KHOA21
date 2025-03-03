<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThoiKhoaBieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thoi_khoa_bieus')->delete();

        DB::table('thoi_khoa_bieus')->insert([
            [
                'ma_thoi_khoa_bieu' => 1,
                'ma_lop' => 301, // AI-K18-A
                'thu_trong_tuan' => 3, // Thứ 4
                'tiet_bat_dau' => 1,
                'so_tiet' => 3,
                'ma_phong' => 301,
                'ghi_chu' => 'Lớp học trí tuệ nhân tạo buổi sáng',
            ],
            [
                'ma_thoi_khoa_bieu' => 2,
                'ma_lop' => 301, // AI-K18-A
                'thu_trong_tuan' => 5, // Thứ 6
                'tiet_bat_dau' => 6,
                'so_tiet' => 3,
                'ma_phong' => 301,
                'ghi_chu' => 'Lớp học trí tuệ nhân tạo - thực hành',
            ],
            [
                'ma_thoi_khoa_bieu' => 3,
                'ma_lop' => 302, // PTPM-K18-B
                'thu_trong_tuan' => 4, // Thứ 5
                'tiet_bat_dau' => 1,
                'so_tiet' => 3,
                'ma_phong' => 302,
                'ghi_chu' => 'Lớp học phát triển phần mềm buổi sáng',
            ],
            [
                'ma_thoi_khoa_bieu' => 4,
                'ma_lop' => 302, // PTPM-K18-B
                'thu_trong_tuan' => 0, // Chủ nhật
                'tiet_bat_dau' => 1,
                'so_tiet' => 4,
                'ma_phong' => 302,
                'ghi_chu' => 'Lớp học phát triển phần mềm - thực hành',
            ],
            [
                'ma_thoi_khoa_bieu' => 5,
                'ma_lop' => 301, // AI-K18-A
                'thu_trong_tuan' => 0, // Chủ nhật
                'tiet_bat_dau' => 6,
                'so_tiet' => 4,
                'ma_phong' => 301,
                'ghi_chu' => 'Workshop về ứng dụng AI trong thực tế',
            ],
            [
                'ma_thoi_khoa_bieu' => 6,
                'ma_lop' => 303, // CSDL-K19-A
                'thu_trong_tuan' => 0, // Chủ nhật
                'tiet_bat_dau' => 1,
                'so_tiet' => 3,
                'ma_phong' => 301,
                'ghi_chu' => 'Buổi học bổ sung về SQL nâng cao',
            ],
            [
                'ma_thoi_khoa_bieu' => 7,
                'ma_lop' => 302, // PTPM-K18-B
                'thu_trong_tuan' => 6, // Thứ 7
                'tiet_bat_dau' => 6,
                'so_tiet' => 2,
                'ma_phong' => 302,
                'ghi_chu' => 'Buổi thảo luận về dự án cuối kỳ',
            ],
            [
                'ma_thoi_khoa_bieu' => 8,
                'ma_lop' => 305, // CSDL-K20-C
                'thu_trong_tuan' => 3, // Thứ 4
                'tiet_bat_dau' => 6,
                'so_tiet' => 3,
                'ma_phong' => 303,
                'ghi_chu' => 'Lớp học cơ sở dữ liệu buổi chiều',
            ],
            [
                'ma_thoi_khoa_bieu' => 9,
                'ma_lop' => 304, // MMT-K19-C
                'thu_trong_tuan' => 2,
                'tiet_bat_dau' => 3,
                'so_tiet' => 3,
                'ma_phong' => 304,
                'ghi_chu' => 'Buổi học bổ sung về mạng máy tính',
            ],
            [
                'ma_thoi_khoa_bieu' => 10,
                'ma_lop' => 306, // LTW-K20-A
                'thu_trong_tuan' => 5,
                'tiet_bat_dau' => 2,
                'so_tiet' => 4,
                'ma_phong' => 305,
                'ghi_chu' => 'Buổi thực hành về phát triển web',
            ],
        ]);
    }
}
