<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HocSinh extends Model
{
    protected $table = "hoc_sinh";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
