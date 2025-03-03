<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiemSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diem_sos')->delete();

        DB::table('diem_sos')->insert([
            [
                'ma_diem' => 1,
                'ma_dang_ky' => 1,
                'diem_giua_ky' => 7.5,
                'diem_cuoi_ky' => 8.0,
                'diem_chuyen_can' => 9.0,
                'diem_tong_ket' => 8
            ],
            [
                'ma_diem' => 2,
                'ma_dang_ky' => 2,
                'diem_giua_ky' => 6.0,
                'diem_cuoi_ky' => 7.5,
                'diem_chuyen_can' => 8.5,
                'diem_tong_ket' => 8
            ],
            [
                'ma_diem' => 3,
                'ma_dang_ky' => 3,
                'diem_giua_ky' => 8.0,
                'diem_cuoi_ky' => 9.0,
                'diem_chuyen_can' => 10.0,
                'diem_tong_ket' => 8
            ],
            [
                'ma_diem' => 4,
                'ma_dang_ky' => 4,
                'diem_giua_ky' => 5.5,
                'diem_cuoi_ky' => 6.5,
                'diem_chuyen_can' => 7.5,
                'diem_tong_ket' => 6.5
            ],
            [
                'ma_diem' => 5,
                'ma_dang_ky' => 5,
                'diem_giua_ky' => 9.0,
                'diem_cuoi_ky' => 9.5,
                'diem_chuyen_can' => 10.0,
                'diem_tong_ket' => 9.5
            ],
            [
                'ma_diem' => 6,
                'ma_dang_ky' => 6,
                'diem_giua_ky' => 7.0,
                'diem_cuoi_ky' => 7.5,
                'diem_chuyen_can' => 8.0,
                'diem_tong_ket' => 7.5
            ],
            [
                'ma_diem' => 7,
                'ma_dang_ky' => 7,
                'diem_giua_ky' => 6.5,
                'diem_cuoi_ky' => 7.0,
                'diem_chuyen_can' => 8.5,
                'diem_tong_ket' => 7.5
            ],
            [
                'ma_diem' => 8,
                'ma_dang_ky' => 8,
                'diem_giua_ky' => 8.5,
                'diem_cuoi_ky' => 9.0,
                'diem_chuyen_can' => 9.5,
                'diem_tong_ket' => 9
            ]
        ]);
    }
}
