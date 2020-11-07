<?php

namespace App\Http\Controllers;

use App\Models\ThongBao;
use App\Repositories\NoiDungThongBaoRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Jobs\JobGuiThongBao;
use App\Repositories\GiaoVien\GiaoVienRepository;
use App\Repositories\NotificationRepository;

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
        return view('thong-bao.create');
    }

    public function store(Request $request)
    {
        $content = $request->all();
        $content['auth_id'] = Auth::id();
        $content['type'] = 1;
        $content['route'] = 'tin_tuc';
        $list_id_hoc_sinh = Auth::user()->profile->Lop->Student()->select('hoc_sinh.id as user_id')->get();

        foreach ($list_id_hoc_sinh as $key => $value) {
            $data_notifi = collect([$value->toArray(),$content]);
            $data_save_notifi = $data_notifi->collapse();
            $list_id_hoc_sinh[$key]=$data_save_notifi;
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
        JobGuiThongBao::dispatch($list_id_hoc_sinh->toArray(),$list_device->toArray(),$content,$this->NotificationRepository);
        return view('thong-bao.create');
    }
}
