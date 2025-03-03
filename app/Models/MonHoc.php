<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'mon_hocs';
    protected $fillable = [
        'ma_mon_hoc',
        'ten_mon_hoc',
        'so_tin_chi',
        'mo_ta',
    ];

}
