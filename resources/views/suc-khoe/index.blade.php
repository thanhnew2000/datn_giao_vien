@extends('layouts.main')
@section('title', "Quản lý sức khoẻ")
@section('style')
<link href="{!!  asset('css_loading/css_loading.css') !!}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="m-content">
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Bộ lọc
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="preload" class="preload-container text-center" style="display: none">
                    <img id="gif-load" src="{!! asset('images/loading3.gif') !!}" alt="">
                </div>
                <div class="m-portlet__body">
                    <form action="" method="get">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-2 col-form-label">Mã học sinh</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select2" name="ma_hoc_sinh">
                                                <option value="" selected>Chọn</option>
                                                @foreach ($hoc_sinh_theo_lop as $item)
                                                <option 
                                                @if (isset($params['ma_hoc_sinh']))
                                                    {{ ($params['ma_hoc_sinh'] == $item->ma_hoc_sinh) ? "selected" : "" }}
                                                @endif
                                                value="{{$item->ma_hoc_sinh}}">
                                                {{$item->ma_hoc_sinh}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group m-form__group row">
                                        <label for="" class="col-lg-2 col-form-label">Đợt</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select2" name="dot_id">
                                                <option value="" selected>Chọn</option>
                                                @foreach ($getDotAll as $item)
                                                <option
                                                @if (isset($params['dot_id']))
                                                    {{ ($params['dot_id'] == $item->id) ? "selected" : "" }}
                                                @else
                                                    {{ ($dot->id == $item->id) ? "selected" : "" }}
                                                @endif
                                                value="{{$item->id}}">
                                                {{$item->ten_dot}} - {{date("d/m/Y", strtotime($item->thoi_gian))}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-2 col-form-label">Tên học sinh</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select2" name="ten">
                                                <option value="" selected>Chọn</option>
                                                @foreach ($hoc_sinh_theo_lop as $item)
                                                <option 
                                                @if (isset($params['ten']))
                                                    {{ ($params['ten'] == $item->ten) ? "selected" : "" }}
                                                @endif
                                                value="{{$item->ten}}">{{$item->ten}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </div>
                    <!--end::Section-->
                </form>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
        
    </div>
    <section class="action-nav d-flex align-items-center justify-content-between mt-4 mb-4">
        <div class="col-lg-12" style="text-align: right">

          
                <button type="button" class="btn btn-info .bg-info" onclick="CheckDot()">Thêm mới</button>
           
        </div>
    </section>
    <div id="thongbao"></div>
    @if(count($hoc_sinh)==0)
    <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
        <div class="m-alert__icon">
            <i class="flaticon-exclamation-1"></i>
            <span></span>
        </div>
        <div class="m-alert__text">
            <strong>Thông báo!</strong> Đã có đợt sức khỏe mới nhất vui lòng thêm sức khỏe cho học sinh.
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
        </div>
    </div>
    @endif
    <div class="m-portlet">
        <div class="m-portlet__body table-responsive">
            <table class="table m-table m-table--head-bg-success">
            
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã học sinh</th>
                        <th>Họ tên</th>
                        <th>Ảnh</th>
                        <th>Đợt</th>
                        <th>Chiều cao</th>
                        <th>Cân nặng</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = !isset($_GET['page']) ? 1 : ($limit * ($_GET['page']-1) + 1);
                    @endphp
                    @foreach ($hoc_sinh as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->ma_hoc_sinh}}</td>
                        <td>{{$item->ten}}</td>
                        @if ($item->avatar == "")
                        <td><img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png"
                                height="100px" width="85px" alt=""></td>
                        @else
                        <td><img src="{{ Storage::url($item->avatar)}}" height="100px" width="75px" alt=""></td>
                        @endif
                        <td>
                            @if (isset($params['dot_id']) && $params['dot_id'] != null)
                                @php
                                    $date_params = "";
                                    $dot_params = "";
                                    foreach ($getDotAll as $key ) {
                                        if ($key->id == $params['dot_id']) {
                                            $date_params = date("d/m/Y", strtotime($key->thoi_gian));
                                            $dot_params = $key->ten_dot;
                                        break;
                                        }
                                    }
                                    echo $dot_params." - ".$date_params;
                                @endphp
                            @else
                            {{$dot->ten_dot}} - {{date("d/m/Y", strtotime($dot->thoi_gian))}}
                            @endif
                        </td>
                        
                        @if($item->chieu_cao == 0)
                        <td>
                        <span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Không có dữ liệu</span>
                        </td>
                        @else
                        <td>{{$item->chieu_cao}} cm</td>
                        @endif
                        @if ($item->can_nang == 0)
                        <td>
                            <span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Không có dữ liệu</span>
                        </td>
                        @else
                        <td>{{$item->can_nang}} kg</td>
                        @endif
                        <td>
                            <a href="{{route('quan-suc-khoe-edit', ['id' => $item->id])}}">
                            <button type="button" class="btn btn-primary">Chi tiết</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                   

                </tbody>
            </table>
            <div class="m-portlet__foot d-flex justify-content-end">
               
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function(){
        $('.select2').select2();
    });
    var url = "{{route('quan-suc-khoe-check-dot')}}";
    var url_create = "{{route('quan-suc-khoe-create')}}";
    var local_storage = localStorage.getItem('them_thanh_cong');
    var thongbaodiv = $("#thongbao");
    if(local_storage){
        
        thongbaodiv.append(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
			<strong>Thành công!</strong> Danh sách sức khỏe học sinh được đã thêm vào đợt mới nhất
		</div>
        `);
        localStorage.clear('them_thanh_cong');
    }
    function CheckDot()
    {   
        $('#preload').css('display','block')
        axios.post(url)
        .then(function(response){
            if(response.data.length > 0)
            {
                swal({title:"Dữ liệu đã có cho đợt mới",html:$("<div>")
                .addClass("some-class")
                .text("Chỉ thêm được khi chưa có dữ liệu cho đợt mới"),animation:!1,customClass:"animated tada"})
                $('#preload').css('display','none')
            }
            else
            {
                window.location = url_create;
            }
            
            
        })
    }
   
</script>

@endsection