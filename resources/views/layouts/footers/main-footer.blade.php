<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="footer-info">
            <h3>Treyos</h3>
            <p class="pb-3"><em>Best Way Home</em></p>
            <p>
              Shop 25, Divine grace shopping complex<br>
              beside chicken republic, Jakande Gate,<br>
              isolo Ejigbo road, oke-afa Lagos
              <br><br>
              <strong>Phone:</strong> +2348168901738<br>
              <strong>Email:</strong> support@treyos.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2 col-md-6 footer-links  d-none d-md-block">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('home') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#details">Services</a></li>
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> --}}
            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter d-none d-md-block">
          <h4>Our Newsletter</h4>
          <p>Enter your email to subscribe for our Newsletter and be updated on any changes to our services</p>
          <form action="{{ url('subscribe') }}" method="post">
            <input type="email" name="email" placeholder="email address"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

</footer><!-- End Footer -->
