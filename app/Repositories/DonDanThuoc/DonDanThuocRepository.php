<?php

namespace App\Repositories\DonDanThuoc;

use App\Models\DonDanThuoc;
use App\Repositories\BaseModelRepository;
use Carbon\Carbon;

class DonDanThuocRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        DonDanThuoc $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return DonDanThuoc::class;
    }

    public function getDonDanThuocHomNay($lop_id)
    {
        $ngay_hien_tai = Carbon::now()->format('yy-m-d');
        return $this->model->whereRaw('? between ngay_bat_dau and ngay_ket_thuc', [$ngay_hien_tai])->where('lop_id',$lop_id)->get();
    }

    public function getLichSuDonDanThuoc($lop_id)
    {
        $ngay_hien_tai = Carbon::now()->format('yy-m-d');
        return $this->model->where('ngay_ket_thuc','<', $ngay_hien_tai)->where('lop_id',$lop_id)->get();
    }
}
