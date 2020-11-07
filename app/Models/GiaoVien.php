<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LopHoc;
class GiaoVien extends Model
{
    protected $table = "giao_vien";

    public function Lop()
    {
        return $this->belongsTo(LopHoc::class,'lop_id','id');
    }
}


