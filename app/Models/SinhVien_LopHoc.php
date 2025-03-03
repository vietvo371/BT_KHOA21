<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SinhVien_LopHoc extends Model
{
    protected $table = 'sinh_vien_lop_hocs';
    protected $fillable = [
        'ma_dang_ky',
        'ma_sinh_vien',
        'ma_lop',
        'ngay_dang_ky',
        'trang_thai'
    ];
}
