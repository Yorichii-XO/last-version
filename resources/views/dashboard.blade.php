<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iNl7iKlURnO3mHO2YFZCJ1fbsgFfNistP025L2tuXFUF5pBb2BO5th" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/48adce65bb.js" crossorigin="anonymous"></script>
  <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

  <title>Document</title>
</head>

<style>
   .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }


        .card-body {
            padding: 20px;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-rgb(7, 20, 211)s: 50%;
            height: 65px;
            width: 65px;
            margin-bottom: 20px;
        }

        .icon1 {
            font-size: 30px;
            color: white;
            text-align: center;
            

        }
.font-weight-bolderr{
  margin-left:    70px;
  margin-top: -76px;

}

.yi{
  margin-left:  150px;
  margin-top: -76px;
}
        .numbers {
            text-align: center;
        }

        .card-title {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .text-success {
            color: #28a745;
        }

        .text-danger {
            color: #dc3545;
        }
  .text-center-100 {
      justify-content: center;
  }

  .text-center-200,
  .text-center-300,
  .text-center-400,
  .text-center-500 {
      justify-content: center;
  }

  .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
  }

  .search-form {
      width: 490px;
      margin-left: 240px;
  }

  @media (max-width: 767px) {
      .search-form {
          margin-left: 10px;
          width: 100%;
          margin-top: 70px;
      }

      
  }

  @media (max-width: 991px) {
      .col-xl-3 {}
  }

  @media (max-width: 767px) {
      .col-sm-9,
      .col-xl-3 {}
  }

  @media (max-width: 575px) {
      .col-8 {
          flex-direction: column;
          display: flex;
z-index: 1;
      }
  }
  ul#onlineUsersList {
                  display: flex;
                  padding: 0;
                  margin-left: 10%;
                }
          
                ul#onlineUsersList li {
                  margin-right: 10px;
                  padding: 8px;
                  cursor: pointer;
                  border-radius: 20px;
                  color: #60ee81
                }
          
                
                .grid-container {
            display: grid;

            grid-template-columns: repeat(2, 1fr); /* Updated to three columns */
         
            gap: 16px;
            margin: 20px;
            
        }

        @media (max-width: 640px) {
            .grid-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .grid-item {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .grid-item:hover {
            transform: scale(1.05);
        }
      
        .card1 {
            padding: 20px;
        }

        .card1 h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .card1 p {
            color: #666;
        }

        .grid-link {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            background-color: #03297D;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .grid-link:hover {
            background-color: #00FFFF;
            color:03297D;
        }

        /* Icon styles */
        .icon {
            font-size: 33px;
            margin: 10px;
            padding-top:15px;
          
            background-color: #00FFFF;
            border-radius: 50%;
            height: 60px;
            width: 60px;
            text-align:center;
             
        }
        .background{
          background-color: #ffffff;
          width:100%;
          padding:50px;
          border-radius: 10px;
          margin-top:30px;
        }

      .banner-container {
      display: flex;
      align-items: center;
      justify-content: end;
      padding: 2rem;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top:20px;
      
    }

    .text-container {
      max-width: 80%;
    }

    .text-container h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .text-container p {
      font-size: 1rem;
      color: #555;
    }

    .image-container img {
      width: 70%;
      height:20%;
      border-radius: 8px;
      padding:0;
      margin:0;
    }
    
    .list-unstyled {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap; 

}
      
</style>
<body>
  @extends('layouts.user_type.auth')

@section('content')
@php
  $societes = session('societes');
  $associe = session('associe');
  $gerants = session('gerants');
  $onlineUsers = session('onlineUsers');

@endphp

<div style="margin-top:-80px;" class="text-center-500">
  <form class="search-form" method="get" action="{{ route('societes.search') }}">
      <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
          <div style="margin-right: 25px" class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
          </div>
      </div>
  </form>
  <br/>
  <br/>
</div>
  
<div class="row">

  
  <div class="col-lg-4 col-md-6 mb-3">
      <div class="card">
          <div class="card-body text-center">
              <div class="icon-container">
                  <span class="icon1"><i style="color:  rgb(35, 56, 173)" class="fas fa-user"></i></span>
              </div>
              <div class="numbers">
                  <h4 class="font-weight-bolderr">
                      @if(session('user_email'))
                      <p style="margin-top: 18px" class="text-body font-weight-bold px-0 text-dark"><span class="text-dark">{{ session('user_email')}}</span></p>
                  @endif
                  </h4>
              </div>
          </div>
      </div>
  </div>

  <!-- Card 2 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card">
        <div class="card-body text-center">
          
            <div class="icon-container " style="height: 33px">
              <div class="numbers">
                <a href="https://www.nettoyage-casablanca-maroc.com/">
                  <h5 class="font-weight-bolderr mb-0">
                      <p style="margin-top: 30px;margin-left:25px;" class="text-body font-weight-bold px-0 text-dark">
                          <span class="text-dark"> Brighten Consulting</span>
                      </p>
                  </h5></a>
              </div>
                <span class="icon1">
                    <img style="transform:scale(0.06) ;" src="{{ asset('assets/img/fiduciaire.png') }}" alt="WinBest Logo">
                </span>
            </div>
           
        </div>
    </div>
</div>

  <!-- Card 3 -->
  <div class="col-lg-4 col-md-6 mb-4">
    <div  class="card">
      <div class="card-body text-center">
          <div class="icon-container" >
              <span class="icon1"><i style="color: rgb(35, 56, 173)" class="fas fa-users"></i></span>
          </div>
          <div class="numbers">
            <h6  class="font-weight-bolderr mb-0" style="margin-top: -90px">
              @auth
                  @if ($onlineUsers)
                      <style>
                        
                          .list-unstyled {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap; /* Wrap the list items to the next line if they exceed the container width */
}
.numbers {
            text-align: center;
        }

        .card-title {
            margin-top: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-left:10px;
        }

        .text-success {
            color: #8af1a2;
        }

        .text-danger {
            color: #dc3545;
        }
        .dot {
        width: 6px;
        height: 19px;
        top: -232px;
        background-color: #42b883; /* Change the color to your desired color */
        border-radius: 50%;
        display: inline-block;
        margin-left: 9px; /* Adjust the margin as needed */
    }

    .icon {
            font-size: 33px;
            margin: 10px;
            padding-top:15px;
          
            background-color: #00FFFF;
            border-radius: 50%;
            height: 60px;
            width: 60px;
            text-align:center;
             
        }
                          
                      </style>
          
          <ul class="list-unstyled">
            @foreach ($onlineUsers as $user)
                              @if (!session('loggedOut') || $user->id === auth()->id())

                                  <li>
                                    <h4  class="card-title text-sm mb-0 text-capitalize font-weight-bolder text-success">
                                        <i class="fa-solid fa-user text-success"></i>&nbsp; {{ $user->name }}
                                    </h4>
                                </li>
    

                              @endif
                          @endforeach
                      </ul>
                  @else
                      <p>No users currently logged in</p>
                  @endif
              @endauth
          </h6>
          
            </div>
          </div>
      </div>
    
    </div>
    
    </div>
    </div>
      
      <div class="row mt-2">
        <div class="col-lg-7 mb-lg-3 mb-0 ">
          <div class="card ">
            <div class="card-body p-4">
              <div class="row mb-lg-6">
                <div class="col-lg-5 ">
                  <div class="d-flex flex-column">
                    <h5 class="font-weight-bold">WINBEST NETTOYAGE</h5>
                    <p class="mb-4">Société de nettoyage à Casablanca Maroc, entreprise expert dans le nettoyage au Maroc avec
                      plus de 20 ans d'expériences dans le domaine du nettoyage.
                      <br/><br/>
                      <a class="text-dark text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="https://www.nettoyage-casablanca-maroc.com/">
                        Voir plus
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                      </a>
                  </div>
                </div>
                <div class="col-lg-6 ms-auto text-center mt-5 mt-lg-0  ">
                  <div class="bg-gradient-primary border-radius-lg">
                    <img src="../assets/img/ivancik.jpg" class="position-absolute  w-50 top-0 d-lg-block d-none border-radius-lg" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center ">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card  p-1">
            <div class="overflow-hidden h-100 position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/meeting.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bold
                 mb-4 pt-2"> <u> Société de Nettoyage à Casablanca, Maroc</u></h5>
                <p class="text-white">
                  

                  Nous sommes une entreprise de nettoyage basée à Casablanca, Maroc,
                   reconnue pour son expérience et sa compétitivité. Notre service s'étend aux particuliers, aux professionnels et aux collectivités. Nous nous spécialisons dans le nettoyage industriel ainsi que dans divers travaux à Casablanca et à travers tout le Maroc. Notre engagement est
                   de fournir des services de nettoyage de qualité supérieure à nos clients. <br/>             
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="https://www.nettoyage-casablanca-maroc.com/">
                  Voir plus
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
      <div class="background">
        <div>
            <h4 style="color:rgb(13, 53, 128);font-size:40px;text-align:center; padding:20px;font-weight:bold">NOS SERVICES</h4>
          </div>
          <div class="horizontal">
        
          </div>
          <div class="grid-container">
            <!-- Service 1 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de nettoyage bureaux</h5>
        <br>
        <i class="icon fas fa-building"></i>                    <br>
                    <p>Pour accroître la productivité, il est conseillé de consacrer tous les efforts nécessaires pour créer une atmosphère agréable et une ambiance conviviale pour vos salariés...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-nettoyage-bureaux-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        
            <!-- Service 2 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de femmes de ménage</h5>
        <br>
        <i class="icon fas fa-broom"></i>                    <br>
                    <p>Faites appel à notre société de femmes de ménage à Casablanca, des spécialistes pour prendre soin de votre intérieur. WINBEST NETTOYAGE est la solution si vous voulez prendre soin de votre domicile...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-femme-menage-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        
            <!-- Service 3 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de nettoyage et d'entretien de canapés</h5>
        <br>
        <i class="icon fas fa-couch"></i>                    <br>
                    <p>Pensez à nettoyer votre canapé et vos fauteuils pour préparer la saison estivale ou en fin de saison. Désinfectez, nettoyez et enlevez les mauvaises odeurs pour assainir votre intérieur...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-nettoyage-canapes-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        
            <!-- Service 4 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de nettoyage des restaurants</h5>
        <br>
        <i class="icon fas fa-utensils"></i>                    <br>
                    <p>Avec une équipe compétente et professionnelle, notre entreprise propose une variété de techniques de nettoyage, respectant les lois et réglementations en vigueur...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-nettoyage-restaurants-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        
            <!-- Service 5 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de nettoyage de vitres</h5>
        <br>
        <i class="icon fas fa-window-maximize"></i>   
                    <br>
                    <p>Notre équipe expérimentée de nettoyage professionnel de vitres à Casablanca et dans tout le Maroc est spécialisée dans divers environnements...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-nettoyage-vitres-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        
            <!-- Service 6 -->
            <div class="grid-item">
                <div class="card1">
                <h5>Société de nettoyage de parquets</h5>
        <br>
        <i class="icon fas fa-paint-roller"></i>
        <br>
                    <p>Le ponçage à Casablanca permet de retrouver le bois brut, d'aplanir la surface, d'effacer les taches et d'enlever la couche de traitement précédente si le parquet avait été vitrifié, ciré ou huilé...</p>
                    <a href="https://www.nettoyage-casablanca-maroc.com/societe-nettoyage-parquets-casablanca.html" class="grid-link">Learn More</a>
                </div>
            </div>
        </div>
  <script>
    // Add this script to handle sidebar toggling
    $(document).ready(function () {
        $('#iconNavbarSidenav').on('click', function () {
            $('body').toggleClass('g-sidenav-pinned');
            $('body').toggleClass('g-sidenav-hidden');
        });
    });
</script>
@endsection
@push('dashboard')
  <script>
    window.onload = function() {
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
@endpush


</body>
</html>