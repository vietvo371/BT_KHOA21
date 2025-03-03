<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemSo extends Model
{
    protected $table = 'diem_sos';
    protected $fillable = [
        'ma_diem',
        'ma_dang_ky',
        'diem_giua_ky',
        'diem_cuoi_ky',
        'diem_chuyen_can',
        'diem_tong_ket',
    ];
}
