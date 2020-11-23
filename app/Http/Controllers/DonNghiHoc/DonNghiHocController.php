<?php

namespace App\Http\Controllers\DonNghiHoc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DonNghiHoc\DonNghiHocRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\HocSinh\HocSinhRepository;
use App\Repositories\GiaoVien\GiaoVienRepository;
use App\User;
use Illuminate\Support\Facades\Auth;

class DonNghiHocController extends Controller
{
    protected $DonNghiHocRepository;
    protected $NotificationRepository;
    protected $HocSinhRepository;
    protected $GiaoVienRepository;

    public function __construct(
        DonNghiHocRepository $DonNghiHocRepository,
        NotificationRepository $NotificationRepository,
        HocSinhRepository $HocSinhRepository,
        GiaoVienRepository $GiaoVienRepository
    )
    {
        $this->NotificationRepository = $NotificationRepository;
        $this->DonNghiHocRepository = $DonNghiHocRepository;
        $this->HocSinhRepository = $HocSinhRepository;
        $this->GiaoVienRepository = $GiaoVienRepository;
    }
    public function index()
    {
        $lop_id = Auth::user()->profile->lop_id;
        $don_nghi_hoc = $this->DonNghiHocRepository->getDonNghiHocHomNay($lop_id);
        $lich_su_don_nghi_hoc = $this->DonNghiHocRepository->getLichSuDonNghiHoc($lop_id);
        // dd($lich_su_don_nghi_hoc);
        return view('don-xin-nghi-hoc.index',compact('don_nghi_hoc','lich_su_don_nghi_hoc'));
    }
}
