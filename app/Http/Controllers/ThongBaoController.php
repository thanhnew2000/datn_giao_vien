<?php

namespace App\Http\Controllers;

use App\Models\ThongBao;
use App\Repositories\NoiDungThongBaoRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jobs\JobGuiThongBao;
use App\Repositories\GiaoVien\GiaoVienRepository;
use App\Repositories\NotificationRepository;
use App\Models\Notification;

class ThongBaoController extends Controller
{
    protected $NoiDungThongBaoRepository;
    protected $NotificationRepository;
    protected $GiaoVienRepository;
    public function __construct(
        GiaoVienRepository $GiaoVienRepository,
        NoiDungThongBaoRepository $NoiDungThongBaoRepository,
        NotificationRepository $NotificationRepository

    ) {
        $this->GiaoVienRepository = $GiaoVienRepository;
        $this->NoiDungThongBaoRepository = $NoiDungThongBaoRepository;
        $this->NotificationRepository = $NotificationRepository;
    }

    public function index()
    {
        $data = [];
        dd(ThongBao::all());
        $thongBao = ThongBao::where('user_id', Auth::id())
                            ->orWhere('user_id',0)
                            ->get();
        foreach ($thongBao as $item) {
            array_push($data, $item->NoiDungThongBao);
        }
        return view('thong-bao.index', compact('data'));
    }

    public function showThongBao($id)
    {
        $data = $this->NoiDungThongBaoRepository->findById($id);
        if ($data && ($data->thuocThongBao->user_id == Auth::id() || $data->thuocThongBao->user_id == 0)) {
            return view('thong-bao.chitiet', compact('data'));
        } else {
            return redirect()->route('thong-bao.index');
        }
    }

    public function create()
    {
        $data = Auth::user()->profile->Lop->Student()->get();
        return view('thong-bao.create',compact('data'));
    }

    public function store(Request $request)
    {
        $content = $request->all();
        unset($content['list_id_hoc_sinh']);
        $list_id_hoc_sinh = $request->list_id_hoc_sinh;
        $content['auth_id'] = Auth::id();
        $content['type'] = 1;
        $content['route'] = 'tin_tuc';

        $list_id_hoc_sinh_save_noti=[];
        foreach ($list_id_hoc_sinh as $key => $value) {
            $user_id =['user_id'=>$value];
            $data_notifi = collect([$user_id,$content]);
            $data_save_notifi = $data_notifi->collapse();
            $list_id_hoc_sinh_save_noti[$key]=$data_save_notifi->toArray();
        }
      
        $list_device = Auth::user()->profile->Lop->Student->map(function($student)
        {
           return $student->user()->select('users.device')->first();
        });

        foreach ($list_device as $key => $value) {
            $data_device = collect([$value->toArray(),$content]);
            $data_send_device = $data_device->collapse();
            $list_device[$key] = $data_send_device;
        }
        $id_noi_dung_thong_bao = $this->NoiDungThongBaoRepository->create($content)->id;

        $list_id_hoc_sinh_save_thong_bao = [];

        foreach ($list_id_hoc_sinh as $key => $value) {
            $user_id =['user_id'=>$value,'thongbao_id'=>$id_noi_dung_thong_bao];
            array_push($list_id_hoc_sinh_save_thong_bao,$user_id);
        }
        // ThongBao::insert($list_id_hoc_sinh_save_thong_bao);
        // dd(1);

        JobGuiThongBao::dispatch($list_id_hoc_sinh_save_noti,$list_id_hoc_sinh_save_thong_bao,$list_device->toArray(),$content,$this->NotificationRepository);
        return 'thành công';
    }
}
