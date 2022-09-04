<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("public/backend/assets/images/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset("public/backend/assets/images/favicon.png")}}" type="image/x-icon">
    <title>Keto</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/font-awesome.css")}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/icofont.css")}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/themify.css")}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/flag-icon.css")}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/feather-icon.css")}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/owlcarousel.css")}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/vendors/bootstrap.css")}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/style.css")}}">
    <link id="color" rel="stylesheet" href="{{asset("public/backend/assets/css/color-1.css")}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset("public/backend/assets/css/responsive.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("backend/toastr/toastr.min.css")}}">

  </head>
  <body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
      <!-- Page Body Start            -->
      <div class="landing-home">
        <ul class="decoration">
          <li class="one"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/decore/1.png")}}" alt=""></li>
          <li class="two"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/decore/2.png")}}" alt=""></li>
          <li class="three"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/decore/4.png")}}" alt=""></li>
          <li class="four"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/decore/3.png")}}" alt=""></li>
          <li class="five"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/2.png")}}" alt=""></li>
          <li class="six"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/decore/cloud.png")}}" alt=""></li>
          <li class="seven"><img class="img-fluid" src="{{asset("public/backend/assets/images/landing/2.png")}}" alt=""></li>
        </ul>
        <div class="container-fluid">
          <div class="sticky-header">
            @include('frontend.include.header')
          </div>
          <main class="py-4">
            @yield('content')
          </main>
        </div>
      </div>

    </div>
    <!-- latest jquery-->
    <script src="{{asset("public/backend/assets/js/jquery-3.5.1.min.js")}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset("public/backend/assets/js/bootstrap/bootstrap.bundle.min.js")}}"></script>
    <!-- feather icon js-->
    <script src="{{asset("public/backend/assets/js/icons/feather-icon/feather.min.js")}}"></script>
    <script src="{{asset("public/backend/assets/js/icons/feather-icon/feather-icon.js")}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset("public/backend/assets/js/config.js")}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset("public/backend/assets/js/owlcarousel/owl.carousel.js")}}"></script>

    <script src="{{asset("public/backend/assets/js/form-wizard/form-wizard-two.js")}}"></script>
    <script src="{{asset("public/backend/assets/js/tooltip-init.js")}}"></script>
    <script src="{{asset("public/backend/assets/js/animation/wow/wow.min.js")}}"></script>
    <script src="{{asset("public/backend/assets/js/landing_sticky.js")}}"></script>
    <script src="{{asset("public/backend/assets/js/landing.js")}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset("public/backend/assets/js/script.js")}}"></script>
    <script src="{{asset("public/backend/toastr/toastr.min.js")}}"></script>

    <!-- login js-->
    <!-- Plugin used-->


    <script>
        @if(Session::has('message'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
            toastr.warning("{{ session('warning') }}");
        @endif

    </script>
  </body>
</html>
