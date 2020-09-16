<?php

namespace App\Http\Controllers\DiemDanhVe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DiemDanhVe\DiemDanhVeRepository;
use App\Repositories\HocSinh\HocSinhRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class DiemDanhVeController extends Controller
{

    protected $DiemDanhVeRepository;
    protected $HocSinhRepository;

    public function __construct(
        DiemDanhVeRepository $DiemDanhVeRepository,
        HocSinhRepository $HocSinhRepository
    ) {
        $this->DiemDanhVeRepository = $DiemDanhVeRepository;
        $this->HocSinhRepository = $HocSinhRepository;
    }

    public function showDiemDanhVe()
    {

        $students = $this->HocSinhRepository->getHocSinhDiemDanhDenSang();
        $index = 1;
        return view('diem-danh.diem-danh-ve',compact('index','students'));

    }
}
