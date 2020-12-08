<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HocSinh;
use App\Models\GiaoVien;

use Carbon\Carbon;
class DonNghiHoc extends Model
{
    protected $table = 'don_nghi_hoc';
    protected $fillable = [
        'id',
        'lop_id',
        'hoc_sinh_id',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'noi_dung',
        'trang_thai',
    ];

    public function HocSinh()
    {
        return $this->hasOne(HocSinh::class,'id','hoc_sinh_id');
    }

    public function GiaoVien()
    {
        return $this->hasOne(GiaoVien::class,'id','hoc_sinh_id');
    }



}
