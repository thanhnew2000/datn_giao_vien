<?php

namespace App\Http\Controllers\DiemDanhDen;

use App\Http\Controllers\Controller;
use App\Repositories\DiemDanhDen\DiemDanhDenRepository;
use App\Repositories\GiaoVien\GiaoVienRepository;
use App\Repositories\HocSinh\HocSinhRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DiemDanhDenController extends Controller
{
    protected $DiemDanhDenRepository;
    protected $HocSinhRepository;
    protected $GiaoVienRepository;

    public function __construct(
        DiemDanhDenRepository $DiemDanhDenRepository,
        HocSinhRepository $HocSinhRepository,
        GiaoVienRepository $GiaoVienRepository
    ) {
        $this->DiemDanhDenRepository = $DiemDanhDenRepository;
        $this->HocSinhRepository = $HocSinhRepository;
        $this->GiaoVienRepository = $GiaoVienRepository;
    }

    public function showDiemDanhSang()
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currrenDate = $mydate->format('Y-m-d');

        $giaoVien = $this->GiaoVienRepository->teacherInClass();
        $edit = DB::table('diem_danh_den')
            ->leftJoin('hoc_sinh', 'hoc_sinh.id', '=', 'diem_danh_den.hoc_sinh_id')
            ->where('diem_danh_den.created_at', '>=', $currrenDate)
            ->where('diem_danh_den.type', 1)
            ->where('diem_danh_den.lop_id', $giaoVien->lop_id)
            ->select('diem_danh_den.*', 'hoc_sinh.*')
            ->get();

        $students = [];
        if ($edit == null || count($edit) == 0) {
            $students = $this->HocSinhRepository->getHocSinhInClass();
        }
        $index = 1;
        return view('diem-danh.diem-danh-den-ban-sang', compact('index', 'students', 'edit'));
    }

    public function postDiemDanhSang(Request $request)
    {
        $dataAjax = $request->all();
        $data = json_decode($dataAjax['data']);
        $result = $this->DiemDanhDenRepository->createdOrUpdate($data, 1);
        return response()->json([
            'data' => $result,
            'code' => 201,
        ], 201);
    }

    public function showDiemDanhChieu()
    {
        $mydate = new \DateTime();
        $mydate->modify('+7 hours');
        $currrenDate = $mydate->format('Y-m-d');

        $giaoVien = $this->GiaoVienRepository->teacherInClass();
        $edit = DB::table('diem_danh_den')
            ->leftJoin('hoc_sinh', 'hoc_sinh.id', '=', 'diem_danh_den.hoc_sinh_id')
            ->where('diem_danh_den.created_at', '>=', $currrenDate)
            ->where('diem_danh_den.type', 2)
            ->where('diem_danh_den.lop_id', $giaoVien->lop_id)
            ->select('diem_danh_den.*', 'hoc_sinh.*')
            ->get();

        $students = [];
        if ($edit == null || count($edit) == 0) {
            $students = $this->HocSinhRepository->getHocSinhInClass();
        }
        $index = 1;
        return view('diem-danh.diem-danh-den-ban-chieu', compact('index', 'students', 'edit'));
    }

    public function postDiemDanhChieu(Request $request)
    {
        $dataAjax = $request->all();
        $data = json_decode($dataAjax['data']);
        $response = $this->DiemDanhDenRepository->createdOrUpdate($data, 2);
        return response()->json([
            'data' => $response['data'],
            'code' => $response['code'],
        ], $response['code']);
    }
}
