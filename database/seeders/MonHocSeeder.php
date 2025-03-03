<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonHocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mon_hocs')->delete();

        DB::table('mon_hocs')->insert([
            [
                'ma_mon_hoc' => 201,
                'ten_mon_hoc' => 'Lập trình Web',
                'so_tin_chi' => 3,
                'mo_ta' => 'Khóa học này cung cấp kiến thức cơ bản về phát triển ứng dụng web, bao gồm HTML, CSS, JavaScript và PHP.'
            ],
            [
                'ma_mon_hoc' => 202,
                'ten_mon_hoc' => 'Cấu trúc dữ liệu và giải thuật',
                'so_tin_chi' => 4,
                'mo_ta' => 'Khóa học giúp sinh viên hiểu về các cấu trúc dữ liệu như danh sách liên kết, cây, đồ thị và các thuật toán tìm kiếm, sắp xếp.'
            ],
            [
                'ma_mon_hoc' => 203,
                'ten_mon_hoc' => 'Cơ sở dữ liệu',
                'so_tin_chi' => 3,
                'mo_ta' => 'Khóa học cung cấp kiến thức về thiết kế, truy vấn và quản lý cơ sở dữ liệu với SQL và hệ quản trị cơ sở dữ liệu như MySQL, PostgreSQL.'
            ],
            [
                'ma_mon_hoc' => 204,
                'ten_mon_hoc' => 'Mạng máy tính',
                'so_tin_chi' => 3,
                'mo_ta' => 'Khóa học giới thiệu các khái niệm về mạng máy tính, giao thức truyền thông, TCP/IP, bảo mật mạng và quản trị hệ thống.'
            ],
            [
                'ma_mon_hoc' => 205,
                'ten_mon_hoc' => 'Trí tuệ nhân tạo',
                'so_tin_chi' => 4,
                'mo_ta' => 'Khóa học cung cấp kiến thức về AI, machine learning, các thuật toán học có giám sát và không giám sát, cùng với ứng dụng thực tế.'
            ],
            [
                'ma_mon_hoc' => 206,
                'ten_mon_hoc' => 'Phát triển phần mềm',
                'so_tin_chi' => 4,
                'mo_ta' => 'Khóa học tập trung vào quy trình phát triển phần mềm, Agile, Scrum, và các công cụ hỗ trợ như Git, Jira.'
            ]
        ]);
    }
}
