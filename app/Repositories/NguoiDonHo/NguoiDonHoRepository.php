<?php

namespace App\Repositories\NguoiDonHo;

use App\Models\NguoiDonHo;
use App\Repositories\BaseModelRepository;
use Carbon\Carbon;

class NguoiDonHoRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        NguoiDonHo $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return NguoiDonHo::class;
    }

    public function getInfo()
    {
        $time_now = Carbon::now()->toDateString();
        return $this->model::whereDate('date_start', '<=', $time_now)
            ->whereDate('date_end', '>=', $time_now)
            ->get();
    }

}
