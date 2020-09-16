<?php


namespace App\Repositories\HocSinh;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseModelRepository;
use App\Models\HocSinh;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class HocSinhRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        HocSinh $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel(){
		return HocSinh::class;
    }
    public function getHocSinhDiemDanhDenSang()
    {
        $id = Auth::id();
        $giao_vien_user = DB::table('giao_vien')
            ->where('giao_vien.user_id', $id)->first();
   
        $students = $this->model::where('lop_id',$giao_vien_user->lop_id)->get();
        return $students;
    }
}