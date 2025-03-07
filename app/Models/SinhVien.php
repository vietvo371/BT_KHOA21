<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'sinh_viens';
    protected $primaryKey = 'ma_sinh_vien';

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

    // Quan hệ nhiều-nhiều với LopHoc thông qua bảng trung gian sinh_vien_lop_hocs
    public function lopHocs()
    {
        return $this->belongsToMany(LopHoc::class, 'sinh_vien_lop_hocs', 'ma_sinh_vien', 'ma_lop');
    }

    // Quan hệ một-nhiều với DangKy
    public function dangKys()
    {
        return $this->hasMany(DangKy::class, 'ma_sinh_vien', 'ma_sinh_vien');
    }

    // Accessor - Lấy dữ liệu
    public function getHoTenAttribute($value)
    {
        return ucwords($value);
    }

    // Mutator - Lưu dữ liệu
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
