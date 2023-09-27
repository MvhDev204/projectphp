
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="icon/ICON/css/all.min.css" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
  
  <!-- Start Top Nav -->
  {{-- <nav class="navbar navbar-expand-lg header1 navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
            </div>
            <div>
                <a class="text-light" href=" https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
        </div>
    </div>
</nav> --}}
<!-- Close Top Nav -->
    <!-- header -->
   <!-- Header -->
<!-- Start Header/Navigation -->
<header class="sticky-top">
<div class="container-fluid header2">
    <div class="row ">

      
        <nav class="navbar navbar-expand-lg navbar-light  py-2 d-flex justify-content-end">
            <div class="container">
                <a class="navbar-brand  text-uppercase " href="{{ route('home.index') }}" style="font-size: 40px"><strong class="zayshop">Zay Shop</strong> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto ">
                     <a class="nav-link active  text-uppercase text-light " href="{{ route('home.index') }}">Home</a> 
                        <a class="nav-link active text-uppercase text-light" href="{{ route('home.about') }}">About</a>
                        
                        <a class="nav-link active text-uppercase text-light" href="{{ route('product.index') }}">Products</a>
                        <a class="nav-link active text-uppercase text-light" href="{{ route('cart.index') }}">Cart</a>
                       
                        <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                        @guest
                    
                    
                        <a class="nav-link active text-uppercase text-light" href="{{ route('login') }}">Login</a>
                        <a class="nav-link active text-uppercase text-light" href="{{ route('register') }}">Register</a>
                        @else
                        <a class="nav-link active text-uppercase text-light" href="{{ route('myaccount.orders') }}">My Orders</a>
    
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active text-uppercase text-light" onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                        @endguest


                        <button type="button" class="btn btn-warning position-relative ">
                            Inbox
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              99+
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button>


                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</header>

{{-- <div class="">
    @yield('backgrouk')
    <img src="{{asset ('img/b62f62775a19.jpg')}} " class="back1" alt="...">
</div> --}}

<div class=''>
    @yield('backgrouk')    

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('/img/backgrout1.png')}}" class="d-block w-100 back1" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset ('img/b62f62775a19.jpg')}} " class="d-block w-100 back1" alt="...">
      </div>
      {{-- <div class="carousel-item">
        <img src="{{asset ('/img/backgrout2.png')}} " class="d-block w-100 back1" alt="...">
      </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div> 
 


           
<!-- Close Header -->
    {{-- <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle')</h2>
        </div>
    </header> --}}
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>

   
<div class="container-fluid footer1">
    <div class="container">
        <div class="row  text-light pt-5 pb-5">
            <div class="col">
                <p class="text-capitalize  zayshop"><strong class=""  style="font-size: 30px" >zay Shop</strong> </p>
                <hr>
                <div class="d-flex d-inline">
                    <i class="fa-solid fa-location-dot pt-1"></i>
                    <p class="ps-2"> 123 Consectetur at ligula 10660</p>

                </div>
                <div class="d-flex d-inline">
                    <i class="fa-solid fa-phone pt-1"></i>
                    <p class="ps-2"> 010-020-0340</p>
                </div>
               <div class="d-flex d-inline">
                <i class="fa-regular fa-envelope pt-1"></i>
                <p class="ps-2"> info@company.com</p>
               </div>
               <a class="text-light " href=" https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
              
               <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
               <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
               <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
            <div class="col">
                <p class="" style="font-size: 30px">Products</p>
                <hr>
                <p >Chuột</p>
                
                <p>Bàn Phím</p>
            </div>
            <div class="col">
                <p class="" style="font-size: 30px"> Further Info</p>
                <hr>
                <p>Home</p>
         
                <p>About</p>
                <p>Product</p>
             
                        
                 
               
            </div>
        </div>
    </div>
</div>
    <!-- footer -->
   
                {{-- <div class="copyright py-4 text-center text-white">
                    <div class="container">
                        <small>
                            Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                                href="https://twitter.com/danielgarax">
                                Daniel Correa
                            </a> - <b>Paola Vallejo</b>
                        </small>
                    </div>
                </div>
  --}}
  <div class="container-fluid">
    <div class="row text-light footer2">
        <div class="col">
            <p class="pt-2 text-center">Copyright © 2023 Company Name | Designed by TemplateMo</p>
        </div>
    </div>
  </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>