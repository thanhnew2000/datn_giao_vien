<?php


namespace App\Repositories\DiemDanhDen;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use App\Models\DiemDanhDen;
use App\Models\HocSinh;
use Carbon\Carbon;


class DiemDanhDenRepository extends BaseRepository
{
    protected $model;
    public function __construct(
        DiemDanhDen $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getTable(){
		return 'diem_danh_den';
	}
}