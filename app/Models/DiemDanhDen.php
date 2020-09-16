<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemDanhDen extends Model
{
    protected $table = "diem_danh_den";
    protected $fillable = [
        'ngay_diem_danh_den',
        'hoc_sinh_id',
        'giao_vien_id',
        'chu_thich',
        'trang_thai',
        'type'
    ];
}
