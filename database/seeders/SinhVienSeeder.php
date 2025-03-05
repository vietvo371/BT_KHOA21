<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sinh_viens')->delete();

        DB::table('sinh_viens')->insert([
            [
                'ma_sinh_vien' => 1001,
                'ho_ten' => 'Nguyen Van A',
                'ngay_sinh' => '2000-05-15',
                'gioi_tinh' => 0, // Nam
                'dia_chi' => '123 Đường ABC, Hà Nội',
                'email' => 'nguyenvana@example.com',
                'so_dien_thoai' => '0123456789',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1002,
                'ho_ten' => 'Tran Thi B',
                'ngay_sinh' => '1999-08-22',
                'gioi_tinh' => 1, // Nữ
                'dia_chi' => '456 Đường XYZ, TP.HCM',
                'email' => 'tranthib@example.com',
                'so_dien_thoai' => '0987654321',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1003,
                'ho_ten' => 'Le Thanh C',
                'ngay_sinh' => '2001-03-10',
                'gioi_tinh' => 2, // Khác
                'dia_chi' => '789 Đường MNP, Đà Nẵng',
                'email' => 'lethanhc@example.com',
                'so_dien_thoai' => '0369852147',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1004,
                'ho_ten' => 'Pham Van D',
                'ngay_sinh' => '2002-07-19',
                'gioi_tinh' => 0, // Nam
                'dia_chi' => '101 Đường QRS, Hải Phòng',
                'email' => 'phamvand@example.com',
                'so_dien_thoai' => '0912345678',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1005,
                'ho_ten' => 'Hoang Thi E',
                'ngay_sinh' => '1998-12-05',
                'gioi_tinh' => 1, // Nữ
                'dia_chi' => '202 Đường UVW, Cần Thơ',
                'email' => 'hoangthie@example.com',
                'so_dien_thoai' => '0923456789',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1006,
                'ho_ten' => 'Do Minh F',
                'ngay_sinh' => '2000-09-30',
                'gioi_tinh' => 0, // Nam
                'dia_chi' => '303 Đường GHI, Nha Trang',
                'email' => 'dominhf@example.com',
                'so_dien_thoai' => '0934567890',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1007,
                'ho_ten' => 'Nguyen Bao G',
                'ngay_sinh' => '1997-04-25',
                'gioi_tinh' => 2, // Khác
                'dia_chi' => '404 Đường JKL, Huế',
                'email' => 'nguyenbaog@example.com',
                'so_dien_thoai' => '0945678901',
                'password' => '123456'
            ],
            [
                'ma_sinh_vien' => 1008,
                'ho_ten' => 'Tran Minh H',
                'ngay_sinh' => '2003-06-17',
                'gioi_tinh' => 0, // Nam
                'dia_chi' => '505 Đường MNO, Bình Dương',
                'email' => 'tranminhh@example.com',
                'so_dien_thoai' => '0956789012',
                'password' => '123456'
            ]
        ]);
    }
}
