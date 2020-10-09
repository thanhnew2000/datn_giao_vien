@extends('layouts.main')
@section('title', "Danh sách lớp")
@section('content')
<div class="m-content">
    <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30"
        role="alert">
        <div class="m-alert__icon">
            <i class="flaticon-presentation m--font-success"></i>
        </div>
        <div class="m-alert__text">
            LỚP HOA LY 2
        </div>
    </div>
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        DANH SÁCH LỚP
                    </h3>
                </div>
            </div>
            
        </div>
        <div class="m-portlet__body">
            
            <div class="tab-content">
                <div class="tab-pane active" id="m_tabs_1_1" role="tabpanel">

                    <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap dataTable dtr-inline collapsed" id="table1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã Số</th>
                                <th>Họ Tên</th>
                                <th>Ảnh</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Số điện thoại</th>
                                <th>Thao Tác</th>

                            </tr>
                        </thead>
                        <tbody>

                        
                                    <tr>
                                        <td>1</td>
                                        <td>PH07533</td>
                                        <td>Phạm Trung Hiếu</td>
                                        <td><img width="150px" height="150px" src="https://images.unsplash.com/photo-1600611861240-80ec554d1039?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=674&q=80" alt=""></td>
                                        <td>1/10/2000</td>
                                        <td>Nam</td>
                                        <td>0922333333</td>
                                        <td><a href="#" class="btn btn-outline-success m-btn m-btn--icon m-btn--pill m-btn--air">
                                            <span>
                                                <i class="fa flaticon-apps"></i>
                                                <span>Chi tiết</span>
                                            </span>
                                        </a></td>
                                    </tr>
                        
                                    <tr>
                                        <td>2</td>
                                        <td>PH02929</td>
                                        <td>Nguyễn Trung Hiếu</td>
                                        <td><img width="150px" height="150px" src="https://images.unsplash.com/photo-1600611861240-80ec554d1039?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=674&q=80" alt=""></td>
                                        <td>2/2/2000</td>
                                        <td>Nam</td>
                                        <td>0292929222</td>
                                      <td><a href="#" class="btn btn-outline-success m-btn m-btn--icon m-btn--pill m-btn--air">
                                        <span>
                                            <i class="fa flaticon-apps"></i>
                                            <span>Chi tiết</span>
                                        </span>
                                    </a></td>
                                    </tr>
                           
                           
                        </tbody>
                    </table>
                </div>


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

    function submitData(){
        var statusList = $('input[type=radio]:checked');
        var data = [];
        for(i=0;i<statusList.length;i++) {
			
                std = {
                    'hoc_sinh_id': $('[name=id_'+$(statusList[i]).attr('name')+']').val(),
                    'giao_vien_id': "{{ \Illuminate\Support\Facades\Auth::id() }}",
					'trang_thai': $(statusList[i]).val(),
					'chu_thich': $('[name=chu_thich_'+$(statusList[i]).attr('name')+']').val(),
                    'lop_id': $('[name=lop_' + $(statusList[i]).attr('name') + ']').val()
				}
				data.push(std)
			}
			console.log(data)
            $.post('{{ route("diem_danh_ban_sang.store") }}', {
				'_token': "{{ csrf_token() }}",
				'data': JSON.stringify(data)
			}, function(dt) {
                location.reload()
			})
    }

</script>
@endsection
