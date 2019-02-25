<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('images/backend_images/favicon.ico')}}" type="image/ico" />

    <title> @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/backend_vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/backend_vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/backend_vendor/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/backend_vendor/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/backend_vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/backend_vendor/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/backend_vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/frontend_css/middle_content.css')}}" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{asset('build/backend_build/css/custom.min.css')}}" rel="stylesheet">


    @yield('section-css')



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        @include('admin_layout.admin_sidebar_header')

            <br />

            <!-- sidebar menu -->
             @include('admin_layout.admin_sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          @include('admin_layout.admin_sidebar_footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
         @include('admin_layout.admin_header')
        <!-- /top navigation -->

        <!-- page content -->
         @yield('Middle')
        <!-- /page content -->

        <!-- footer content -->
          @include('admin_layout.admin_footer')
        <!-- /footer content -->
      </div>
    </div>

    
    @yield('section-js')

    <!-- jQuery -->
    <script src="{{asset('vendors/backend_vendor/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/backend_vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/backend_vendor/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/backend_vendor/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/backend_vendor/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('vendors/backend_vendor/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors/backend_vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/backend_vendor/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('vendors/backend_vendor/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('vendors/backend_vendor/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/backend_vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/backend_vendor/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('vendors/backend_vendor/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/backend_vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/backend_vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/backend_build/js/custom.min.js')}}"></script>

	
  </body>
</html>
