<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png')}}">
  <title>
    {{'Formulario'}}
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <link href="{{ asset('/assets/css/selectize.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('/assets/css/toastr.css')}}" rel="stylesheet" />
  {{--fileinput--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap-icons.min.css')}}">
   
  <!-- the fileinput plugin styling CSS file -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/fileinput.min.css')}}">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          @yield('nav_superior')
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-200 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        @yield('content')        
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js')}}"></script>
  <!--   Core JS Files   -->
  <script src="{{ asset('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('/assets/js/selectize.js')}}"></script>
  <script src="{{ asset('/assets/js/toastr.js')}}"></script>
  @include('layouts.validaciones')

  {!! Toastr::message() !!}
  @yield('js')
    <script type="text/javascript">   
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
          'use strict';
          window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              });
          }, false);
      })();
    </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/assets/js/material-dashboard.min.js?v=3.0.4')}}"></script>
</body>
</html>