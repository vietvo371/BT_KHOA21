<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khoas')->delete();

        DB::table('khoas')->insert([
            [
                'ma_khoa'           => 101,
                'ten_khoa'          => 'Khoa Công nghệ thông tin',
                'truong_khoa'       => 'TS. Nguyễn Văn A',
                'ngay_thanh_lap'    => '2000-05-15',
                'dia_chi'           => 'Tòa nhà A1, Khu A',
                'so_dien_thoai'     => '0901234567',
                'email'             => 'cntt@example.edu.vn',
            ],
            [
                'ma_khoa'           => 102,
                'ten_khoa'          => 'Khoa Điện tử viễn thông',
                'truong_khoa'       => 'PGS.TS. Trần Thị B',
                'ngay_thanh_lap'    => '2001-08-20',
                'dia_chi'           => 'Tòa nhà B2, Khu B',
                'so_dien_thoai'     => '0912345678',
                'email'             => 'dtvt@example.edu.vn',
            ],
            [
                'ma_khoa'           => 103,
                'ten_khoa'          => 'Khoa Kinh tế',
                'truong_khoa'       => 'GS.TS. Lê Văn C',
                'ngay_thanh_lap'    => '1998-03-10',
                'dia_chi'           => 'Tòa nhà C3, Khu C',
                'so_dien_thoai'     => '0923456789',
                'email'             => 'kinhte@example.edu.vn',
            ],
            [
                'ma_khoa'           => 104,
                'ten_khoa'          => 'Khoa Ngoại ngữ',
                'truong_khoa'       => 'TS. Phạm Thị D',
                'ngay_thanh_lap'    => '2002-11-05',
                'dia_chi'           => 'Tòa nhà D4, Khu D',
                'so_dien_thoai'     => '0934567890',
                'email'             => 'ngoaingu@example.edu.vn',
            ],
            [
                'ma_khoa'           => 105,
                'ten_khoa'          => 'Khoa Cơ khí',
                'truong_khoa'       => 'PGS.TS. Hoàng Văn E',
                'ngay_thanh_lap'    => '1995-07-25',
                'dia_chi'           => 'Tòa nhà E5, Khu E',
                'so_dien_thoai'     => '0945678901',
                'email'             => 'cokhi@example.edu.vn',
            ],
        ]);
    }
}
