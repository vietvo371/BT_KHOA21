<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DangKySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dang_kys')->delete();

        DB::table('dang_kys')->insert([
            [
                'ma_dang_ky' => 1,
                'ma_sinh_vien' => 1001,
                'ma_mon_hoc' => 205,
                'ngay_dang_ky' => '2023-01-10',
                'hoc_ky' => 'HK1',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Trí tuệ nhân tạo'
            ],
            [
                'ma_dang_ky' => 2,
                'ma_sinh_vien' => 1002,
                'ma_mon_hoc' => 206,
                'ngay_dang_ky' => '2023-06-15',
                'hoc_ky' => 'HK2',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Phát triển phần mềm'
            ],
            [
                'ma_dang_ky' => 3,
                'ma_sinh_vien' => 1003,
                'ma_mon_hoc' => 203,
                'ngay_dang_ky' => '2023-09-20',
                'hoc_ky' => 'HK1',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Cơ sở dữ liệu'
            ],
            [
                'ma_dang_ky' => 4,
                'ma_sinh_vien' => 1004,
                'ma_mon_hoc' => 204,
                'ngay_dang_ky' => '2024-03-12',
                'hoc_ky' => 'HK2',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Mạng máy tính'
            ],
            [
                'ma_dang_ky' => 5,
                'ma_sinh_vien' => 1005,
                'ma_mon_hoc' => 203,
                'ngay_dang_ky' => '2023-05-22',
                'hoc_ky' => 'HK1',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Cơ sở dữ liệu'
            ],
            [
                'ma_dang_ky' => 6,
                'ma_sinh_vien' => 1006,
                'ma_mon_hoc' => 206,
                'ngay_dang_ky' => '2023-06-18',
                'hoc_ky' => 'HK2',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Phát triển phần mềm'
            ],
            [
                'ma_dang_ky' => 7,
                'ma_sinh_vien' => 1007,
                'ma_mon_hoc' => 206,
                'ngay_dang_ky' => '2023-06-20',
                'hoc_ky' => 'HK2',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Phát triển phần mềm'
            ],
            [
                'ma_dang_ky' => 8,
                'ma_sinh_vien' => 1008,
                'ma_mon_hoc' => 206,
                'ngay_dang_ky' => '2023-06-22',
                'hoc_ky' => 'HK2',
                'nam_hoc' => '2023-2024',
                'ten_mon_hoc' => 'Phát triển phần mềm'
            ],
        ]);
    }
}
