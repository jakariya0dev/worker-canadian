    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="d-flex align-items-center">{{ $siteData->site_name }}</h1>
          </a>

          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="{{ route('home') }}" class="active">Home</a></li>
              <li><a href="{{ route('home') }}#service">Services</a></li>
              <li><a href="{{ route('home') }}#about">About</a></li>
              <li><a href="{{ route('home') }}#team">Team</a></li>
              <li><a href="{{ route('home') }}#contact">Contact</a></li>
              <li><a href="{{ route('apply.here') }}">Apply Here</a></li>
              <li><a href="{{ route('user.bio.form') }}">User Profile</a></li>
            </ul>
          </nav><!-- .navbar -->

        </div>
    </header>
      <!-- End Header -->
