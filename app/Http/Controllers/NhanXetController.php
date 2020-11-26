<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\HocSinh\HocSinhRepository;
use App\Models\NhanXet;
use Carbon\Carbon;
use Illuminate\Http\Response;
class NhanXetController extends Controller
{

    protected $HocSinhRepository;

    public function __construct(
        HocSinhRepository $HocSinhRepository
    ) {
        $this->HocSinhRepository = $HocSinhRepository;
    }

    public function index()
    {
        $students = $this->HocSinhRepository->getHocSinhInClass();
        return view('nhanxet.index', compact('students'));
    }

    public function store(Request $request)
    {
        $dataInput = $request->hoc_sinh_id;
        $dataHocSinhCreateNew = [];
        foreach($dataInput as $value){
            $nhan_xet = NhanXet::where('hoc_sinh_id', $value)
                            ->whereDate('created_at', '=', date('Y-m-d'))
                            ->first();
            if ($nhan_xet !== null) {
                $nhan_xet->update([
                    'giao_vien_id' => request('giao_vien_id'),
                    'nhan_xet_ngay' => request('nhan_xet_ngay'),
                    'bua_an' => request('bua_an'),
                    'ngu' => request('ngu'),
                    've_sinh' => request('ve_sinh')
                    ]);
            } else {
                array_push($dataHocSinhCreateNew, [
                    'giao_vien_id' => request('giao_vien_id'),
                    'hoc_sinh_id' => $value,
                    'nhan_xet_ngay' => request('nhan_xet_ngay'),
                    'bua_an' => request('bua_an'),
                    'ngu' => request('ngu'),
                    've_sinh' => request('ve_sinh')
                ]);
            }
        }

        $data = NhanXet::insert($dataHocSinhCreateNew);

        return response()->json($request->all(), Response::HTTP_OK);
    }


    public function find(Request $request)
    {
        $data = NhanXet::where('hoc_sinh_id', request('hoc_sinh_id'))
        ->whereDate('created_at', request('search_time'))
        ->first();
        return response()->json($data, Response::HTTP_OK);
    }
}
