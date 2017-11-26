<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

{{-- parsley --}}
<script src="{{ asset('js/libs/parsley.js') }}"></script>

{{-- moment --}}
<script src="{{ asset('js/libs/moment.min.js') }}"></script>



{{-- daterangepicker --}}
<script src="{{ asset('js/libs/daterangepicker.js') }}"></script>




{{-- home made scripts --}}
<script src="{{ asset('js/home_made/date_time.js') }}"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
