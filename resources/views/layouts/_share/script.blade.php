<script src="{!! asset('js/all.js') !!}" type="text/javascript"></script>
<!-- <script src="{!! asset('assets/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/demo/base/scripts.bundle.js') !!}"></script>
<script src="{!! asset('assets/vendors/base/vendors.bundle.js') !!}"></script>
<script src="{!! asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') !!}"></script>
<script src="{!! asset('assets/app/js/dashboard.js') !!}"></script>
<script src="{!! asset('vendors/jquery.repeater/src/lib.js') !!}"></script>
<script src="{!! asset('vendors/jquery.repeater/src/jquery.input.js') !!}"></script>
<script src="{!! asset('vendors/jquery.repeater/src/repeater.js') !!}"></script>
<script src="{!! asset('vendors/jquery-form/dist/jquery.form.min.js') !!}"></script>
<script src="{!! asset('vendors/block-ui/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-maxlength/src/bootstrap-maxlength.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-switch/dist/js/bootstrap-switch.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js') !!}"></script>
<script src="{!! asset('vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-select/dist/js/bootstrap-select.js') !!}"></script>
<script src="{!! asset('vendors/select2/dist/js/select2.full.js') !!}"></script>
<script src="{!! asset('vendors/typeahead.js/dist/typeahead.bundle.js') !!}"></script>
<script src="{!! asset('vendors/handlebars/dist/handlebars.js') !!}"></script>
<script src="{!! asset('vendors/inputmask/dist/jquery.inputmask.bundle.js') !!}"></script>
<script src="{!! asset('vendors/inputmask/dist/inputmask/inputmask.date.extensions.js') !!}"></script>
<script src="{!! asset('vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js') !!}"></script>
<script src="{!! asset('vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js') !!}"></script>
<script src="{!! asset('vendors/nouislider/distribute/nouislider.js') !!}"></script>
<script src="{!! asset('vendors/owl.carousel/dist/owl.carousel.js') !!}"></script>
<script src="{!! asset('vendors/autosize/dist/autosize.js') !!}"></script>
<script src="{!! asset('vendors/clipboard/dist/clipboard.min.js') !!}"></script>
<script src="{!! asset('vendors/ion-rangeslider/js/ion.rangeSlider.js') !!}"></script>
<script src="{!! asset('vendors/dropzone/dist/dropzone.js') !!}"></script>
<script src="{!! asset('vendors/summernote/dist/summernote.js') !!}"></script>
<script src="{!! asset('vendors/markdown/lib/markdown.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-markdown/js/bootstrap-markdown.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js') !!}"></script>
<script src="{!! asset('vendors/jquery-validation/dist/jquery.validate.js') !!}"></script>
<script src="{!! asset('vendors/jquery-validation/dist/additional-methods.js') !!}"></script>
<script src="{!! asset('vendors/bootstrap-notify/bootstrap-notify.min.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/base/bootstrap-notify.init.js') !!}"></script>
<script src="{!! asset('vendors/toastr/build/toastr.min.js') !!}"></script>
<script src="{!! asset('vendors/jstree/dist/jstree.js') !!}"></script>
<script src="{!! asset('vendors/raphael/raphael.js') !!}"></script>
<script src="{!! asset('vendors/morris.js/morris.js') !!}"></script>
<script src="{!! asset('vendors/chartist/dist/chartist.js') !!}"></script>
<script src="{!! asset('vendors/chart.js/dist/Chart.bundle.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/charts/chart.init.js') !!}"></script>
<script src="{!! asset('vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') !!}"></script>
<script src="{!! asset('vendors/vendors/jquery-idletimer/idle-timer.min.js') !!}"></script>
<script src="{!! asset('vendors/waypoints/lib/jquery.waypoints.js') !!}"></script>
<script src="{!! asset('vendors/counterup/jquery.counterup.js') !!}"></script>
<script src="{!! asset('vendors/es6-promise-polyfill/promise.min.js') !!}"></script>
<script src="{!! asset('vendors/sweetalert2/dist/sweetalert2.min.js') !!}"></script>
<script src="{!! asset('vendors/js/framework/components/plugins/base/sweetalert2.init.js') !!}"></script>
<script src="{!! asset('vendors/wizard/wizard.js') !!}"></script>
<script src="{!! asset('assets/demo/custom/crud/wizard/wizard.js') !!}"></script>
<script src="{!! asset('assets/snippets/custom/pages/user/login.js') !!}"></script> -->
<script>
			$('body').show();
			NProgress.start();
			setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 2000);

			if("{{ Illuminate\Support\Facades\Auth::user()->profile->lop_id }}"){
				$('.isClass').removeClass("d-none");
			}

			$( function() {
					$('#ul-home').draggable({ opacity: 0.7, helper: "clone" });
					$( "#sortable" ).sortable({
					revert: true
					});
			});
</script>
<script src="{{ asset('moment/vi.min.js')}}"></script>
<script src="{{ asset('config_firebase/firebase.js')}}"></script>
<script src="{{ asset('config_firebase/firebase-analytics.js')}}"></script>
<script src="{{ asset('axios/axios.min.js')}}"></script>
<script src="{{ asset('assets/jquery/jquery-ui.js')}}"></script>
