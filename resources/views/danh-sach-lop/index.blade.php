@extends('layouts.main')
@section('title', "Danh sách lớp")
@section('content')
<style>
 
.drop-me {
  cursor: pointer;
  box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
  border-radius: 2rem;
  transition: 0.5s;
}
.drop-me:hover {
  box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
  transform: scale(1.1);

}
.card{
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 300px 20px 10px;
    grid-template-areas: "image" "text" "status";

    font-family: roboto;
    border-radius: 2rem;
    text-align: center;
}
.card-image{
    border-top-left-radius: 2rem;
    border-top-right-radius: 2rem;
    background-size: cover;
}
.card-text{
    grid-area: text;
    font-size: 1.5rem;
    font-weight: 500;
}


.m-portlet {
    font-size: 1rem;
    color: #404040;
    font-family: Montserrat, sans-serif;
    background-image: linear-gradient(to bottom right, #ff9eaa 0% 10%, #e860ff 95% 100%);
 }

</style>

<div class="m-content">

    <div class="m-portlet p-5">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{ $lopHoc->ten_lop }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="row">
                @forelse ($lopHoc->Student as $item)
                    <div class="col-xs-12 col-sm-4 col-md-3 pt-3">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--tab drop-me" data-toggle="popover" title="Thông tin cá nhân">
                            <div class="card">
                                <div class="card-image" style="background-image: url('https://images.pexels.com/photos/1382731/pexels-photo-1382731.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">
                                </div>
                                <div class="card-text">
                                    {{ $item->ten}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center">
                        <div class="m-demo " data-code-preview="true" data-code-html="true" data-code-js="false">
                            <div class="m-demo__preview">
                                <h3>
                                  Lớp học hiện tại chưa có học sinh
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforelse
                
            </div>
        </div>
    </div>

</div>

@endsection

