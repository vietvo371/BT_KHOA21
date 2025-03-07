<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class SinhVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'sinh_viens';
    protected $fillable = [
        'ma_sinh_vien',
        'ho_ten',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',
        'so_dien_thoai',
        'email',
        'password',

    ];
}
