<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phong_hocs')->delete();

        DB::table('phong_hocs')->insert([
            [
                'ma_phong' => 301,
                'ten_phong' => 'Phòng 301',
                'dia_chi' => 'Tòa nhà C3, Khu C',
                'loai_phong' => 2, // phòng lab
                'suc_chua' => 25,
            ],
            [
                'ma_phong' => 302,
                'ten_phong' => 'Phòng 302',
                'dia_chi' => 'Tòa nhà C3, Khu C',
                'loai_phong' => 2, // phòng lab
                'suc_chua' => 25,
            ],
            [
                'ma_phong' => 303,
                'ten_phong' => 'Phòng 303',
                'dia_chi' => 'Tòa nhà C3, Khu C',
                'loai_phong' => 0, // phòng học
                'suc_chua' => 40,
            ],
            [
                'ma_phong' => 304,
                'ten_phong' => 'Phòng 304',
                'dia_chi' => 'Tòa nhà C3, Khu C',
                'loai_phong' => 1, // phòng thực hành
                'suc_chua' => 35,
            ],
            [
                'ma_phong' => 305,
                'ten_phong' => 'Phòng 305',
                'dia_chi' => 'Tòa nhà C3, Khu C',
                'loai_phong' => 1, // phòng thực hành
                'suc_chua' => 30,
            ],
            [
                'ma_phong' => 401,
                'ten_phong' => 'Phòng 401',
                'dia_chi' => 'Tòa nhà D4, Khu D',
                'loai_phong' => 3, // hội trường
                'suc_chua' => 150,
            ],
            [
                'ma_phong' => 402,
                'ten_phong' => 'Phòng 402',
                'dia_chi' => 'Tòa nhà D4, Khu D',
                'loai_phong' => 0, // phòng học
                'suc_chua' => 50,
            ],
            [
                'ma_phong' => 501,
                'ten_phong' => 'Phòng 501',
                'dia_chi' => 'Tòa nhà E5, Khu E',
                'loai_phong' => 4, // khác
                'suc_chua' => 20,
            ],
            [
                'ma_phong' => 502,
                'ten_phong' => 'Phòng 502',
                'dia_chi' => 'Tòa nhà E5, Khu E',
                'loai_phong' => 0, // phòng học
                'suc_chua' => 40,
            ],
        ]);
    }
}
