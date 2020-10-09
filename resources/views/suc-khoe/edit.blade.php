@extends('layouts.main')
@section('title', "Chi tiết sức khỏe")
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
                                Bé {{$data[0]->ten}} - {{$data[0]->ma_hoc_sinh}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div id="preload" class="preload-container text-center" style="display: none">
                    <img id="gif-load" src="{!! asset('images/loading3.gif') !!}" alt="">
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section">
                        <div class="m-section__content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-2 col-form-label">Biểu đồ cân nặng</label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group m-form__group row">
                                        <label for="" class="col-lg-2 col-form-label">Biểu đồ chiều cao</label>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <!--end::Section-->
                </div>
            </div>

            <!--end::Portlet-->
        </div>
    </div>

    <div id="thongbao"></div>
    <div class="m-portlet">
        <div class="m-portlet__body table-responsive">
            <table class="table m-table m-table--head-bg-success">
           
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã học sinh</th>
                        <th>Họ tên</th>
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
                    @foreach ($data as $key => $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->ma_hoc_sinh}}</td>
                    <td>{{$item->ten}}</td>
                    <td>{{$item->ten_dot}} - {{date("d/m/Y", strtotime($item->thoi_gian))}}</td>
                    
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
                        <a href="#">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{$key}}">Cập nhật</button>
                        </a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
              
            </table>
            <div class="m-portlet__foot d-flex justify-content-end">
                <!--Modal -->
                @foreach ($data as $key => $value)
                <div class="modal fade" id="Modal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{route('quan-suc-khoe-update', ['id' => $value->suc_khoe_id])}}" method="post">
                    @csrf
                    <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật sức khỏe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Chiều cao (cm)</span>
                                            </div>
                                        <input type="text" name="chieu_cao" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$value->chieu_cao}}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Cân nặng (kg)</span>
                                            </div>
                                        <input type="text" name="can_nang" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{$value->can_nang}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
                <!--End Modal -->
            </div>
        </div>
        
    </div>
    <div class="col-md-12 d-flex justify-content-end">
        <div class="m-form__actions">
        <a href="{{route('quan-suc-khoe-index')}}" class="btn btn-danger m-btn m-btn--icon">
            <span>
                <i class="la la-caret-left"></i>
                <span>Quay lại</span>
            </span>
        </a>
        
        </div>
    </div>
</div>
@endsection
@if (session('thongbaoedit'))
@section('script')
<script>

   $("#thongbao").append(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
			<strong>Thành công!</strong> Đã sửa chiều cao, cân nặng của bé
		</div>
        `);
</script>
@endsection
@endif
