<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = "lop_hoc";

    public function Student(){
        return $this->hasMany('App\Models\HocSinh', 'lop_id', 'id');
    }

    public function DiemDanh()
    {
        return $this->hasMany('App\Models\DiemDanhDen', 'lop_id', 'id');
    }
}
