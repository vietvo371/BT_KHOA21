<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GiangVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giang_viens')->delete();

        DB::table('giang_viens')->insert([
            [
                'ma_giang_vien'         => 10245,
                'ho_ten'                => 'Nguyễn Văn A',
                'ngay_sinh'             => '1980-01-15',
                'gioi_tinh'             => 1,
                'dia_chi'               => 'Số 123 Đường Lê Lợi, Quận 1, TP.HCM',
                'email'                 => 'nguyenvana@gmail.com',
                'so_dien_thoai'         => '0901234567',
                'hoc_vi'                => 'Tiến sĩ',
                'ma_khoa'               => 101,
                'ngay_vao_lam'          => '2010-09-01',
                'password'              => '1234567890'
            ],
            [
                'ma_giang_vien'         => 20378,
                'ho_ten'                => 'Nguyễn Thị B',
                'ngay_sinh'             => '1985-05-20',
                'gioi_tinh'             => 0,
                'dia_chi'               => 'Số 456 Đường Nguyễn Huệ, Quận 1, TP.HCM',
                'email'                 => 'nguyenthib@gmail.com',
                'so_dien_thoai'         => '0912345678',
                'hoc_vi'                => 'Thạc sĩ',
                'ma_khoa'               => 102,
                'ngay_vao_lam'          => '2012-03-15',
                'password'              => '1234567890'
                ],
            [
                'ma_giang_vien'         => 30591,
                'ho_ten'                => 'Trần Văn C',
                'ngay_sinh'             => '1975-11-10',
                'gioi_tinh'             => 1,
                'dia_chi'               => 'Số 789 Đường Lý Tự Trọng, Quận 3, TP.HCM',
                'email'                 => 'tranvanc@gmail.com',
                'so_dien_thoai'         => '0923456789',
                'hoc_vi'                => 'Giáo sư',
                'ma_khoa'               => 101,
                'ngay_vao_lam'          => '2008-01-04',
                'password'              => '1234567890'
                ],
            [
                'ma_giang_vien'         => 40762,
                'ho_ten'                => 'Lê Thị D',
                'ngay_sinh'             => '1988-07-25',
                'gioi_tinh'             => 0,
                'dia_chi'               => 'Số 101 Đường Võ Văn Tần, Quận 3, TP.HCM',
                'email'                 => 'lethid@gmail.com',
                'so_dien_thoai'         => '0934567890',
                'hoc_vi'                => 'Thạc sĩ',
                'ma_khoa'               => 103,
                'ngay_vao_lam'          => '2015-08-20',
                'password'              => '1234567890'
            ],
            [
                'ma_giang_vien'         => 50834,
                'ho_ten'                => 'Phạm Văn E',
                'ngay_sinh'             => '1982-03-30',
                'gioi_tinh'             => 1,
                'dia_chi'               => 'Số 202 Đường Nguyễn Thị Minh Khai, Quận 1, TP.HCM',
                'email'                 => 'phamvane@gmail.com',
                'so_dien_thoai'         => '0945678901',
                'hoc_vi'                => 'Phó Giáo sư',
                'ma_khoa'               => 102,
                'ngay_vao_lam'          => '2011-02-04',
                'password'              => '1234567890'
            ],
        ]);
    }
}
