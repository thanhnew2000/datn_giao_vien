<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\GiaoVien\GiaoVienRepository;
use App\Repositories\HocSinh\HocSinhRepository;
use App\Repositories\SucKhoe\SucKhoeRepository;
class SucKhoeController extends Controller
{   
    protected $GiaoVienRepository;
    protected $HocSinhRepository;
    protected $SucKhoeRepository;
    public function __construct
    (
        GiaoVienRepository $GiaoVienRepository,
        HocSinhRepository $HocSinhRepository,
        SucKhoeRepository $SucKhoeRepository
    )
    {
        $this->GiaoVienRepository = $GiaoVienRepository;
        $this->HocSinhRepository = $HocSinhRepository;
        $this->SucKhoeRepository = $SucKhoeRepository;
    }
    public function index()
    {
        $params = request()->all();
        $dot = $this->SucKhoeRepository->getDotMoiNhat();
        $hoc_sinh = $this->HocSinhRepository->getHocSinhInClassTheoDot($dot->id, $params);
        $hoc_sinh_theo_lop = $this->HocSinhRepository->getHocSinhInClass();
        $getDotAll = $this->SucKhoeRepository->getDotKhamSK();
        return view('suc-khoe.index', compact('hoc_sinh', 'dot', 'hoc_sinh_theo_lop', 'getDotAll', 'params'));
        
    }
    public function checkdot()
    {   
        $params = "";
        $dot = $this->SucKhoeRepository->getDotMoiNhat();
        $hoc_sinh = $this->HocSinhRepository->getHocSinhInClassTheoDot($dot->id, $params);
        
        return $hoc_sinh;
    }
    public function create()
    {   
        $params = "";
        $getHocSinh = $this->HocSinhRepository->getHocSinhInClass();
        $dot = $this->SucKhoeRepository->getDotMoiNhat();
        $lop_id_gv = $this->GiaoVienRepository->teacherInClass();
        $checkdot = $this->HocSinhRepository->getHocSinhInClassTheoDot($dot->id, $params);
        $data = view('suc-khoe.create', compact('getHocSinh', 'dot', 'lop_id_gv'));
        if(count($checkdot) > 0){
            $data = redirect()->route('quan-suc-khoe-index')->with('thongbao', 'Hoan thanh');
        }
        return $data;
    }
    public function store(Request $request)
    {
        $data = $request->all();
        
        $count = count($data);
       
        for ($i=1; $i < $count; $i++) { 
            $this->SucKhoeRepository->store($data[$i]);
        }
       
    }

    public function edit($id)
    {   
        $data = $this->SucKhoeRepository->getSucKhoeTheoHocSinh($id);
        return view('suc-khoe.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {   
        $data = $request->all();
        $this->SucKhoeRepository->updateSk($data, $id);
        return redirect()->back()->with('thongbaoedit','66');
    }
}
