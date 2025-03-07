<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DangKy extends Model
{
    protected $table = 'dang_kys';
    protected $fillable = [
        'ma_dang_ky',
        'ma_sinh_vien',
        'ma_mon_hoc',
        'ngay_dang_ky',
        'hoc_ky',
        'nam_hoc',
        'ten_mon_hoc',
        'xep_loai'
    ];
}
