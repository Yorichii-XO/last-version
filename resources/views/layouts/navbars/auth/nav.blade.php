<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add these links to your HTML head section -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <title>Document</title>
</head>
<style>
     

       
    @media (max-width: 767px) {
            .navbar-nav {
                width: 100%;
                margin-top: -43px;
                margin-right: -34%;
            }
            .nav-item.dropdown,.gllo  {
                display: none !important;
            }

            .nav-item.d-flex.align-items-center.ps-4 {
                display: none !important;
            }
            .dark-color .nav-item,
            .dark-color .nav-link {
                color: black !important;
            }
        }


</style>
<body >
    <div >
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class=" breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
                </ol>
                <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
                

            </nav>
                <ul class="navbar-nav  justify-content-end">
                  
                <li class="nav-item d-flex align-items-center text-dark" >
                    <a href="{{ url('/logout')}}" class=" text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1 text-dark"></i>
                        <span class="d-sm-inline d-none text-dark">Se déconnecter</span>
                    </a>
                </li>&nbsp; &nbsp;<br/>
              
                <li class="gllo nav-item px-4 d-flex align-items-center text-dark" style="color: black">
                    <a  href="{{ route('profile') }}" class="text-body p-0 text-dark">
                        <span class="text-dark">
                            <i class='far fa-sun'></i>



                                </span>  
                          </a>
                </li>
              
                <li class=" gllo nav-item dropdown pe-2 d-flex align-items-center" >
                    <a href="javascript:;" class=" text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer text-dark"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end me-sm-n4 text-dark" aria-labelledby="dropdownMenuButton">
                      
                        <li class="mb-2 text-dark">
                            @forelse ($notifications ?? [] as $notification)
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1 text-dark">
                                        <div class="my-auto text-dark">
                                            <img src="../assets/img/" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">{{ $notification->data['gerant']['name'] }}</span>
                                                @if ($notification->data['action'] === 'created')
                                                    created.
                                                @elseif ($notification->data['action'] === 'updated')
                                                    updated.
                                                @elseif ($notification->data['action'] === 'deleted')
                                                    deleted.
                                                @endif
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 text-dark">
                                                <i class="fa fa-clock me-1 text-dark"></i>
                                                {{ $notification->created_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p class="text-center text-muted mb-0">Pas de nouvelles notifications</p>
                            @endforelse
                        </li>
                     
                    </ul>
                </li>&nbsp;&nbsp;
                <li class="nav-item d-xl-none  d-flex align-items-center">
                    <a href="javascript:;" class="text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            
                </ul>
            </div>
        </div>
    </nav>
</div>
    <script>
        // Your existing script tags and other content
    
        // Add this script to handle sidebar toggling
        $(document).ready(function () {
            $('#iconNavbarSidenav').on('click', function () {
                $('body').toggleClass('g-sidenav-pinned');
                $('body').toggleClass('g-sidenav-hidden');
            });
        });
    </script>
    
</body>
</html>