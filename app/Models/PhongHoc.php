<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhongHoc extends Model
{
    protected $table = 'phong_hocs';
    protected $fillable = [
        'ma_phong',
        'ten_phong',
        'dia_chi',
        'loai_phong',
        'suc_chua'
    ];
}
