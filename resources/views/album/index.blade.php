@extends('layouts.main')
@section('title', "Album ảnh")
@section('style')
<style>
#box-galary {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: sans-serif;
}

.grid-container {
  columns: 5 200px;
  column-gap: 1.5rem;
  width: 90%;
  margin: 0 auto;
}
.grid-container div {
  width: 150px;
  margin: 0 1.5rem 1.5rem 0;
  display: inline-block;
  width: 100%;
  padding: 5px;
  box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
  transition: all .25s ease-in-out;
  margin-top: 0.5rem;
}
.grid-container div:hover img {
  cursor: pointer;
  filter: grayscale(0);
}
.grid-container div:hover {
  border-color: coral;
}
.grid-container div img {
  width: 100%;
  border-radius: 15px;
  transition: all .25s ease-in-out;
}
.grid-container div p {
  margin: 5px 0;
  padding: 0;
  text-align: center;
  font-style: italic;
}

</style>
    
@endsection
@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Album Ảnh</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                <button data-toggle="modal"
                data-target="#m_modal_4" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                    <i class="flaticon-add-circular-button"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="m-content">
 <div id="box-galary">
    <div class="grid-container">

      @forelse ($data as $item)
        <div>
              <a href="{{route('album.show',['id'=>$item["id"]])}}"><img class='grid-item' src='{{ $item['item_images'][0] }}' alt=''></a>
              <p>"I'm so happy today!"</p>
        </div>
      @empty
          
      @endforelse
      {{-- <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"I see those nugs."</p>
      </div> --}}
      {{-- <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1510771463146-e89e6e86560e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"I love you so much!"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"I'm the baby of the house!"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"Are you gunna throw the ball?"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"C'mon friend!"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"A rose for mommy!"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1518717758536-85ae29035b6d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"You gunna finish that?"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1535930891776-0c2dfb7fda1a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"We can't afford a cat!"</p>
      </div>
      <div>
        <img class='grid-item' src='https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <p>"Dis my fren!"</p>
      </div> --}}
    </div>
 </div>

    
</div>
<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết lời nhắn - phụ huynh bé Phạm Trung Hiếu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="m-portlet m-portlet--full-height ">

                                        <div class="m-portlet__body">
                                            <!--begin::Content-->
                                            <div class="tab-content">
                                                <div class="form-group">
                                                    <textarea class="form-control m-input m-input--air m-input--pill" name="content" rows="3" placeholder="Hoạt động lớp hôm nay ?"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <form action="" class="dropzone" method="post" enctype="multipart/form-data">
                                                        {!! csrf_field() !!}
                                                        <div class="dz-message needsclick">    
                                                            <i class="la la-photo" style="font-size: 100px"></i>
                                                        </div>
                                                    </form>
                                                </div>
                
                                                <div class="form-group">
                                                    <button class="btn btn-success pull-right" onclick="formSubmit()">Send</button>
                                                </div>

                                            </div>

                                            <!--end::Content-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script>


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    function formSubmit(){
        let data = {
            content : $( "[name='content']" ).val(),
            item_images : JSON.stringify(imageDataArray),
            auth_id : "{{ Illuminate\Support\Facades\Auth::id() }}",
            lop_id : "{{ Illuminate\Support\Facades\Auth::user()->profile->lop_id }}"
        }
        console.log(data);
        $.post("http://127.0.0.1:8000/api/storeAlbum", data)
        .done(function(res){
            location.reload();
        })
    }
    
    Dropzone.autoDiscover = false;
    var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
    // imageDataArray variable to set value in crud form
    var imageDataArray = [];
    // fileList variable to store current files index and name
    var fileList = new Array;
    var i = 0;
    
    $(function(){
    
        uploader = new Dropzone(".dropzone",{
            url: "{{ config('common.DB_HOST_STORAGE') . '/api/fileUpload'}}",
            paramName : "file",
            uploadMultiple :false,
            acceptedFiles : "image/*,video/*,audio/*",
            addRemoveLinks: true,
            forceFallback: false,
            maxFilesize: 500, // Set the maximum file size to 500 MB
            parallelUploads: 2,
        });//end drop zone
    
        uploader.on("success", function(file,response) {
            let str =  response.replace(/\"/g, '');
            imageDataArray.push(str)
    
            fileList[i] = {
                "serverFileName": str,
                "fileName": file.name,
                "fileId": i
            };
       
            i += 1;
    
            // $('#item_images').val(imageDataArray);
            console.log(imageDataArray)
            console.log(fileList)
        });
    
        uploader.on("removedfile", function(file) {
            var rmvFile = "";
            for (var f = 0; f < fileList.length; f++) {
    
                if (fileList[f].fileName == file.name) {
    
                    // remove file from original array by database image name
                    imageDataArray.splice(imageDataArray.indexOf(fileList[f].serverFileName), 1);
                    // $('#item_images').val(imageDataArray);
    
                    // get removed database file name
                    rmvFile = fileList[f].serverFileName;
    
                    // get request to remove the uploaded file from server
                    $.get( "{{ config('common.DB_HOST_STORAGE') . '/api/removeUpload' }}", { file: rmvFile } )
                      .done(function( data ) {
                          console.log(data);
                      });
    
                    // reset imageDataArray variable to set value in crud form
                    console.log(imageDataArray)
                }
            }
        });
    
    
    });
    
    
    
    </script>
@endsection
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    
@endsection

