
<!DOCTYPE html>

@if (\Request::is('rtl'))
  <html dir="rtl" lang="ar">
@else
  <html lang="en" >
@endif

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  
  @if (env('IS_DEMO'))
      <x-demo-metas></x-demo-metas>
  @endif

  <style>
    title::first-line::first-letter {
      color: rgb(128, 60, 0);
    }
    footer .container-fluid{

      margin-left: 590px;
      margin-top:100px;
    }
    @media (max-width: 767px) {
     footer .footer {
      width: 100%;
      left: -2430px; 
      margin-top:129px;

    
    }
  }
   
    
  
  </style>

  <title>Brighten Consulting</title>  <!--     Fonts and icons     -->
  <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link  href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
  <link  style="width: 100px;" rel="icon" href="../assets/img/fiduciaire.png" type="image/x-icon">
</head>
<style>
  
</style>
<body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
  
  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

 
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  @stack('rtl')
  @stack('dashboard')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  <footer  class="footer pt-4 ">
    <div class="container-fluid">
        <div class="row  ">
            <div class="col-lg-6 mb-lg-0 mb-9">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear()) 
                    </script> <i class="fa fa-heart"></i> 
                    <a href="https://www.nettoyage-casablanca-maroc.com/" class="font-weight-bold" target="_blank"><b>Copyright © WINBEST NETTOYAGE 2024.</b>
                    </a>
                </div>
            </div>
          
        </div>
    </div>
</footer>



</body>

</html>
