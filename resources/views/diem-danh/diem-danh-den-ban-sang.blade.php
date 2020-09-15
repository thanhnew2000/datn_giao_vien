@extends('layouts.main')
@section('title', "Điểm danh đếnn ban sáng")
@section('content')
<div class="m-content">
    <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30"
        role="alert">
        <div class="m-alert__icon">
            <i class="flaticon-exclamation m--font-brand"></i>
        </div>
        <div class="m-alert__text">
            DataTables
        </div>
    </div>
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        ĐIỂM DANH SÁNG
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <button class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air">
                            <span>
                                <span>Cập nhật</span>
                            </span>
                        </button>
                    </li>

                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('test1')}}">
                        <i class="la la-exclamation-triangle"></i> Sáng
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('test2')}}">
                        <i class="la la-cloud-download"></i> Chiều
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">

                    <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap dataTable dtr-inline collapsed" id="table1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Avatar</th>
                                <th>Ngày Sinh</th>
                                <th>Đi Học</th>
                                <th>Nghỉ Có Phép</th>
                                <th>Nghỉ Không Phép</th>
                                <th>Ghi chú</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nguyễn Văn Phúc</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-1" checked></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><input type="radio" name="tick-1"></td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nguyễn Văn Hiếu</td>
                                <td><img src="" alt="avatar"></td>
                                <td>16/02/1998</td>
                                <td><input type="radio" name="tick-2" checked></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><input type="radio" name="tick-2"></td>
                                <td><textarea></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="m-separator m-separator--dashed"></div>
            <div class="col m--align-center">
                <a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air">
                    <span>
                        <span>Cập nhật</span>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!--end::Portlet-->
</div>

</div>

@endsection
@section('script')

<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/jquery/jquery.dataTables.min.js') }}"></script>
<!-- https://viblo.asia/p/tim-hieu-jquery-datatables-co-ban-trong-10-phut-07LKXp4eKV4 -->
<script>
    $(document).ready(function () {
        $('#table1').DataTable({
            "pageLength": 100
        });
    });

</script>
@endsection
