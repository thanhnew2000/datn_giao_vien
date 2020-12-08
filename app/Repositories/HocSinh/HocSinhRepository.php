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

    public function getTable()
    {
        return 'hoc_sinh';
    }

    public function getHocSinhInClassTheoDot($dot, $params)
    {
        $id = Auth::id();
        $giao_vien_user = DB::table('giao_vien')
            ->select('lop_id')
            ->where('giao_vien.user_id', $id)->first();
        if(isset($params['dot_id']) && $params['dot_id'] != null){
                $dot = $params['dot_id'];
        }
        // dd($dot);
        $students = DB::table('hoc_sinh')
        ->join('suc_khoe', 'suc_khoe.hoc_sinh_id' , '=', 'hoc_sinh.id')
        ->select('hoc_sinh.*', 'suc_khoe.chieu_cao', 'suc_khoe.can_nang')
        ->where('hoc_sinh.lop_id', $giao_vien_user->lop_id)
        ->where('suc_khoe.dot_id', $dot);
        if(isset($params['ma_hoc_sinh']) && $params['ma_hoc_sinh'] != null){
            foreach($params['ma_hoc_sinh'] as $key =>$item){
                if($key==0){
                    $students->where('hoc_sinh.ma_hoc_sinh', $item);
                }else{
                    $students->orWhere('hoc_sinh.ma_hoc_sinh', $item);

                }
                
            }
            
        }
        
        // dd($students->toSql());
        return $students->get();
    }


}
