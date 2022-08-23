<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset("public/backend/assets/images/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("public/backend/assets/images/favicon.png")}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/font-awesome.css")}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/icofont.css")}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/themify.css")}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/flag-icon.css")}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/feather-icon.css")}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/scrollbar.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/chartist.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/owlcarousel.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/prism.css")}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/vendors/bootstrap.css")}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/style.css")}}">
    <link id="color" rel="stylesheet" href="{{ asset("public/backend/assets/css/color-1.css")}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("public/backend/assets/css/responsive.css")}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        @include('layouts.include.header')
      </div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          @include('layouts.include.sidebar')
        </div>
        <!-- Page Sidebar Ends-->
        {{-- Dynamic Content START --}}
        <main class="py-4">
            @yield('content')
        </main>
        {{-- Dynamic Content END --}}
        <!-- footer start-->
        <footer class="footer">
            @include('layouts.include.footer')
        </footer>
        <script>
          var map;
          function initMap() {
            map = new google.maps.Map(
              document.getElementById('map'),
              {center: new google.maps.LatLng(-33.91700, 151.233), zoom: 18});

            var iconBase =
              '{{ asset("public/backend/assets/images/dashboard-2/")}}';

            var icons = {
              userbig: {
                icon: iconBase + '1.png'
              },
              library: {
                icon: iconBase + '3.png'
              },
              info: {
                icon: iconBase + '2.png'
              }
            };

            var features = [
              {
                position: new google.maps.LatLng(-33.91752, 151.23270),
                type: 'info'
              }, {
                position: new google.maps.LatLng(-33.91700, 151.23280),
                type: 'userbig'
              },  {
                position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
                type: 'library'
              }
            ];

            // Create markers.
            for (var i = 0; i < features.length; i++) {
              var marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map
              });
            };
          }
        </script>
        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap"></script>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset("public/backend/assets/js/jquery-3.5.1.min.js")}}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset("public/backend/assets/js/bootstrap/bootstrap.bundle.min.js")}}"></script>
    <!-- feather icon js-->
    <script src="{{ asset("public/backend/assets/js/icons/feather-icon/feather.min.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/icons/feather-icon/feather-icon.js")}}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset("public/backend/assets/js/scrollbar/simplebar.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/scrollbar/custom.js")}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset("public/backend/assets/js/config.js")}}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset("public/backend/assets/js/sidebar-menu.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/chart/chartist/chartist.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/chart/chartist/chartist-plugin-tooltip.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/chart/apex-chart/apex-chart.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/chart/apex-chart/stock-prices.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/prism/prism.min.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/clipboard/clipboard.min.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/counter/jquery.waypoints.min.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/counter/jquery.counterup.min.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/counter/counter-custom.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/custom-card/custom-card.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/owlcarousel/owl.carousel.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/dashboard/dashboard_2.js")}}"></script>
    <script src="{{ asset("public/backend/assets/js/tooltip-init.js")}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset("public/backend/assets/js/script.js")}}"></script>
    {{-- <script src="{{ asset("public/backend/assets/js/theme-customizer/customizer.js")}}"></script> --}}
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
