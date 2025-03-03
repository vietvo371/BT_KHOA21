<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    protected $table = 'giang_viens';
    protected $fillable = [
        'ma_giang_vien',
        'ho_ten',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',
        'email',
        'so_dien_thoai',
        'hoc_vi',
        'ma_khoa',
        'ngay_vao_lam'
    ];
}
