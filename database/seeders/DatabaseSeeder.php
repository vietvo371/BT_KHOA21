<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KhoaSeeder::class,
            GiangVienSeeder::class,
            MonHocSeeder::class,
            PhongHocSeeder::class,
            ThoiKhoaBieuSeeder::class,
            LopHocSeeder::class,
            SinhVienSeeder::class,
            SinhVienLopHocSeeder::class,
            DangKySeeder::class,
            DiemSoSeeder::class,
        ]);
    }
}
