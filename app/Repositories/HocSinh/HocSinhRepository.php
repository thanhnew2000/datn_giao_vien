<?php

namespace App\Repositories\HocSinh;

use App\Models\HocSinh;
use App\Repositories\BaseModelRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HocSinhRepository extends BaseModelRepository
{
    protected $model;

    public function __construct(
        HocSinh $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return HocSinh::class;
    }

    public function getHocSinhInClass()
    {
        $id = Auth::id();

        $giao_vien_user = DB::table('giao_vien')
            ->select('lop_id')
            ->where('giao_vien.user_id', $id)->first();
        $students = $this->model::where('lop_id', $giao_vien_user->lop_id)->get();
        return $students;
    }
}
