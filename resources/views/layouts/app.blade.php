<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RainMakerAfrica</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/rma2.jpg') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&family=Odibee+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FCD900">
            <div class="container">
                <a class="navbar-brand font-weight-bold letter-space-small" href="{{ url('/') }}">
                  <img src="{{ asset('images/rma2.jpg') }}" alt="" srcset="" class="website-image">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link letter-space-small @if(Request::is('/')) active @endif" href="/" style="font-weight: 600; ">Home</a>
                        </li>

                        @if (Auth::user())
                        <?php 
                            $shop = App\Shop::where('user_id', '=', Auth::user()->id)->first();
                        ?>
                        <li class="nav-item">
                          <a class="nav-link letter-space-small" href="{{ route('shop.show', $shop->id) }}" style="font-weight: 600; ">Shop</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link letter-space-small" href="{{route('sellwithus')}}" style="font-weight: 600; ">Sell</a>
                        </li>
                        @endif
                        
                        
                       

                        <li class="nav-item">
                            <a class="nav-link letter-space-small" href="#" style="font-weight: 600; ">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link letter-space-small" href="{{ route('login') }}" style="font-weight: 600;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link letter-space-small" href="{{ route('register') }}" style="font-weight: 600; ">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle letter-space-small" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                
                    @if (Request::is('search-category'))
                       
                    @else
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                      <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search') }}">

                          @csrf
                          <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </ul>
                        
                    @endif

                    
                </div>
            </div>
        </nav>
       
        

        <main class="">
            @yield('content')
        </main>
    </div>

    <footer
                class="text-center text-lg-start text-white mt-5"
                style="background-color: #1c2331"
                >
          <!-- Section: Social media -->
          <section
                   class="d-flex justify-content-between p-4"
                   style="background-color: #FCD900"
                   >
            <!-- Left -->
            <div class="me-5">
              <span style="color: gray;">Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
      
            <!-- Right -->
            <div>
              <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->
      
          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold">RainMakerAfrica</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #FCD900; height: 2px"
                      />
                  <p>
                    We are Rainmaker Africa and we want to make your business visible past physical presence. Our target is to draw potential clients to businesses where we offer a great platform for advertising.
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Products</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #FCD900; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-white">MDBootstrap</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">MDWordPress</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">BrandFlow</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #FCD900; height: 2px"
                      />
                  <p>
                    <a href="#!" class="text-white">Your Account</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Become an Affiliate</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Shipping Rates</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Help</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; background-color: #FCD900; height: 2px"
                      />
                  <p><i class="fas fa-home mr-3"></i> Nairobi KE</p>
                  <p><i class="fas fa-envelope mr-3"></i>diru@gmail.com</p>
                  <p><i class="fas fa-phone mr-3"></i>0716 261191</p>
                  <p><i class="fas fa-print mr-3"></i>0716 261191</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->
      
          <!-- Copyright -->
          <div
               class="text-center p-3"
               style="background-color: rgba(0, 0, 0, 0.2)"
               >
               
            © 2022 Copyright: RainMakerAfrica
            
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('scripts')
</body>
</html>
