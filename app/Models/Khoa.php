<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table = 'khoas';
    protected $fillable = [
        'ma_khoa',
        'ten_khoa',
        'truong_khoa',
        'ngay_thanh_lap',
        'dia_chi',
        'so_dien_thoai',
        'email'
    ];
}
