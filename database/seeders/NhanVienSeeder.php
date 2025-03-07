<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();

        DB::table('nhan_viens')->insert([
            [
                'email' => 'admin@gmail.com',
                'ten_nhan_vien' => 'Admin',
                'password' => '123456',
            ],
            [
                'email' => 'nhanvien@gmail.com',
                'ten_nhan_vien' => 'Nhân viên',
                'password' => '123456',
            ],
        ]);
    }
}
