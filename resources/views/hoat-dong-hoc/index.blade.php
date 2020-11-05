@extends('layouts.main')
@section('title', "Hoạt động học tập")
@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Hoạt động học tập</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">DataTables</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Basic</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Scrollable Tables</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
<div class="m-content">
    <div class="row">

        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tabs m-portlet--success m-portlet--head-solid-bg m-portlet--bordered">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_12_1"
                                    role="tab">
                                    <i class="flaticon-folder-1"></i> KẾ HOẠCH HỌC
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_12_2" role="tab">
                                    <i class="flaticon-clipboard"></i>NHẬN XÉT
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" href="" data-toggle="modal" data-target="#modalNhapFile"">
                                    <i class="flaticon-clipboard"></i>XUẤT FILE NHẬP HOẠT ĐỘNG
                                </a>
                            </li>

                        </ul>
                        <ul class="m-portlet__nav ">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-cart-plus"></i>
                                        <span>New Order</span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Create Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Send Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                <span class="m-nav__link-text">Upload File</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
                                                            <span class="m-nav__section-text">Useful Links</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                        </li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="m-portlet__head-tools">
                        
                    </div>
                </div>
  
                <div class="m-portlet__body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            <h5>Đã gửi file thành công !</h5>
                        </div>
                    @endif

                    <div class="tab-content">
                        <div class="tab-pane active" id="m_tabs_12_1" role="tabpanel">
                            <div class="m-timeline-1 m-timeline-1--fixed">
                                <div class="m-timeline-1__items">
                                    <div class="m-timeline-1__marker"></div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left m-timeline-1__item--first">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">08:00<span>AM</span></span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Đón trẻ vào lớp
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                
                                                <div class="m-timeline-1__item-body m--margin-top-15">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd<br>
                                                    tempors labore et dolore.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">09:00<span>PM</span></span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Thể dục buổi sáng
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                
                                                <div class="m-timeline-1__item-body m--margin-top-15">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd<br>
                                                    tempors labore et dolore.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">11:00<span>PM</span></span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Ăn trưa
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd<br>
                                                tempor incididunt ut labore et dolore magna enim<br>
                                                ad minim veniam nostrud.
                                            </div>
                                            <div class="m-timeline-1__item-actions">
                                                <a href="#" class="btn btn-sm btn-outline-brand m-btn m-btn--pill m-btn--custom">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--right">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">12:00<span>PM</span></span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="m-timeline-1__item-title">
                                                Nghỉ trưa
                                            </div>
                                            <div class="m-timeline-1__item-body">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd<br>
                                                tempor incididunt ut labore et dolore magna enim<br>
                                                ad minim veniam nostrud.
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                    <div class="m-timeline-1__item m-timeline-1__item--left">
                                        <div class="m-timeline-1__item-circle">
                                            <div class="m--bg-danger"></div>
                                        </div>
                                        <div class="m-timeline-1__item-arrow"></div>
                                        <span class="m-timeline-1__item-time m--font-brand">05:00<span>PM</span></span>
                                        <div class="m-timeline-1__item-content">
                                            <div class="media">
                                                <img class="m--margin-right-20" src="../../assets/app/media/img/products/product1.jpg" title="">
                                                <div class="media-body">
                                                    <div class="m-timeline-1__item-title m--margin-top-10  ">
                                                        Hoạt động thể chât
                                                    </div>
                                                    <div class="m-timeline-1__item-body">
                                                        Cô cho các bé chơi các hoạt động thể chất...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="m_tabs_12_2" role="tabpanel">
                            <table id="table2"
                                class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap dataTable dtr-inline collapsed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã số</th>
                                        <th>Họ và Tên</th>
                                        <th>Ảnh</th>
                                       
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                       
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>



                    <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết nhận xét</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="m-portlet m-portlet--full-height ">

                                        <div class="m-portlet__body">
                                            <!--begin::Content-->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="m_widget5_tab1_content"
                                                    aria-expanded="true">

                                                    <!--begin::m-widget5-->
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-6 mb-4">
                                                            <div class="card border-left-primary shadow h-100 py-2">
                                                              <div class="card-body">
                                                                <div class="row no-gutters align-items-center">
                                                                  <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><i class="flaticon-edit-1"></i>Giờ học</div>
                                                                    <select class="form-control m-input col-12" id="exampleSelect1">
                                                                        <option>Tốt</option>
                                                                        <option>Khá</option>
                                                                        <option>Trung bình</option>
                                                                      
                                                                    </select>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-xl-4 col-md-6 mb-4">
                                                            <div class="card border-left-success shadow h-100 py-2">
                                                              <div class="card-body">
                                                                <div class="row no-gutters align-items-center">
                                                                  <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><i class="flaticon-edit-1"></i>Giờ ăn</div>
                                                                    <select class="form-control m-input col-12" id="exampleSelect1">
                                                                        <option>Tốt</option>
                                                                        <option>Khá</option>
                                                                        <option>Trung bình</option>
                                                                      
                                                                    </select>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-xl-4 col-md-6 mb-4">
                                                            <div class="card border-left-warning shadow h-100 py-2">
                                                              <div class="card-body">
                                                                <div class="row no-gutters align-items-center">
                                                                  <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><i class="flaticon-edit-1"></i>Hoạt động</div>
                                                                    <select class="form-control m-input col-12" id="exampleSelect1">
                                                                        <option>Tốt</option>
                                                                        <option>Khá</option>
                                                                        <option>Trung bình</option>
                                                                      
                                                                    </select>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-6 mb-4">
                                                            <div class="card border-left-warning shadow h-100 py-2">
                                                              <div class="card-body">
                                                                <div class="row no-gutters align-items-center">
                                                                  <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nhận xét chi tiết</div>
                                                                    <textarea class="form-control m-input m-input--air" id="exampleTextarea" placeholder="Nhap nhan xet chi tiet ve tre" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 78px;"></textarea>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                    </div>

                                                    <!--end::m-widget5-->
                                                </div>

                                            </div>

                                            <!--end::Content-->
                                        </div>
                                    </div>
                                   


                                    <div class="m-portlet m-portlet--full-height ">
                                        <div class="m-portlet__head">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-title">
                                                    <span class="m-portlet__head-icon m--hide">
                                                        <i class="la la-gear"></i>
                                                    </span>
                                                    <h3 class="m-portlet__head-text">
                                                        Phản hồi
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="m-widget3">
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                src="../../assets/app/media/img/users/user1.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                            <span class="m-widget3__username">
                                                                Cô giáo: Nguyễn Phương Lan
                                                            </span><br>
                                                            <span class="m-widget3__time">
                                                                2 day ago
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="m-widget3__body">
                                                        <p class="m-widget3__text">

                                                            doloremagna aliquam erat volutpat.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="m-widget3__item">
                                                    <div class="m-widget3__header">
                                                        <div class="m-widget3__user-img">
                                                            <img class="m-widget3__img"
                                                                src="../../assets/app/media/img/users/user4.jpg" alt="">
                                                        </div>
                                                        <div class="m-widget3__info">
                                                            <span class="m-widget3__username">
                                                                Phụ Huynh: Nguyễn Văn Nam
                                                            </span><br>
                                                            <span class="m-widget3__time">
                                                                1 day ago
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="m-widget3__body">
                                                        <p class="m-widget3__text">
                                                            Lorem ipsum dolor sit amet,consectetuer edipiscing

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" cols="100" rows="5"
                                                        placeholder="... Gửi phản hồi"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer pull-center">
                                   
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            {{-- thanhnv 11/3/2020 --}}
            <form action="{{route('nhap-file-hoat-dong')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="modalNhapFile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Nhập file hoạt động </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Tuần</span>
                                </div>
                            <input type="text" value="{{$numberNextWeek}}" name="tuan" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                            <div class="input-group mb-3 ml-3">
                                <input type="file" id="file_import_id" name="file">
                            </div>

                        <input type="text" hidden value="{{ Auth::user()->id }}" name="user_id">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Nhập file</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!--end::Portlet-->
        </div>
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
        $('#table2').DataTable({
            "pageLength": 100
        });
        $('#table3').DataTable({
            "pageLength": 100
        });
    });

</script>
@endsection
