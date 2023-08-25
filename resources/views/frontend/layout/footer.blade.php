
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">

        <div class="footer-content">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                  <span>{{ $siteData->site_name }}</span>
                </a>
                <p>{{ $siteData->short_desc }}</p>
                <div class="social-links d-flex  mt-3">
                  <a href="{{ $siteData->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $siteData->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $siteData->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="{{ $siteData->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
    
              <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-dash"></i> <a href="{{ route('home') }}">Home</a></li>
                  <li><i class="bi bi-dash"></i> <a href="#about">About us</a></li>
                  <li><i class="bi bi-dash"></i> <a href="#service">Services</a></li>
                  <li><i class="bi bi-dash"></i> <a href="{{ route('tos') }}">Terms of service</a></li>
                  <li><i class="bi bi-dash"></i> <a href="{{ route('p.policy') }}">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Express Entry Department.</li>
                  <li><i class="bi bi-check-circle-fill"></i> International Student Program.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Family Sponsorship Department.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Business Department.</li>
                </ul>
              </div>
    
              <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                  {{-- A108 Adam Street <br>
                  New York, NY 535022<br> --}}
                  {{ $siteData->location }} <br><br>
                  <strong>Phone:</strong> {{ $siteData->cell_number }}<br>
                  <strong>Email:</strong> {{ $siteData->email }}<br>
                </p>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="footer-legal">
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>{{ $siteData->site_name }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              Devloped by <a class="text-primary" href="https://Jakariya.dev/">Jakariya.dev</a>
            </div>
          </div>
        </div>
      </footer><!-- End Footer --><!-- End Footer -->