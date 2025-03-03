<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinhVienLopHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sinh_vien_lop_hocs')->delete();

        DB::table('sinh_vien_lop_hocs')->insert([
            [
                'ma_dang_ky' => 1,
                'ma_sinh_vien' => 1001,
                'ma_lop' => 301,
                'ngay_dang_ky' => '2023-01-15',
                'trang_thai' => 0,
            ],
            [
                'ma_dang_ky' => 2,
                'ma_sinh_vien' => 1002,
                'ma_lop' => 302,
                'ngay_dang_ky' => '2023-06-10',
                'trang_thai' => 1,
            ],
            [
                'ma_dang_ky' => 3,
                'ma_sinh_vien' => 1003,
                'ma_lop' => 303,
                'ngay_dang_ky' => '2023-09-05',
                'trang_thai' => 2,
            ],
            [
                'ma_dang_ky' => 4,
                'ma_sinh_vien' => 1004,
                'ma_lop' => 304,
                'ngay_dang_ky' => '2024-03-20',
                'trang_thai' => 0,
            ],
            [
                'ma_dang_ky' => 5,
                'ma_sinh_vien' => 1005,
                'ma_lop' => 305,
                'ngay_dang_ky' => '2023-05-12',
                'trang_thai' => 1,
            ],
            [
                'ma_dang_ky' => 6,
                'ma_sinh_vien' => 1006,
                'ma_lop' => 302,
                'ngay_dang_ky' => '2023-06-18',
                'trang_thai' => 0,
            ],
            [
                'ma_dang_ky' => 7,
                'ma_sinh_vien' => 1007,
                'ma_lop' => 302,
                'ngay_dang_ky' => '2023-06-20',
                'trang_thai' => 1,
            ],
            [
                'ma_dang_ky' => 8,
                'ma_sinh_vien' => 1008,
                'ma_lop' => 302,
                'ngay_dang_ky' => '2023-06-22',
                'trang_thai' => 0,
            ],
        ]);
    }
}
