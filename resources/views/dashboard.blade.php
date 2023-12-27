@extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-90px;">
  <form style="margin-left: 250px;" method="get" action="{{ route('societes.search') }}">
      <div  style="width: 440px" class="ms-md-3 pe-md-3 d-flex align-items-center">
          <div style="margin-right: 15px" class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Type here..." name="search"  value="{{ request('search') }}">
          </div>
          </div>
      </form></div><br/>
  <div  class="row">
    
    <div class="col-xl-3 col-sm-9 mb-xl-0 mb-9">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Associéte</p>
                <h5 class="font-weight-bolder mb-0">
                  53
                  <span class="text-success text-sm font-weight-bolder">+155%</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div  class="border-radius-md">
                <?xml version="1.0" ?><svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z"/></svg>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-9 mb-xl-0 mb-9">
      <div class="card">
        <div class="card-body p-4">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's moneeey</p>
                <h5 class="font-weight-bolder mb-0">
                  $300
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                </h5>
              </div>
            </div>
            <div  class="col-4 text-end">
              <div  class="border-radius-md">
                <?xml version="1.0" ?><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g id="Loaning"><path d="M11.5637,13.3492c5.32-.46,8.15,1.45,9.26,2.49a19.2359,19.2359,0,0,0,8.51,2.06,17.8676,17.8676,0,0,0,8.7-2.28c1.24-1.05,4.04-2.7,9.02-2.27a1.8121,1.8121,0,0,0,.32-3.61,16.0256,16.0256,0,0,0-10.67,2.37l1.97-6.19a2.5449,2.5449,0,0,0-2.43-3.31h-13.86a2.5405,2.5405,0,0,0-2.41,3.37l2.14,6.27c-2.03-1.43-5.52-2.98-10.86-2.51a1.8116,1.8116,0,1,0,.31,3.61Z"/><path d="M52.9939,44.2392a11.7215,11.7215,0,0,1-1.103-4.2947,11.04,11.04,0,0,1-6.065-19.6655,13.7977,13.7977,0,0,0-5.1421-3.07,20.8415,20.8415,0,0,1-11.23,3.35,22.6771,22.6771,0,0,1-11.48-3.24c-10.09,3.61-10.97,16.15-10.85,21.61a11.7472,11.7472,0,0,1-1.15,5.31l-3.25,6.81a7.0607,7.0607,0,0,0,6.37,10.11h40.78a7.0657,7.0657,0,0,0,6.38-10.11ZM31.2056,49.9775H30.811v3.31a1.5,1.5,0,0,1-3,0v-3.31H23.4272a1.5,1.5,0,1,1,0-3h7.7784a2.49,2.49,0,0,0,0-4.98H27.7163a5.7893,5.7893,0,0,1,0-11.5786h.0947V26.7553a1.5,1.5,0,0,1,3,0v3.6641H34.5a1.5,1.5,0,0,1,0,3H27.7163a2.7893,2.7893,0,0,0,0,5.5786h3.4893a5.49,5.49,0,0,1,0,10.98Z"/><path d="M52.7009,20.567A8.3593,8.3593,0,1,0,61.06,28.9262,8.3593,8.3593,0,0,0,52.7009,20.567Zm3.4783,9.5765H54.0351v2.2607a1.3346,1.3346,0,0,1-2.6691,0V30.1435H49.2226a1.3346,1.3346,0,1,1,0-2.6692H51.366v-2.026a1.3346,1.3346,0,1,1,2.6691,0v2.026h2.1441a1.3346,1.3346,0,1,1,0,2.6692Z"/></g></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-4">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                <h5 class="font-weight-bolder mb-0">
                  2,300
                  <span class="text-success text-sm font-weight-bolder">+3%</span>
                </h5>
              </div>
            </div>
            <div  class="col-4 text-end">
              <div  class="border-radius-md">
                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   "/></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="5.5" cy="8.5" r="2.5"/></g><g><path d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z"/></g></g></svg>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-4">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">New Gérants</p>
                <h5 class="font-weight-bolder mb-0">
                  +3,462
                  <span class="text-danger text-sm font-weight-bolder">-2%</span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div  class="border-radius-md">
                <?xml version="1.0" ?><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="briefcase simple" id="briefcase_simple"><path d="M20,5H17V4a3,3,0,0,0-3-3H10A3,3,0,0,0,7,4V5H4A3,3,0,0,0,1,8V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5ZM9,4a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V5H9ZM4,7H20c2.28,0,.65,6-4,6H13a1,1,0,0,0-2,0H8C3.36,13,1.72,7,4,7ZM20,21H4a1,1,0,0,1-1-1V12.89C5.4,15.34,7.86,15,11,15a1,1,0,0,0,2,0c3.17,0,5.61.33,8-2.11V20A1,1,0,0,1,20,21Z"/></g></svg>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    </div>
  </div>
  
  <div class="row mt-2">
    <div class="col-lg-7 mb-lg-3 mb-0">
      <div class="card">
        <div class="card-body p-4">
          <div class="row mb-lg-6">
            <div class="col-lg-5">
              <div class="d-flex flex-column h-100">
                <p class="mb-1 pt-2 text-bold">Built by developer</p>
                <h5 class="font-weight-bolder">WinBest Dashboard</h5>
                <p class="mb-5">we create this dashboard for provide the services ,the goals to this dashboard to  .</p>
                <a style="color: rgb(13, 32, 172)" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-6 ms-auto text-center mt-5 mt-lg-0">
              <div class="bg-gradient-primary border-radius-lg h-100">
                <img src="../assets/img/ivancik.jpg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none border-radius-lg" alt="waves">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100 p-1">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/meeting.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">WinstBest is ... </h5>
            <p class="text-white"> the big company, Work with Many companys for provide the great services that they need and It has many branches that work on various services.</p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
              Read More
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
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

