<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiemDanhVe extends Model
{
    protected $table = "diem_danh_ve";
    protected $fillable = [
        'ngay_diem_danh_ve',
        'hoc_sinh_id',
        'giao_vien',
        'ghi_chu',
        'trang_thai',
        'phu_huynh',
        'nguoi_don_ho_id'
    ];
}
