
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <meta name="theme-name" content="mono" />

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('assets/auth/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/auth/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

  <link href="{{asset('assets/auth/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
<link href="{{asset('assets/auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
 <link href="{{asset('assets/auth/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <link href="{{asset('assets/auth/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link id="main-css-href" rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}" />

  <link href="{{asset('assets/auth/images/favicon.png')}}" rel="shortcut icon" />

  <script src="{{asset('assets/auth/plugins/nprogress/nprogress.js')}}"></script>
</head>

  <body class="navbar-fixed sidebar-fixed" id="body">

    <div id="toaster"></div>


    <div class="wrapper">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('layouts.partials.aside');

       <div class="page-wrapper">

          <!-- Header -->
          @include('layouts.partials.header');

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->

        {{-- @include('layouts.partials.content'); --}}

        @include('layouts.partials.content');

        {{-- @include('layouts.partials.footer'); --}}

        @include('layouts.partials.footer');

      </div>
    </div>
                    <script src="{{asset('assets/auth/plugins/jquery/jquery.min.js')}}"></script>
                    <script src="{{asset('assets/auth/js/bootstrap.bundle.min.js')}}"></script>
                    <script src="{{asset('assets/auth/plugins/simplebar/simplebar.min.js')}}"></script>
                    <script src="https://unpkg.com/hotkeys-{{asset('assets/auth/js/dist/hotkeys.min.js')}}"></script>

                    <script src="{{asset('assets/auth/plugins/apexcharts/apexcharts.js')}}"></script>

                    <script src="{{asset('assets/auth/js/jquery.dataTables.min.js')}}"></script>

                    <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
                    <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
                    <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>

                    <script src="{{asset('assets/auth/plugins/daterangepicker/moment.min.js')}}"></script>
                    <script src="{{asset('assets/auth/plugins/daterangepicker/daterangepicker.js')}}"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>

                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

                    <script src="{{asset('assets/auth/plugins/toaster/toastr.min.js')}}"></script>

                    <script src="{{asset('assets/auth/js/mono.js')}}"></script>
                    <script src="{{asset('assets/auth/js/chart.js')}}"></script>
                    <script src="{{asset('assets/auth/js/map.js')}}"></script>
                    <script src="{{asset('assets/auth/js/custom.js')}}"></script>

                    @yield('main')
  </body>
</html>
