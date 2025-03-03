<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'lop_hocs';
    protected $fillable = [
        'ma_lop',
        'ten_lop',
        'ma_mon_hoc',
        'ma_giang_vien',
        'hoc_ky',
        'nam_hoc',
        'so_luong_sv_toi_da'
    ];
}
