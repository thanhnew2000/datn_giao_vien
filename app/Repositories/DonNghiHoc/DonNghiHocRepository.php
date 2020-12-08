<?php

namespace App\Repositories\DonNghiHoc;

use App\Models\DonNghiHoc;
use App\Repositories\BaseModelRepository;
use Carbon\Carbon;

class DonNghiHocRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        DonNghiHoc $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return DonNghiHoc::class;
    }

    public function getDonNghiHocHomNay($lop_id)
    {
        $ngay_hien_tai = Carbon::now()->format('yy-m-d');
        return $this->model->whereRaw('? between ngay_bat_dau and ngay_ket_thuc', [$ngay_hien_tai])->where('lop_id',$lop_id)->get();
    }

    public function getLichSuDonNghiHoc($lop_id)
    {
        $ngay_hien_tai = Carbon::now()->format('yy-m-d');
        return $this->model->where('ngay_ket_thuc','<', $ngay_hien_tai)->where('lop_id',$lop_id)->get();
    }
}
