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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <title>Document</title>
</head>

<style>
  .nav-link.inactive {
    size: 17px;
    color: rgb(255, 255, 255);
    background-color: rgb(4, 18, 102);
    border-radius: 5px;
  }

  .nav-link.active {
    size: 17px;
    color: rgb(0, 0, 0);
    background-color: rgb(4, 18, 102);
    border-radius: 5px;
  }

  body.bg-blue-100 {
    background-color: rgb(4, 18, 102);
    color: white; /* Set your desired text color */
  }

  .nav-item.inactive {
    font-size: 17px;
    color: rgb(255, 255, 255);
    background-color: #faffff;
    border-radius: 5px;
  }

  .nav-item.active {
    color: rgb(0, 0, 0);
    background-color: rgb(4, 18, 102);
    border-radius: 5px;
  }

  .dash {
    font-family: 'Courier New', Courier, monospace;
    border-radius: 5px;
    text-align: center;
    width: 200px;
    font-size: large;
    padding-left: 1rem;
    padding-right: 1rem;
    background-color: #00FFFF;
    font-size: .875rem;
  }

  .user svg {
    width: 23px;
  }

@media (max-width: 767px) {
      .hr {
          margin-top: 90px;
      }
  .nav-item i {
    color: black;
  }

  .icon-sm svg {
    border-radius: 4.5px;
  }}
</style>
<body class="bg-blue-100">
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navLinks = document.querySelectorAll('.nav-link');
  
      // Function to set active link in localStorage
      function setActiveLink(link) {
        localStorage.setItem('activeLink', link.getAttribute('href'));
      }
  
      navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
          const href = this.getAttribute('href');
          if (href && href !== '#' && !href.startsWith('#')) {
            // Remove active and inactive classes from all links
            navLinks.forEach(link => {
              link.classList.remove('active', 'inactive');
            });
  
            // Add active class to the clicked link
            this.classList.add('active');
  
            // Add inactive class to other links
            navLinks.forEach(otherLink => {
              if (otherLink !== this) {
                otherLink.classList.add('inactive');
              }
            });
  
            // Set active link in localStorage
            setActiveLink(this);
  
            // Delay navigation to allow time for localStorage to be updated
            setTimeout(() => {
              // Redirect to the URL specified in the href attribute
              window.location.href = href;
            }, 50);
          }
        });
      });
  
      // Check localStorage on page load to set active link
      const storedActiveLink = localStorage.getItem('activeLink');
      if (storedActiveLink) {
        const activeLink = document.querySelector(`.nav-link[href="${storedActiveLink}"]`);
        if (activeLink) {
          activeLink.classList.add('active');
        }
      }
    });
  </script>




<aside style="background-color: rgb(4, 18, 102);" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-blue-500 " id="sidenav-main">
 
  <div style="background-color: rgb(4, 18, 102);" class="sidenav-header sticky-top">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none text-white" aria-hidden="true" id="iconSidenav"></i>
  
      <span style="color: rgb(255, 255, 255); margin-top:-10px;font-family:'Trattatello, fantasy	'" class="ms-3 font-weight-bold">

        <img style="width: 130px;height:60px;color:white;margin-left:41px;margin-top:10px"  src="{{ asset('assets/img/brighten.png') }}">

        <p style="width: 50px;height:50px;color:white;margin-left:119px;margin-top:-27px"> </p>   </span>
    </a>
   
  </div>
 
  <hr style="color: aqua">
  <div   class="do" id="sidenav-collapse-main">
    &nbsp;
    <ul class="navbar-nav">


      <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        
    <a class="nav-link" href="{{ url('dashboard') }}">

        <?xml version="1.0" ?>
        <svg   width="30px"  class=" icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center" 
        style="background-color:#00FFFF" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
       >
            <defs>
                <style>.cls-1{fill:none;}</style>
            </defs>
            <title/>
            <g data-name="Layer 2" id="Layer_2">
                <path d="M24,29H8a3,3,0,0,1-3-3V16a1, 1,0,0,1,2,0V26a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1V16a1,1,0,0,1,2,0V26A3,3,0,0,1,24,29Z"/>
                <path d="M15,29H10a1,1,0,0,1-1-1V22a3,3,0,0,1,3-3h1a3,3,0,0,1,3,3v6A1,1,0,0,1,15,29Zm-4-2h3V22a1,1,0,0,0-1-1H12a1,1,0,0,0-1,1Z"/>
                <path d="M25,17a4,4,0,0,1-4-4,1,1,0,0,1,2,0,2,2,0,0,0,4,0v-.76L24.38,7H7.62L5,12.24V13a2,2,0,0,0,4,0,1,1,0,0,1,2,0,4,4,0,0,1-8,0V12a1,1,0,0,1,.11-.45l3-6A1,1,0,0,1,7,5H25a1,1,0,0,1,.89.55l3,6A1,1,0,0,1,29,12v1A4,4,0,0,1,25,17Z"/>
                <path d="M13,17a4,4,0,0,1-4-4,1,1,0,0,1,2,0,2,2,0,0,0,4,0,1,1,0,0,1,2,0A4,4,0,0,1,13,17Z"/>
                <path d="M19,17a4,4,0,0,1-4-4,1,1,0,0,1,2,0,2,2,0,0,0,4,0,1,1,0,0,1,2,0A4,4,0,0,1,19,17Z"/>
                <path d="M22,22H19a1,1,0,0,1,0-2h3a1,1,0,0,1,0,2Z"/>
            </g>
            <g id="frame">
                <rect class="cls-1" height="12" width="12"/>
            </g>
        </svg>
        <span  class="nav-link-text ms-1">DASHBOARD</span>
    </a>
