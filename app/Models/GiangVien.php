<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class GiangVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

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
        'ngay_vao_lam',
        'password'
    ];
}
