<?php

namespace App\Repositories\HoatDong;

use App\Models\HoatDong;
use App\Repositories\BaseModelRepository;


class HoatDongRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        HoatDong $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel()
    {
        return HoatDong::class;
    }

    public function getTable()
    {
        return 'hoat_dong';
    }


}
