
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">{{ $siteData->site_title }}</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>{{ $siteData->sub_title }}</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn-get-started">Free Consultation</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center">
              <i class="bi bi-whatsapp"></i><span>{{ $siteData->cell_number }}</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->