<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChiTietDonDanThuoc;
use App\Models\PhanHoiDonThuoc;
use App\Models\HocSinh;
use App\Models\GiaoVien;

use Carbon\Carbon;
class DonDanThuoc extends Model
{
    protected $table = 'don_dan_thuoc';
    protected $fillable = [
        'id',
        'hoc_sinh_id',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'noi_dung',
        'trang_thai',
    ];

    public function ChiTietDonDanThuoc()
    {
        return $this->hasMany(ChiTietDonDanThuoc::class,'don_dan_thuoc_id','id');
    }

    public function PhanHoiDonThuoc()
    {
        return $this->hasMany(PhanHoiDonThuoc::class,'don_dan_thuoc_id','id');
    }

    public function HocSinh()
    {
        return $this->hasOne(HocSinh::class,'id','hoc_sinh_id');
    }

    public function GiaoVien()
    {
        return $this->hasOne(GiaoVien::class,'id','hoc_sinh_id');
    }

    // public function getBinhLuanType()
    // {
    //     $type = $this->type;
    //     if($type == 1){
    //         return $this->hasOne(HocSinh::class,'id','nguoi_phan_hoi_id');
    //     }else{
    //         return $this->hasOne(GiaoVien::class,'id','nguoi_phan_hoi_id');
    //     }
       
    // }


}
