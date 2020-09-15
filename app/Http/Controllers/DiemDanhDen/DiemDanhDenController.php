<?php

namespace App\Http\Controllers\DiemDanhDen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DiemDanhDen\DiemDanhDenRepository;
use App\Repositories\HocSinh\HocSinhRepository;
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

    public function test()
    {
        dd($this->HocSinhRepository->getHocSinhDiemDanhDenSang());
    }
}
