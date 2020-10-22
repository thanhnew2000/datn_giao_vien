@extends('layouts.main')
@section('title', "Danh sách lớp")
@section('content')
<style>
    
.drop-me {
  cursor: pointer;
  box-shadow: 5px 5px 1rem rgba(0,0,0,0.5);
  border-radius: 10px;
  transition: 0.5s;
}
.drop-me:hover {
  box-shadow: 5px 5px 1rem rgba(123, 202, 224, 0.6);
  transform: scale(1.1);

}
.card{
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 250px 20px 10px;
    grid-template-areas: "image" "text" "status";

    font-family: roboto;
    border-radius: 10px;
    text-align: center;
}
.card-image{
    background-image: url('data:image/jpeg;base64,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');
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    background-size: cover;
}
.card-text{
    grid-area: text;
    font-size: 1.5rem;
    font-weight: 500;
}
.box-info{
    display: none;
    width: 100px;
    height: 100px;
    background: #000;
    position: fixed;
    top: 100px;
    z-index: 1000;
}
.drop-me:hover + .box-info{
    display: block;
}
</style>
<div class="m-content">
    <div class="box-info">

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me" data-toggle="popover" title="Thông tin cá nhân">
               <div class="card">
                   <div class="card-image" style="background-image: url('data:image/jpeg;base64,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');">
                   </div>
                   <div class="card-text">
                       Nguyễn Lan Anh
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 pt-3">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab drop-me">
               <div class="card">
                   <div class="card-image">
                   </div>
                   <div class="card-text">
                       fgf
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

