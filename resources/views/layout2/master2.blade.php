<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/48adce65bb.js" crossorigin="anonymous"></script>
  
</head>
<style>
    .service-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 20px;
      border-radius: 10px;
    }

    .service {
      width: 300px;
      margin: 20px;
      padding: 20px;
      text-align: center;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .service:hover {
      transform: scale(1.05);
    }

    .service h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .service p {
      color: #666;
      margin-bottom: 20px;
    }

    .icon {
      font-size: 36px;
      color: #3498db;
      margin-bottom: 10px;
    }
    body {
      font-family: 'Exo', sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden; 
    }


    .navbar {
      background-color: #01257D;
      padding: 15px 0;
      z-index: 1000;
    }

    .navbar-brand {
      font-size: 24px;
      color: #fff;
      font-weight: bold;
    }

    .navbar-toggler {
      border: none;
      color: white;
    }

    .navbar-toggler-icon {
      background-color: white;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
    }

    .nav-item1 {
      margin-right: 10px;
    }

    .nav-link1, .nav-link2 {
      color: white;
      border: none;
      border-radius: 10px;
      font-size:15px;
      padding: 9px 14px;
      transition: background-color 0.3s ease;
      text-decoration: none;
      text-decoration: none;
    }
    a{
        text-decoration: none;
    }

    .nav-link1:hover, .nav-link2:hover {
      background-color: #fff;
      color: #01257D;
    }

    .active {
      background-color: #fff !important;
      color: #01257D;
    }

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

    .area {
      background: #01257D;
      background: -webkit-linear-gradient(to left, #01257D, #01257D);
      width: 100%;
      height: 100vh;
    }

    .circles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: #FFFBEB;
      animation: animate 25s linear infinite;
      bottom: -150px;
    }

    .circles li:nth-child(1) {
      left: 25%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }

    .circles li:nth-child(2) {
      left: 10%;
      width: 20px;
      height: 20px;
      animation-delay: 2s;
      animation-duration: 12s;
    }

    .circles li:nth-child(3) {
      left: 70%;
      width: 20px;
      height: 20px;
      animation-delay: 4s;
    }

    .circles li:nth-child(4) {
      left: 40%;
      width: 60px;
      height: 60px;
      animation-delay: 0s;
      animation-duration: 18s;
    }

    .circles li:nth-child(5) {
      left: 65%;
      width: 20px;
      height: 20px;
      animation-delay: 0s;
    }

    .circles li:nth-child(6) {
      left: 75%;
      width: 110px;
      height: 110px;
      animation-delay: 3s;
    }

    .circles li:nth-child(7) {
      left: 35%;
      width: 150px;
      height: 150px;
      animation-delay: 7s;
    }

    .circles li:nth-child(8) {
      left: 50%;
      width: 25px;
      height: 25px;
      animation-delay: 15s;
      animation-duration: 45s;
    }

    .circles li:nth-child(9) {
      left: 20%;
      width: 15px;
      height: 15px;
      animation-delay: 2s;
      animation-duration: 35s;
    }

    .circles li:nth-child(10) {
      left: 85%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 11s;
    }

    @keyframes animate {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
      }
      100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
      }
    }
.navbar-brand {
  text-decoration: none; 
}
.navbar-brand:hover {
  text-decoration: none;
  color:white; 
}

.nav-link1, .nav-link2 {
  color: white;
  border: none;
  border-radius: 10px;
  padding: 8px 16px;
  transition: background-color 0.3s ease;
  text-decoration: none !important; 
}

.nav-link1:hover, .nav-link2:hover {
  background-color: #fff;
  color: #01257D;
}
 .active {
    color:#01257D;
}
.footer {
  background-color: white;
  color: white;
  padding: 8px 0;
  text-align: center;
}

