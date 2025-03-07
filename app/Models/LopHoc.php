<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'lop_hocs';
    protected $primaryKey = 'ma_lop';

    protected $fillable = [
        'ma_lop',
        'ten_lop',
        'ma_mon_hoc'
    ];

    // Quan hệ nhiều-nhiều với SinhVien
    public function sinhViens()
    {
        return $this->belongsToMany(SinhVien::class, 'sinh_vien_lop_hocs', 'ma_lop', 'ma_sinh_vien');
    }

    // Quan hệ một-nhiều với ThoiKhoaBieu
    public function thoiKhoaBieus()
    {
        return $this->hasMany(ThoiKhoaBieu::class, 'ma_lop', 'ma_lop');
    }

    // Quan hệ belongs to với MonHoc
    public function monHoc()
    {
        return $this->belongsTo(MonHoc::class, 'ma_mon_hoc', 'ma_mon_hoc');
    }
}
