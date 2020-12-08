<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		@routes()
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>
			@yield('title')
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>

		<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
		@section('style')
			<style>
				.m-body .m-content{
					padding: 10px 20px;
				}
				.m-portlet__body{
      			    min-height: 500px;
    			}
			</style>
		@endsection
		<!--end::Web font -->

		{{--  style style  --}}
		@include('layouts._share.style')
		{{--  endstyle style  --}}
		@yield('style')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body id="" class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
		<div id="progressbar"  style="width: 0%"></div>
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
            @include('layouts._share.header')

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Sidebar -->
				@include('layouts._share.sidebar')

				<!-- END: Left Sidebar -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper" id="pjax-container">
					
				
					<!--start content -->
					@yield('content')
					<!--end content -->		
					{{-- <div class="zalo-chat-widget" data-oaid="4538938343804913592" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div> --}}

				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			@include('layouts._share.footer')

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

	
		<!-- begin::Quick Sidebar -->
		@include('layouts._share.quick_sidebar')
		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->
		{{-- @include('layouts._share.quick_nav') --}}
		<!-- begin::Quick Nav -->

		  {{--  script  --}}
		  
	

		<!--end::Page Scripts -->
		
		@include('layouts._share.script')
		@include('layouts._share.notify')
		{{--  endscript  --}}
		
		@yield('script')
     {{-- <script src="https://sp.zalo.me/plugins/sdk.js"></script> --}}
	 <!-- <script type="text/javascript" src="{{asset('pjax/jquery.pjax.js')}}"></script> -->
	 <!-- <script type="text/javascript" src="{{asset('pjax/setup-pjax.js')}}"></script> -->
	</body>

	<!-- end::Body -->
</html>