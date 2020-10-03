<?php

namespace App\Repositories\GiaoVien;

use App\Models\GiaoVien;
use App\Repositories\BaseModelRepository;
use Illuminate\Support\Facades\Auth;

class GiaoVienRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        GiaoVien $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return GiaoVien::class;
    }

    public function teacherInClass()
    {
        return $this->model::select('lop_id')
            ->whereUser_id(Auth::id())->first();
    }

    public function getTable()
    {
        return 'giao_vien';
    }

    public function getGVTheoIdUser($id)
    {
        $query = $this->table->where('user_id', $id)->first();
        return $query;
    }

}
