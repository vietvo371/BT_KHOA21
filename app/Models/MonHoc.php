<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'mon_hocs';
    protected $primaryKey = 'ma_mon_hoc';

    protected $fillable = [
        'ma_mon_hoc',
        'ten_mon_hoc',
        'so_tin_chi',
        'mo_ta',
    ];

    // Quan hệ một-nhiều với LopHoc
    public function lopHocs()
    {
        return $this->hasMany(LopHoc::class, 'ma_mon_hoc', 'ma_mon_hoc');
    }

    // Quan hệ một-nhiều với DangKy
    public function dangKys()
    {
        return $this->hasMany(DangKy::class, 'ma_mon_hoc', 'ma_mon_hoc');
    }

    // Local scope
    public function scopeTinChi($query, $soTinChi)
    {
        return $query->where('so_tin_chi', $soTinChi);
    }
}
