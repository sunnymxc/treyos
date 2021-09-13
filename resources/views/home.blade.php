@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1>Move your goods With <span>Treyos</span></h1>
          <h2>We are team of experienced movers who take pride in arranging a seamless move for your household and business, making it fast and efficient.</h2>
          <div class="text-center text-lg-left">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 hero-img d-none d-md-block" data-aos="zoom-out" data-aos-delay="300">
        <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<main id="main">

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
  <div class="container-fluid">

    <div class="row">
      <div class="col-xl-5 col-lg-6 video-box d-md-flex justify-content-center align-items-stretch d-sm-none d-none d-md-block" data-aos="fade-right">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <h3>Everything You need to Know About Treyos</h3>
        <p>TREYOS is a moving company  committed to delivering exceptional moving journeys. We do this by providing moving services of unrivalled quality, with each one expertly designed to make your home and office relocation as stress free as possible.
        </p>
         <p> Our services includes, home relocation, Office relocation and Movement of general goods (Hualage).</p>

        {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>

        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="bx bx-gift"></i></div>
          <h4 class="title"><a href="">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>

        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="bx bx-atom"></i></div>
          <h4 class="title"><a href="">Dine Pad</a></h4>
          <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
        </div> --}}

      </div>
    </div>

  </div>
</section><!-- End About Section -->
<!-- ======= Details Section ======= -->
<section id="details" class="details">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Services we render</p>
    </div>

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('img/truck3.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/tr3.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/tr5.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-8" data-aos="fade-up">
        <h3>Home Relocation</h3>
        <p class="">
          There is joy and feeling of satisfaction when you finally find that your dream home or dream office. You will agree with us that the joy is unending. 
        </p>
        <p>
          As long as the urge to relocate from your current location persists, there is a little problem that comes with it. The stress of packing up and gathering your properties, getting a van or a truck that will help convey them and then the stress of unpacking and rearranging your properties. This, after some taught might bring about delay in your expected relocation date and time. We have personally been in this situation several times and that motivated the TREYOS team to come up with this solution.
        </p>
        <p>
          We are dedicated to bring you the best relocation service, ensuring safety, fast, timely, comfortable and stress-free relocation service.
        </p>
      
        <a href="{{ url('booking') }}" class="btn btn-success mt-3 px-4">Book Us</a>

      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('img/truck1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/truck3.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/truck11.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Office Relocation</h3>
        <p class="">
          Moving your business takes planning and preparation to ensure a smooth transition for your team, customers, and your business. Minimising disruption and downtime is key. The right preparation can help your business' move go smoothly and successfully.
        </p>
        <p>
          At  TREYOS, We take  time to listen to you and your objectives, discover your individual needs, and work closely with you to plan the best move possible for your business.
        </p>
       
        <a href="{{ url('booking') }}" class="btn btn-success mt-3 px-4">Book Us</a>

      </div>
    </div>

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('img/tr1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/truck3.jpeg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('img/truck5.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-8 pt-5" data-aos="fade-up">
        <h3>Movement of general goods</h3>
        <p>
          Treyos connects clients to companies who has the capacity to move any load or items across length and width of the country.
        </p>
       
        <a href="{{ url('booking') }}" class="btn btn-success mt-3 px-4">Book Us</a>

      </div>
    </div>

  </div>
</section><!-- End Details Section -->

 <!-- ======= Features Section ======= -->
 <section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Features</h2>
      <p>Check The Features</p>
    </div>

    <div class="row" data-aos="fade-left">
      <div class="col-lg-4 col-md-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Get a free quote
            on our Website</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Get your
            Quotation</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Choose Service Type</a></h3>
        </div>
      </div>
      {{-- <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href=""></a></h3>
        </div>
      </div> --}}
      {{-- <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3><a href="">Nemo Enim</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Eiusmod Tempor</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Midela Teren</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Pira Neve</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Dirada Pack</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3><a href="">Moton Ideal</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3><a href="">Verdo Park</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3><a href="">Flavor Nivelanda</a></h3>
        </div>
      </div>
    </div> --}}

    <div class="col-xl-5 col-lg-6 video-box d-md-flex justify-content-center align-items-stretch d-block d-md-none d-lg-none d-xl-none" data-aos="fade-right">
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Counts Section ======= -->
{{-- <section id="counts" class="counts">
  <div class="container">

    <div class="row" data-aos="fade-up">

      <div class="col-lg-4 col-md-6">
        <div class="count-box">
          <i class="icofont-simple-smile"></i>
          <span data-toggle="counter-up">232</span>
          <p>Active Agents</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="icofont-document-folder"></i>
          <span data-toggle="counter-up">171</span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-live-support"></i>
          <span data-toggle="counter-up">463</span>
          <p>Movement</p>
        </div>
      </div>

      
    </div>

  </div>
</section> --}}
<!-- End Counts Section -->


  
</main>

@endsection
