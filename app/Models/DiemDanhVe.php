<?php

namespace App\Models;

use App\Models\HocSinh;
use Illuminate\Database\Eloquent\Model;

class DiemDanhVe extends Model
{
    protected $table = "diem_danh_ve";
    protected $fillable = [
        'ngay_diem_danh_ve',
        'hoc_sinh_id',
        'giao_vien_id',
        'user_id',
        'chu_thich',
        'trang_thai',
        'phu_huynh',
        'nguoi_don_ho_id',
        'lop_id',
    ];
    public function student()
    {
        return $this->belongsTo(HocSinh::class, 'hoc_sinh_id', 'id');
    }

}
