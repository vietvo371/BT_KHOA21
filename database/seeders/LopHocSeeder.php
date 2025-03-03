<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LopHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lop_hocs')->delete();

        DB::table('lop_hocs')->insert([
            [
                'ma_lop' => 301,
                'ten_lop' => 'AI-K18-A',
                'ma_mon_hoc' => 205, // Trí tuệ nhân tạo
                'ma_giang_vien' => 50834, // Phạm Văn E
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2023,
                'so_luong_sv_toi_da' => 25,
            ],
            [
                'ma_lop' => 302,
                'ten_lop' => 'PTPM-K18-B',
                'ma_mon_hoc' => 206, // Phát triển phần mềm
                'ma_giang_vien' => 10245, // Nguyễn Văn A
                'hoc_ky' => 'HK2',
                'nam_hoc' => 2023,
                'so_luong_sv_toi_da' => 35,
            ],
            [
                'ma_lop' => 303,
                'ten_lop' => 'CSDL-K19-A',
                'ma_mon_hoc' => 203, // Cơ sở dữ liệu
                'ma_giang_vien' => 30591, // Trần Văn C
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2023,
                'so_luong_sv_toi_da' => 45,
            ],
            [
                'ma_lop' => 304,
                'ten_lop' => 'MMT-K19-C',
                'ma_mon_hoc' => 204, // Mạng máy tính
                'ma_giang_vien' => 40762, // Lê Thị D
                'hoc_ky' => 'HK2',
                'nam_hoc' => 2024,
                'so_luong_sv_toi_da' => 30,
            ],
            [
                'ma_lop' => 305,
                'ten_lop' => 'CSDL-K20-C',
                'ma_mon_hoc' => 203, // Cơ sở dữ liệu
                'ma_giang_vien' => 20378, // Nguyễn Thị B
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2023,
                'so_luong_sv_toi_da' => 35,
            ],
            [
                'ma_lop' => 306,
                'ten_lop' => 'LTW-K20-A',
                'ma_mon_hoc' => 201, // Lập trình Web
                'ma_giang_vien' => 10245, // Nguyễn Văn A
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2024,
                'so_luong_sv_toi_da' => 40,
            ],
            [
                'ma_lop' => 307,
                'ten_lop' => 'LTW-K19-B',
                'ma_mon_hoc' => 201, // Lập trình Web
                'ma_giang_vien' => 30591, // Trần Văn C
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2024,
                'so_luong_sv_toi_da' => 40,
            ],
            [
                'ma_lop' => 308,
                'ten_lop' => 'CTDL-K20-B',
                'ma_mon_hoc' => 202, // Cấu trúc dữ liệu và giải thuật
                'ma_giang_vien' => 20378, // Nguyễn Thị B
                'hoc_ky' => 'HK1',
                'nam_hoc' => 2024,
                'so_luong_sv_toi_da' => 35,
            ],
        ]);
    }
}
