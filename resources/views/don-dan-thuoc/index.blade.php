@extends('layouts.main')
@section('title', "Đơn dặn thuốc")
@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Đơn dặn thuốc</h3>
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
                                    <i class="la la-cog"></i> HÔM NAY
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_12_2" role="tab">
                                    <i class="la la-briefcase"></i>TƯƠNG LAI
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_12_3" role="tab">
                                    <i class="la la-bell-o"></i>LỊCH SỬ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_tabs_12_1" role="tabpanel">
                            <table id="table1"
                                class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap dataTable dtr-inline collapsed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã số</th>
                                        <th>Họ và Tên</th>
                                        <th>Ảnh</th>
                                        <th>Bệnh án</th>
                                        <th>Ngày ghi đơn</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>11</td>
                                        <td>dk21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                </tbody>
                            </table>
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
                                        <th>Bệnh án</th>
                                        <th>Ngày ghi đơn</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="m_tabs_12_3" role="tabpanel">
                            <table id="table3"
                                class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap dataTable dtr-inline collapsed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã số</th>
                                        <th>Họ và Tên</th>
                                        <th>Ảnh</th>
                                        <th>Bệnh án</th>
                                        <th>Ngày ghi đơn</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
                                        <td><button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#m_modal_4">Chi tiết</button></td>
                                    </tr>
                                    <tr>
                                        <td>Ram</td>
                                        <td>21</td>
                                        <td>Male</td>
                                        <td>Doctor</td>
                                        <td>Doctor</td>
                                        <td><textarea readonly>Hôm nay cháu ốm</textarea></td>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn xin nghỉ học bé Phạm
                                        trung hiếu</h5>
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
                                                    <div class="m-widget5">
                                                        <div class="m-widget5__item">
                                                            <div class="m-widget5__content">
                                                                <div class="m-widget5__pic">
                                                                    <img class="m-widget7__img"
                                                                        src="../../assets/app/media/img//products/product6.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="m-widget5__section">
                                                                    <h4 class="m-widget5__title">
                                                                        Phạm Hiếu
                                                                    </h4>
                                                                    <span class="m-widget5__desc">
                                                                        Từ:
                                                                        <span class="m-widget5__info-date m--font-info">
                                                                            01/02/20202
                                                                        </span>
                                                                        Đến:
                                                                        <span class="m-widget5__info-date m--font-info">
                                                                            05/02/2020
                                                                        </span>
                                                                    </span>
                                                                    <div class="m-widget5__info">
                                                                        <span class="m-widget5__author">
                                                                            Bệnh án:
                                                                        </span>
                                                                        <span class="m-widget5__info-date">
                                                                            Sốt
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget5__content">

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

                                        <div class="m-portlet">
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-text">
                                                            Đơn thuốc
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__body">

                                                <!--begin::Section-->
                                                <div class="m-section">
                                                    <div class="m-section__content">
                                                        <table class=" table m-table table-bordered table-hover">
                                                            <thead>
                                                                <tr class="m-table__row--danger">
                                                                    <th>#</th>
                                                                    <th>Stt</th>
                                                                    <th>Tên thuốc</th>
                                                                    <th>Đơn vị</th>
                                                                    <th>Liều dùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="m-table__row--warning">
                                                                    <th scope="row">1</th>
                                                                    <td>Jhon</td>
                                                                    <td>Stone</td>
                                                                    <td>@jhon</td>
                                                                    <td>@jhon</td>
                                                                </tr>
                                                                <tr class="m-table__row--warning">
                                                                    <th scope="row">2</th>
                                                                    <td>Lisa</td>
                                                                    <td>Nilson</td>
                                                                    <td>@lisa</td>
                                                                    <td>@jhon</td>
                                                                </tr>
                                                                <tr class="m-table__row--warning">
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                    <td>@jhon</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!--end::Section-->
                                            </div>

                                            <!--end::Form-->
                                        </div>
                                    </div>


                                    <div class="m-portlet m-portlet--full-height ">

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
                                    <div class="m-form__group form-group">
                                        <div class="m-radio-list">
                                            <label class="m-checkbox m-checkbox--state-success">
                                                <input type="checkbox"> Đã sử dụng
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
