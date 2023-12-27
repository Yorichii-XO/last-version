<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  .nav-link.inactive{
  size: 17PX;
color: black;
    background-color:#faffff;
    border-radius: 5px;
  }
  .nav-link svg{
   
  }



.dash{
  font-family: 'Courier New', Courier, monospace	;
  border-radius: 5px;
  text-align: center;
 width: 200px;
font-size: large;
 padding-left:1rem;padding-right:1rem;
background-color:#00FFFF;
  font-size: .875rem;

}
.user svg{
  width: 23px;
}
.nav-item i{
  color: black;
}
.do svg{
  border-radius: 4.5px;
}
</style>
<body>
  




<aside style="background-color: rgb(4, 18, 102);" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  
      <span style="color: rgb(255, 255, 255); margin-top:-10px;font-family:'Trattatello, fantasy	'" class="ms-3 font-weight-bold">

        <img style="width: 50px;height:50px;color:white"  src="{{ asset('assets/img/winbest.webp') }}">

          WinBest </span>
    </a>

  </div>
  <hr style="color: aqua">
  <div   class="do" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
    <a class="nav-link {{ (Request::is('dashboard') ? 'active' : 'inactive') }}" href="{{ url('admin-dashboard') }}">
        <?xml version="1.0" ?>
        <svg  width="30px" style="border-raduis:200PX;background-color:#00FFFF " 
            viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <style>.cls-1{fill:none;}</style>
            </defs>
            <title/>
            <g data-name="Layer 2" id="Layer_2">
                <path d="M24,29H8a3,3,0,0,1-3-3V16a1,1,0,0,1,2,0V26a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1V16a1,1,0,0,1,2,0V26A3,3,0,0,1,24,29Z"/>
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
        <span   style="color: black;" class="nav-link-text ms-1">Dashboard</span>
    </a>
</li>
    
      <li class="user" style="margin-left: -5px" class="nav-item mt-3">
        <a class="nav-link " href="{{ route('societes.index') }}">
            <div style="background-color:#00FFFF" class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
              <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN' 
               'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'>
              <svg sty width="23PX"  enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" 
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>
                <path d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z   "/>
              </g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g>
                <path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="18.5" cy="8.5" r="2.5"/></g><g><path d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z"/></g></g><g><g><circle cx="5.5" cy="8.5" r="2.5"/></g><g>
                <path d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z"/></g></g></svg>
            </div>
            <span style="color: white" class="nav-link-text ms-1">Sociétés</span>
        </a>
      </li>
     
     
     
      <li style="margin-left: -5px" class="nav-item pb-2">
        <a class="nav-link" href="{{ route('associes.index') }}">
            <div style="background-color:#00FFFF" class="icon  icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <i style="font-size: 1rem;color:black" class="	fas fa-handshake ps-2 pe-2 text-center text-dark {{ (Request::is('user-management') ? 'text-dark' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span style="color: white" class="nav-link-text ms-1">Associés</span>
        </a>
      </li>
      <li style="margin-left: -5px" class="nav-item pb-2">
        <a class="nav-link " href="{{ route('gerants.index') }}">
            <div  style="background-color:#00FFFF" class="icon icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
                
              <i style="font-size: 1rem;colore:black" class="fas fa-briefcase ps-2 pe-2 text-center text-dark {{ (Request::is('user-management') ? 'text-dark' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Gérants</span>
        </a>
      </li>
<hr>     
 <li style="margin-left: -5px" class="nav-item">

     <!--   <a class="nav-link" href="{{ url('billing') }}">-->
      <a class="nav-link " href="{{ route('associes.index') }}">

          <div style="background-color:#00FFFF" class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
            <svg style="color: black" color="black" width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>credit-card</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(453.000000, 454.000000)">
                      <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span style="color: white" class="nav-link-text ms-1">Billing</span>
        </a>
      </li>
      
      <li style="margin-left: -5px" class="nav-item">
        <a class="nav-link" href="{{ url('rtl') }}">
          <div style="background-color:#00FFFF" class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>settings</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(304.000000, 151.000000)">
                      <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                      <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                      <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span style="color: white" class="nav-link-text ms-1">profile</span>
        </a>
      </li>
     
    </ul>
  </div>
  <div  style="margin-top: 43PX" style=" sidenav-footer mx-3 ">
    <div   id="sidenavCard">
      <div class="full-background" style="background-image: url('../assets/img/curved-images/peerfect.jpg')"></div>
      <div style="color: black ;margin-top:2.7px" class="card-body text-start p-3 w-100 badge filter bg-gradient-info">
        <div >
          Do you need help!!  <li  class="nav-item d-flex align-items-center ps-4">
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