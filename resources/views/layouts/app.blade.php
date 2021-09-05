<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Treyos | @yield('title', 'Home')</title>
    
    <!-- Favicon -->
    <link href="{{ asset('img/treyos_logo.jpg') }}" rel="icon" type="image/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex align-items-center">
        
              <div class="logo mr-auto">
                {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
                    {{-- {{ config('app.name', 'Treyos Logo') }} --}}
                    {{-- Treyos Logo --}}
                </a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="/"><img src="{{ asset('img/treyos_logo.jpg') }}" alt="" class="img-fluid"></a>
              </div>
        
              <nav class="nav-menu d-none d-lg-block">
                <ul>
                  <li class="active"><a href="{{ url('home') }}">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#details">Services</a></li>
                  <li><a href="#features">Features</a></li>
                  <li><a class="" href="#agents">Become an Agent</a></li>
                  
                   <!-- Authentication Links -->
                   @guest
                   @if (Route::has('login'))
                       <li class="nav-item">
                           <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                   @endif

                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @endif
               @else
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#logout-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->first_name }}
                           {{ Auth::user()->last_name }}
                       </a>
                       
                       <a href="{{ url('/logout') }}"> logout </a>

                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
              </nav><!-- .nav-menu -->
        
            </div>
          </header><!-- End Header -->
        
      
        <main class="">
            @yield('content')
        </main>
            
    @stack('scripts')    

        <!-- ======= Footer ======= -->
	@include('layouts.footers.main-footer')
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
	
	@include('layouts.footers.nav')
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>  
    <script src="{{ asset('js/main.js') }}"></script>

</body>


</html>
