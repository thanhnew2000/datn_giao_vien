<?php


namespace App\Repositories\DiemDanhDen;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseModelRepository;
use App\Models\DiemDanhDen;
use Carbon\Carbon;



class DiemDanhDenRepository extends BaseModelRepository
{
    protected $model;
    public function __construct(
        DiemDanhDen $model
    ) {
        parent::__construct();
        $this->model = $model;
    }

    public function getModel(){
		return DiemDanhDen::class;
    }
    
    public function getWhere($currrenDate){
       return $this->model::where('created_at','>=',$currrenDate)->get();
    }

    public function createdOrUpdate($data = [], $type = null)
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currrenDate = $mydate->format('Y-m-d');
        foreach($data as $item)
        {
            $result = $this->model::where('ngay_diem_danh_den','=', $currrenDate)
            ->where('hoc_sinh_id',$item->hoc_sinh_id)
            ->where('type',$type)
            ->first();
            if(!$result){
                $data_create = $this->model::create(
                [
                 'ngay_diem_danh_den' => $currrenDate,
                 'hoc_sinh_id' => $item->hoc_sinh_id,
                 'type' => $type,
                 'giao_vien_id' => $item->giao_vien_id,
                 'trang_thai' => $item->trang_thai,
                 'chu_thich' => $item->chu_thich
                ]);
            }else{
                $result->giao_vien_id = $item->giao_vien_id;
                $result->trang_thai = $item->trang_thai;
                $result->chu_thich = $item->chu_thich;
                $result->save();
            }
        }

          return $data;
    }
}