</li>


<li style="margin-left: -5px" class="nav-item {{ Request::is('societes.index') ? 'active' : '' }} mt-3">

        <a class="nav-link" href="{{ route('societes.index') }}">
            <div style="background-color:#00FFFF" class=" icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
              
              <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN' 
              'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'>
             <svg style="background-color:#00FFFF"  width="23PX"  enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" 
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>
               <path d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   "/>
             </g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g>
               <path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g>
                <circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="5.5" cy="8.5" r="2.5"/></g><g>
               <path d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z"/>
             </g></g></svg>
            </div>
            <span  class="nav-link-text ms-1">SOCIÉTÉS</span>
        </a>
      </li>
     
      <li style="margin-left: -5px" class="nav-item {{ Request::is('associes.index') ? 'active' : '' }} mt-3">
        <a class="nav-link " href="{{ route('associes.index') }}">
            <div  style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <i style="font-size: 1rem;color:black" class="	fas fa-handshake ps-2 pe-2 text-center text-dark {{ (Request::is('user-management') ? 'text-dark' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">ASSOCIÉS</span>
        </a>
      </li>
     
     
  
      <li style="margin-left: -5px" class="nav-item {{ Request::is('gerants.index') ? 'active' : '' }} mt-3">
        <a class="nav-link " href="{{ route('gerants.index') }}">
            <div  style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <i style="font-size: 1rem;colore:black" class="fas fa-briefcase ps-2 pe-2 text-center text-dark {{ (Request::is('user-management') ? 'text-dark' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">GÉRANTS</span>
        </a>
      </li>
      
      <li style="margin-left: -5px" class="nav-item {{ Request::is('damancoms.index') ? 'active' : '' }} mt-3">
        <a class="nav-link" href="{{ route('damancoms.index') }}">
            <div style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <?xml version="1.0" ?>
              <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
              <svg xmlns="http://www.w3.org/2000/svg" height="26px" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 192c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm64-64c0-17.7 14.3-32 32-32s32 14.3 32 32V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V160zM320 288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32z"/>
              </svg>
                  </div>
            <span  class="nav-link-text ms-1">DAMANCOM	</span>
        </a>
      </li>
      <li style="margin-left: -5px" class="nav-item {{ Request::is('impots.index') ? 'active' : '' }} mt-3">
        <a class="nav-link" href="{{ route('impots.index') }}">
            <div style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <?xml version="1.0" ?>
              <svg style="width: 22px" id="Layer_1_1_" style="enable-background:new 0 0 16 16;" version="1.1"
               viewBox="0 0 16 16" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" 
               xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s8-3.582,8-8S12.418,0,8,0z M7,8h2c1.103,0,2,0.897,2,2v1c0,1.103-0.897,2-2,2v1H8v-1  H7c-1.103,0-2-0.897-2-2h1c0,0.551,0.448,1,1,1h1h1c0.552,0,1-0.449,1-1v-1c0-0.551-0.448-1-1-1H7C5.897,9,5,8.103,5,7V6  c0-1.103,0.897-2,2-2h1V3h1v1c1.103,0,2,0.897,2,2h-1c0-0.551-0.448-1-1-1H7C6.448,5,6,5.449,6,6v1C6,7.551,6.448,8,7,8z"/></svg>
              </div>
           
                <span  class="nav-link-text ms-1">IMPOTS	</span>
        </a>
      </li>
      <li style="margin-left: -5px" class="nav-item {{ Request::is('cimrs.index') ? 'active' : '' }} mt-3">
        <a class="nav-link" href="{{ route('cimrs.index') }}">
            <div style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <?xml version="1.0" ?><svg enable-background="new 0 0 32 32" height="20px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="network_x5F_security"><path d="M26,14.523v-2.624c2.281-0.463,4-2.48,4-4.899c0-2.762-2.239-5-5-5s-5,2.238-5,5c0,2.419,1.719,4.436,4,4.899v2.159   C23.671,14.022,23.338,14,23,14c-2.126,0-4.075,0.74-5.615,1.972l-6.216-6.217C11.691,8.964,12,8.019,12,7c0-2.762-2.239-5-5-5   S2,4.238,2,7c0,2.419,1.718,4.436,4,4.899v8.201C3.718,20.563,2,22.58,2,25c0,2.763,2.239,5,5,5s5-2.237,5-5   c0-2.42-1.718-4.437-4-4.899v-8.201c0.638-0.13,1.229-0.383,1.754-0.73l6.217,6.217C14.74,18.925,14,20.874,14,23   c0,4.971,4.027,8.998,9,9c4.971-0.002,8.998-4.029,9-9C31.998,19.081,29.493,15.759,26,14.523z M23,29.883   c-3.801-0.009-6.876-3.084-6.885-6.883c0.009-3.801,3.084-6.876,6.885-6.884c3.799,0.008,6.874,3.083,6.883,6.884   C29.874,26.799,26.799,29.874,23,29.883z"/><path d="M26.144,22.001c0.008-0.131,0.014-0.267,0.014-0.409c-0.006-0.678-0.088-1.491-0.556-2.258   c-0.457-0.779-1.438-1.36-2.602-1.333c-1.165-0.027-2.148,0.554-2.605,1.333c-0.47,0.767-0.552,1.58-0.556,2.258   c0,0.143,0.006,0.278,0.014,0.409H19V27h8v-4.999H26.144z M21.837,21.592c-0.004-0.478,0.093-0.958,0.254-1.198   c0.173-0.226,0.27-0.365,0.909-0.393c0.637,0.027,0.73,0.165,0.904,0.393c0.162,0.24,0.259,0.723,0.253,1.198   c0,0.145-0.008,0.28-0.019,0.409h-2.282C21.846,21.87,21.837,21.733,21.837,21.592z"/></g></svg>
            </div>
              <span  class="nav-link-text ms-1">CIMR	</span>

        </a>
      </li>
      <li style="margin-left: -5px" class="nav-item {{ Request::is('regus.index') ? 'active' : '' }} mt-3">
        <a class="nav-link" href="{{ route('regus.index') }}">
      <div style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
        <?xml version="1.0" ?><svg enable-background="new 0 0 32 32" height="20px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="group_x5F_half_x5F_security"><path d="M16,14c1.657,0,3-1.343,3-3s-1.343-3-3-3s-3,1.343-3,3S14.343,14,16,14z M24,8c1.657,0,3-1.343,3-3s-1.343-3-3-3   s-3,1.343-3,3S22.343,8,24,8z M12.023,14C11.39,13.162,11,12.131,11,11c0-0.343,0.035-0.677,0.101-1C8.968,10,4,10,4,10s-2,0-2,2   c0,0.778,0,12,0,12h6v-6c0-4,4-4,4-4H12.023z M8,8c1.657,0,3-1.343,3-3S9.657,2,8,2S5,3.343,5,5S6.343,8,8,8z M30,17.349V12   c0,0,0-2-2-2h-7.101C20.965,10.323,21,10.657,21,11c0,1.131-0.39,2.162-1.022,3H20c0.477,0,0.878,0.073,1.246,0.173   c-1.457,0.288-2.787,0.928-3.898,1.827C15.008,16,12,16,12,16s-2,0-2,2c0,0.778,0,12,0,12h7.349c1.545,1.248,3.51,1.999,5.651,2   c4.971-0.002,8.998-4.029,9-9C31.999,20.858,31.248,18.894,30,17.349z M23,29.883c-3.801-0.009-6.876-3.084-6.885-6.883   c0.009-3.801,3.084-6.876,6.885-6.885c3.799,0.009,6.874,3.084,6.883,6.885C29.874,26.799,26.799,29.874,23,29.883z"/><path d="M26.144,22c0.008-0.131,0.014-0.267,0.014-0.409c-0.006-0.678-0.088-1.492-0.556-2.259   c-0.457-0.779-1.438-1.36-2.602-1.333c-1.165-0.027-2.148,0.554-2.605,1.333c-0.47,0.767-0.552,1.581-0.556,2.259   c0,0.143,0.006,0.278,0.014,0.409H19v5h8v-5H26.144z M21.837,21.591c-0.004-0.478,0.093-0.958,0.254-1.198   c0.173-0.227,0.27-0.366,0.909-0.394c0.637,0.027,0.73,0.165,0.904,0.394c0.162,0.24,0.259,0.723,0.253,1.198   c0,0.145-0.008,0.28-0.019,0.409h-2.282C21.846,21.869,21.837,21.732,21.837,21.591z"/></g></svg>            
            
            </div>
            <span  class="nav-link-text ms-1">REGUS	</span>
        </a>
      </li>
      @can('manage-all-gerants')

      <li style="margin-left: -5px" class="nav-item {{ Request::is('users.index') ? 'active' : '' }} mt-3">
        <a class="nav-link" href="{{ route('users.index') }}">
      <div style="background-color:#00FFFF" class="icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
        <?xml version="1.0" ?><svg enable-background="new 0 0 32 32" height="20px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="group_x5F_half_x5F_security"><path d="M16,14c1.657,0,3-1.343,3-3s-1.343-3-3-3s-3,1.343-3,3S14.343,14,16,14z M24,8c1.657,0,3-1.343,3-3s-1.343-3-3-3   s-3,1.343-3,3S22.343,8,24,8z M12.023,14C11.39,13.162,11,12.131,11,11c0-0.343,0.035-0.677,0.101-1C8.968,10,4,10,4,10s-2,0-2,2   c0,0.778,0,12,0,12h6v-6c0-4,4-4,4-4H12.023z M8,8c1.657,0,3-1.343,3-3S9.657,2,8,2S5,3.343,5,5S6.343,8,8,8z M30,17.349V12   c0,0,0-2-2-2h-7.101C20.965,10.323,21,10.657,21,11c0,1.131-0.39,2.162-1.022,3H20c0.477,0,0.878,0.073,1.246,0.173   c-1.457,0.288-2.787,0.928-3.898,1.827C15.008,16,12,16,12,16s-2,0-2,2c0,0.778,0,12,0,12h7.349c1.545,1.248,3.51,1.999,5.651,2   c4.971-0.002,8.998-4.029,9-9C31.999,20.858,31.248,18.894,30,17.349z M23,29.883c-3.801-0.009-6.876-3.084-6.885-6.883   c0.009-3.801,3.084-6.876,6.885-6.885c3.799,0.009,6.874,3.084,6.883,6.885C29.874,26.799,26.799,29.874,23,29.883z"/><path d="M26.144,22c0.008-0.131,0.014-0.267,0.014-0.409c-0.006-0.678-0.088-1.492-0.556-2.259   c-0.457-0.779-1.438-1.36-2.602-1.333c-1.165-0.027-2.148,0.554-2.605,1.333c-0.47,0.767-0.552,1.581-0.556,2.259   c0,0.143,0.006,0.278,0.014,0.409H19v5h8v-5H26.144z M21.837,21.591c-0.004-0.478,0.093-0.958,0.254-1.198   c0.173-0.227,0.27-0.366,0.909-0.394c0.637,0.027,0.73,0.165,0.904,0.394c0.162,0.24,0.259,0.723,0.253,1.198   c0,0.145-0.008,0.28-0.019,0.409h-2.282C21.846,21.869,21.837,21.732,21.837,21.591z"/></g></svg>            
            
            </div>
            <span  class="nav-link-text ms-1">UTILISATEURS	</span>
        </a>
      </li>
      @endcan
<hr>     
    </ul>
  </div>
  <div  style="margin-top: 43PX" style=" sidenav-footer mx-3 ">
    <div   id="sidenavCard">
      <div class="full-background" style="background-image: url('../assets/img/curved-images/peerfect.jpg')"></div>
      <div style="color: black ;margin-top:2.7px" class="card-body text-start p-3 w-100 badge filter bg-gradient-info">
        <div >
          <span > Bienvenue à Sidbar!!!
         
          </span>
          <br/> 
           <li  class="nav-item d-flex align-items-center ps-4">
            @if(session('user_email'))
            <p >{{ session('user_email')}}</p>

        @endif
         </li>        
</div>

      
 </div>
    </div>
  </div>
  </div>
  
  
</aside>

</body>
</html>