.footer-content {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.footer-column {
  flex: 1;
  margin: 20px;
  text-align: left; 
}

.footer-column h3 {
  font-size: 20px;
  margin-bottom: 20px;
  color: #01257D; 
}
.fa-brands{
    color:#01257D;
}
.footer-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links li {
  margin-bottom: 10px;
}

.footer-links a {
  text-decoration: none;
  color:#01257D ;
  font-size: 16px;
  transition: color 0.3s ease;
}

.footer-links a:hover {
  color: #01257D; 
}

.footer-social-icons {
  margin-top: 20px;
}

.footer-social-icons a {
  display: inline-block;
  margin: 0 10px;
  color: #01257D;
  font-size: 20px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-social-icons a:hover {
  color: #01257D; 
}

.footer-bottom {
  margin-top: 20px;
}

.footer-bottom p {
  margin: 0;
  font-size: 14px;
  color: #01257D;
}
.footerabout{
    color:#01257D;
}
.search-container {
      position: relative;
      max-width: 400px;
      width: 100%;
      margin-left:240px;
    }

    .search-input {
      width: 100%;
      padding: 7px;
      font-size: 16px;
      border: 1px solid white;
      border-radius: 30px;
      outline: none;
    }

    .search-button {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #01257D;
      color: #fff;
      border: none;
      padding: 4px 10px ;
      font-size: 16px;
      cursor: pointer;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }
    .search-button:hover {
      background-color: #03297D;
    }
    .btn {
        transition: all 0.3s ease-in-out;
        font-family: "Dosis", sans-serif;
}

.btn {
  width: 150px;
  height: 60px;
  border-radius: 50px;
  background-image: linear-gradient(135deg, white 0%, white 100%);
  box-shadow: 0 10px 20px -3px rgba(255, 255, 255, 0.5);
  outline: none;
  cursor: pointer;
  border: none;
  font-size: 20px;
  color: #03297D;
  z-index: 1000;

}

.btn:hover {
  transform: translateY(3px);
  box-shadow: none;
}

.btn:active {
  opacity: 0.5;
}

.topheader{
    line-height: 1.5;
}





/* Additional Design Styling at the Bottom of the Page */

.bottom-container {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  padding: 40px 20px;
}

.testimonial {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.client-say {
  text-align: center;
  padding: 20px;
  border: 1px solid white;
  border-radius: 8px;
  background-color:#01257D;
}

.client-say h2 {
  margin-top:10px;
  color: white;
  font-size: 1.8rem;
  margin-bottom: 15px;
}

.client-say p {
  color: white;
  font-size: 1.2rem;
  line-height: 1.4;
}

.client-name {
  font-style: italic;
  margin-top: 10px;
  color: white;
}
.fa-star{
  color:#F4CE14;
}

/* Updated styles for the "About Us" section */

.about-us {
    background-color: #f7f7f7;
    padding: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    text-align: left;
}

.about-us h2 {
    color: #01257D;
    font-size: 2.5em;
    margin-bottom: 20px;
}

.about-us p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.8;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

/* Additional Styles for a Professional Look */

.about-us::before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, transparent 50%, #01257D 50%);
    z-index: -1;
    transform: translateX(-50%);
}

.about-us h2,
.about-us p {
    color: #333;
}

.about-us p:last-child {
    margin-bottom: 0;
}
/* Updated styles for the "Contact Us" section */

.contact-us {
    background-color: #f7f7f7;
    padding: 40px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    text-align: left;
}

.contact-us h2 {
    color: #01257D;
    font-size: 2.5em;
    margin-bottom: 20px;
}

.contact-us p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.8;
}

.contact-us .container {
    display: flex;
    justify-content: space-between;
}

.contact-us .contact-info,
.contact-us .contact-form {
    flex: 1;
    max-width: 48%;
}

.contact-us .contact-info address {
    font-style: normal;
}

.contact-us .contact-form form {
    display: grid;
    gap: 15px;
}

.contact-us .contact-form label {
    font-weight: bold;
}

.contact-us .contact-form input,
.contact-us .contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

.contact-us .contact-form button {
    background-color: #01257D;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.contact-us .contact-form button:hover {
    background-color: #03297D;
}

/* Additional Styles for a Professional Look */

.contact-us::before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, transparent 50%, #01257D 50%);
    z-index: -1;
    transform: translateX(-50%);
}

.contact-us h2,
.contact-us p {
    color: #333;
}

.contact-us p:last-child {
    margin-bottom: 0;
}
.btn3{
  
}


  </style>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    
</body>
</html>