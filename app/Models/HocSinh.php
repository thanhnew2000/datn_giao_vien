<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HocSinh extends Model
{
    protected $table = "hoc_sinh";

    protected $fillable = [
        'lop_id',
        'ten',
        'ma_hoc_sinh',
        'gioi_tinh',
        'ten_thuong_goi',
        'avatar',
        'ngay_sinh',
        'tuoi',
        'dan_toc',
        'tuoi',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
