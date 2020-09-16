<?php

namespace App\Http\Controllers\DiemDanhDen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DiemDanhDen\DiemDanhDenRepository;
use App\Repositories\HocSinh\HocSinhRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
class DiemDanhDenController extends Controller
{
    protected $DiemDanhDenRepository;
    protected $HocSinhRepository;

    public function __construct(
        DiemDanhDenRepository $DiemDanhDenRepository,
        HocSinhRepository $HocSinhRepository
    ) {
        $this->DiemDanhDenRepository = $DiemDanhDenRepository;
        $this->HocSinhRepository = $HocSinhRepository;
    }

    public function showDiemDanhSang()
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currrenDate = $mydate->format('Y-m-d');

        $edit = DB::table('diem_danh_den')
        ->leftJoin('hoc_sinh','hoc_sinh.id','=','diem_danh_den.hoc_sinh_id')
        ->where('diem_danh_den.created_at','>=',$currrenDate)
        ->where('diem_danh_den.giao_vien_id',Auth::id())
        ->where('diem_danh_den.type',1)
        ->select('diem_danh_den.*','hoc_sinh.*')
        ->get();

        $students = [];
        if($edit == null || count($edit) == 0){
            $students = $this->HocSinhRepository->getHocSinhDiemDanhDenSang();
        }
        $index = 1;
        return view('diem-danh.diem-danh-den-ban-sang',compact('index','students','edit'));
    }

    public function postDiemDanhSang(Request $request)
    {
        $dataAjax = $request->all();
        $data  = json_decode($dataAjax['data']);
        $result =  $this->DiemDanhDenRepository->createdOrUpdate($data,1);
        return response()->json([
            'data' => $result,
            'code' => 201,
        ],201);
    }


    public function showDiemDanhChieu()
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currrenDate = $mydate->format('Y-m-d');

        $edit = DB::table('diem_danh_den')
        ->leftJoin('hoc_sinh','hoc_sinh.id','=','diem_danh_den.hoc_sinh_id')
        ->where('diem_danh_den.created_at','>=',$currrenDate)
        ->where('diem_danh_den.giao_vien_id',Auth::id())
        ->where('diem_danh_den.type',2)
        ->select('diem_danh_den.*','hoc_sinh.*')
        ->get();

        $students = [];
        if($edit == null || count($edit) == 0){
            $students = $this->HocSinhRepository->getHocSinhDiemDanhDenSang();
        }
        $index = 1;
        return view('diem-danh.diem-danh-den-ban-chieu',compact('index','students','edit'));
    }

    public function postDiemDanhChieu(Request $request)
    {
        $dataAjax = $request->all();
        $data  = json_decode($dataAjax['data']);
        $result =  $this->DiemDanhDenRepository->createdOrUpdate($data,2);
        return response()->json([
            'data' => $result,
            'code' => 201,
        ],201);
    }
}
