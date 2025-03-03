<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThoiKhoaBieu extends Model
{
    protected $table = 'thoi_khoa_bieus';
    protected $fillable = [
        'ma_thoi_khoa_bieu',
        'ma_lop',
        'thu_trong_tuan',
        'tiet_bat_dau',
        'so_tiet',
        'ma_phong',
        'ghi_chu'
    ];
}
