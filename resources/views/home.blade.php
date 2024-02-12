<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/48adce65bb.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <title>Document</title>
</head>
<style>
  
 
  .context {
      width: 100%;
      position: absolute;
      top: 50vh;
      z-index: 1000;
      display: grid;
      place-items: center;
      margin-top:-100px;
    }

    .context h1 {
      text-align: center;
      color: #fff;
      font-size: 50px;
    }

.topheader{
    line-height: 1.5;
}

        @media (max-width: 991px) {
            /* Add space between list items in mobile view */
            .navbar-nav {
                margin-top: 10px; /* Adjust the spacing as needed */
            }

            .navbar-nav .nav-item1 {
                margin-bottom: 10px; /* Adjust the spacing as needed */
            }
            .context h1{
              margin-top: -169px;
            }
        }
      
</style>
<body>
  @extends('layout2.master2')
@section('content')
<div class="context">
  <h1 class="topheader">Whenever you see a successful <br> business, someone once made <br> a courageous decision</h1>
  <br>
  <div class="btn2"><a href="/Login"><button class="btn">Get Started</button></a></div>
</div>

<div class="area">
  <ul class="circles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>

<div class="service-container">
    <div class="service">
      <i class="icon fas fa-laptop-code"></i>
      <h3>Web Development</h3>
      <p>Create beautiful and responsive websites tailored to your needs.</p>
    </div>

    <div class="service">
      <i class="icon fas fa-mobile-alt"></i>
      <h3>Mobile App Development</h3>
      <p>Build innovative mobile applications for iOS and Android platforms.</p>
    </div>

    <div class="service">
      <i class="icon fas fa-chart-line"></i>
      <h3>Digital Marketing</h3>
      <p>Drive your online presence with effective digital marketing strategies.</p>
    </div>

    <div class="bottom-container">

  <div class="testimonial">
    
    <div class="client-say">
      <p>"Working with this team was a game-changer for my business. Their creativity and dedication exceeded my expectations."</p>
      <p class="client-name">- John Doe, CEO</p>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>

    </div>
    <div class="client-say">
      <p>"Working with this team was a game-changer for my business. Their creativity and dedication exceeded my expectations."</p>
      <p class="client-name">- John Doe, CEO</p>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      
    </div>
    <div class="client-say">
      <p>"Working with this team was a game-changer for my business. Their creativity and dedication exceeded my expectations."</p>
      <p class="client-name">- John Doe, CEO</p>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
    </div>
  </div>
</div>


</div>

@endsection
  
</body>
</html>