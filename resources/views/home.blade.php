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
        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

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
        <img src="{{ asset('img/truck3.jpg') }}" class="img-fluid ht-100" alt="">
      </div>
      <div class="col-md-8 pt-4" data-aos="fade-up">
        <h3>Home Relocation</h3>
        <p class="font-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
      
        <p>
          Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
        </p>
        <a href="{{ url('booking') }}" class="btn btn-success mt-3 px-4">Book Us</a>

      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="{{ asset('img/truck1.jpg') }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Office Relocation</h3>
        <p class="font-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
        <p>
          Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
        </p>
        <a href="{{ url('booking') }}" class="btn btn-success mt-3 px-4">Book Us</a>

      </div>
    </div>

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <img src="{{ asset('img/truck4.jpg') }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5" data-aos="fade-up">
        <h3>Movement of general goods</h3>
        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
        
        <p>
          Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
        </p>
        <p>
          Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
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

    <div class="col-xl-5 col-lg-6 video-box d-md-flex justify-content-center align-items-stretch d-block d-md-none" data-aos="fade-right">
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


  <!-- ======= Agent Section ======= -->
  <section id="agents" class="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-6 h-100">
          <div class="section-title" data-aos="fade-up">
            <h2>Agent</h2>
            <p>Become a Treyos Agent</p>
          </div>
    
          <div class="row" data-aos="fade-left">
    
            
            <div class="col-lg-10 col-md-12 mt-4 mt-md-0 mx-auto">
              <div class="box featured h-100" data-aos="zoom-in" data-aos-delay="200">
                <h3>Why you should be our agent</h3>
                <h4>Earn <sup></sup>10%<span> / Movement</span></h4>
                <ul>
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                </ul>
                <div class="btn-wrap">
                  <a href="{{ route('register') }}" class="btn-buy">Register Now</a>
                </div>
              </div>
            </div>
    
           
          </div>
    
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
          <div class="section-title" data-aos="fade-up">
            <h2>Driver</h2>
            <p>Become a Treyos Driver</p>
          </div>
    
          <div class="row" data-aos="fade-left">
    
            
            <div class="col-lg-10 col-md-12 mt-4 mt-md-0 mx-auto">
              <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                <h3>Do you have what it takes to become a Treyos Driver?</h3>
                <ul class=" pb-md-4">
                  <li>Aida dere</li>
                  <li>Nec feugiat nisl</li>
                  <li>Nulla at volutpat dola</li>
                  <li>Pharetra massa</li>
                  <li>Pharetra massa</li>

                </ul>
                <div class="btn-wrap">
                  <a href="{{ route('register') }}" class="btn-buy">Register Now</a>
                </div>
              </div>
            </div>
    
           
          </div>
    
        </div>
      </div>

     
    </div>
  </section><!-- End Agents Section -->

</main>

@endsection
