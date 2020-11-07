<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LopHoc;
class GiaoVien extends Model
{
    protected $table = "giao_vien";
    protected $fillable = [
        'id',
        'user_id',
        'lop_id',
        'ten',
        'gioi_tinh',
        'dien_thoai',
        'ngay_sinh',
        'trinh_do',
        'chuyen_mon',
        'noi_dao_tao',
        'nam_tot_nghiep',
        'dia_chi',
        'type'
    ];

    public function Lop()
    {
        return $this->belongsTo(LopHoc::class,'lop_id','id');
    }
}


