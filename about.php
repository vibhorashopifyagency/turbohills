<?php
$pageTitle = 'About Turbo Hills | Sikkim & North Bengal Travel Agency from Bagdogra';

$metaDescription = 'Turbo Hills is a trusted travel agency in Bagdogra offering Sikkim and North Bengal tour packages, cab services with permits, and customized itineraries for Indian and international travelers.';

$pageSchema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is Turbo Hills a local travel agency in Bagdogra?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Turbo Hills is a locally operated travel agency based in Bagdogra, West Bengal, specializing in Sikkim and North Bengal tours."
      }
    },
    {
      "@type": "Question",
      "name": "Does Turbo Hills arrange permits for North Sikkim?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Turbo Hills handles all required permits for Lachung, Lachen, Yumthang Valley, and Nathula Pass."
      }
    },
    {
      "@type": "Question",
      "name": "Is Turbo Hills suitable for international travelers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Turbo Hills regularly assists international tourists with transportation, permits, itinerary planning, and local support."
      }
    }
  ]
}
</script>';

// Header and constants
include __DIR__ . '/includes/header_constants.php';
?>
<!-- Start Breadcrumb section -->
<div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?= BASE_URL ?>/assets/img/innerpages/breadcrumb-bg2.jpg);">
  <div class="container">
    <div class="banner-content">
      <h1>About Turbo Hills</h1>
      <ul class="breadcrumb-list">
        <li><a href="index.html">Home</a></li>
        <li>About Turbo Hills</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Breadcrumb section -->

<!-- About Section Start-->
<div class="about-section pt-100 mb-100">
  <div class="container">
    <div class="about-wrapper">
      <div class="row align-items-center justify-content-between">
        <div class="col-xl-6 col-lg-7 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="about-content">
            <div class="section-title">
              <h2>Why We're a Trusted Travel Agency</h2>
              <h4>Welcome to Turbo Hills - Your Gateway to Sikkim & North Bengal</h4>
              <p>
                <strong>Turbo Hills</strong> is a reliable travel agency based in
                <strong>Bagdogra, West Bengal</strong>, offering carefully planned
                <strong>Sikkim and North Bengal tour packages</strong> for Indian and
                international travelers.
                <br><br>
                We specialize in customized itineraries, comfortable cab services with government-approved permits, and seamless travel experiences across Gangtok, Lachung, Lachen, Darjeeling, Kalimpong, and nearby Himalayan destinations.
              </p>
              <p>
                With strong local expertise, transparent pricing, and on-trip support,
                Turbo Hills ensures every journey is safe, memorable, and stress-free.
              </p>
            </div>
            <div class="founder-area">
              <img src="<?= BASE_URL ?>/assets/img/innerpages/about-page-founder-signature.png" alt="">
              <div class="founder-info">
                <h6>Turbo Hills</h6>
                <span>North Bengal & Sikkim Travel Experts</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-lg-block d-none wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="about-img">
            <img src="<?= BASE_URL ?>/assets/img/home3/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section End-->

<!-- home1 service Section Start-->
<div class="home1-service-section mb-100">
  <div class="container">
    <div class="service-wrapper">
      <div class="row justify-content-center wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="col-lg-9">
          <div class="section-title">
            <h2>Our Travel Services</h2>
            <p>Turbo Hills offers complete travel solutions for Sikkim & North Bengal</p>
            <svg height="6" viewBox="0 0 872 6" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM867 3.5L872 5.88675V0.113249L867 2.5V3.5ZM4.5 3.5H867.5V2.5H4.5V3.5Z" />
            </svg>
          </div>
        </div>
      </div>
      <ul class="service-list wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <li class="single-service">
          <div class="icon">
            <?php echo $star_tag_orange_bg; ?>
          </div>
          <div class="content">
            <h4>Sikkim & North Bengal</h4>
            <p>
              Customized tour packages, cab services from Bagdogra, NJP & Siliguri, along with permits, hotels, and itinerary planning.
            </p>

          </div>
        </li>
        <li class="single-service">
          <div class="icon">
            <?php echo $percentage_tag_blue_bg; ?>
          </div>
          <div class="content">
            <h4>Best Deals & Local Pricing</h4>
            <p>
              Transparent pricing, local rates, and expertly planned
              itineraries for a smooth travel experience.
            </p>

          </div>
        </li>
        <li class="single-service">
          <div class="icon">
            <?php echo $saves_money; ?>
          </div>
          <div class="content">
            <h4>Saves Time & Money</h4>
            <p>
              Avoid hidden charges and travel hassles with
              reliable planning and verified local services.
            </p>

          </div>
        </li>
      </ul>
      <div class="bottom-area d-flex justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="batch">
          <a href="contact.php#contact-form--container">Check Offer
            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- home1 service Section End-->

<!-- Why Choose Turbo Hills Section Start-->
<div class="about-why-choose-section mb-100">
  <div class="container">
    <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2>Plan Your Sikkim or North Bengal Trip with Local Experts</h2>
          <p>
            Contact Turbo Hills to create your customized travel plan
            with trusted local experts.
          </p>
        </div>
      </div>
    </div>
    <div class="row g-xl-4 g-lg-3 g-4">
      <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
        <div class="why-choose-card">
          <?php echo $traveller_bag; ?>
          <h5>Expertly Curated <br> Tours.</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
        <div class="why-choose-card two">
          <?php echo $star_price_tag; ?>
          <h5>Affordable & Flexible <br> Packages.</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
        <div class="why-choose-card three">
          <?php echo $star_tag_customer_support; ?>
          <h5>24/7 Customer <br> Support.</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
        <div class="why-choose-card four">
          <?php echo $certified_tag; ?>
          <h5>Certified & <br> Experienced Guides.</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Why Choose Turbo Hills Section End-->

<!-- About Video Section Start-->
<div class="about-video-section mb-100">
  <div class="container">
    <div class="video-wrap">
      <img src="<?= BASE_URL ?>/assets/img/innerpages/about-video-img.jpg" alt="Sikkim and North Bengal tour experience with Turbo Hills">
      <a data-fancybox="video-player" href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="play-btn">
        <i class="bi bi-play-fill"></i>
        <div class="waves-block">
          <div class="waves wave-1"></div>
          <div class="waves wave-2"></div>
          <div class="waves wave-3"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- About Video Section End-->

<!-- home1 testimonial Section Start-->
<div class="home1-testimonial-section mb-100">
  <div class="container">
    <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center">
          <h2>Hear It from Travelers</h2>
          <p>We go beyond just booking trips—we create unforgettable travel experiences that match your dreams!</p>
        </div>
      </div>
    </div>
    <div class="row mb-40">
      <div class="col-lg-12">
        <div class="swiper home1-testimonial-slider">
          <div class="swiper-wrapper">

  <!-- Testimonial 1 -->
  <div class="swiper-slide">
    <div class="testimonial-card">
      <div class="author-area">
        <div class="author-img">
          <img src="<?= BASE_URL ?>/assets/img/home1/testimonial-author-img1.png" alt="Turbo Hills traveler review">
        </div>
        <div class="author-info">
          <h5>Ankit Sharma</h5>
          <span>Turbo Hills Traveler</span>
        </div>
      </div>
      <ul class="rating-area">
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
      </ul>
      <h5>Amazing Sikkim Experience!</h5>
      <div class="content">
        <p>
          Our Gangtok, Lachung, and Yumthang Valley trip was perfectly organized.
          From airport pickup at Bagdogra to hotel stays and sightseeing,
          everything was smooth and well-managed. Highly recommended!
        </p>
      </div>
    </div>
  </div>

  <!-- Testimonial 2 -->
  <div class="swiper-slide">
    <div class="testimonial-card two">
      <div class="author-area">
        <div class="author-img">
          <img src="<?= BASE_URL ?>/assets/img/home1/testimonial-author-img2.png" alt="North Bengal tour review">
        </div>
        <div class="author-info">
          <h5>Neha & Rohit Verma</h5>
          <span>Turbo Hills Traveler</span>
        </div>
      </div>
      <ul class="rating-area trustpilot">
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
      </ul>
      <h5>Perfect Honeymoon Trip</h5>
      <div class="content">
        <p>
          We booked our Darjeeling and Kalimpong honeymoon package with Turbo Hills.
          The hotels, cab service, and itinerary planning were excellent.
          The team was always available whenever we needed help.
        </p>
      </div>
    </div>
  </div>

  <!-- Testimonial 3 -->
  <div class="swiper-slide">
    <div class="testimonial-card">
      <div class="author-area">
        <div class="author-img">
          <img src="<?= BASE_URL ?>/assets/img/home1/testimonial-author-img3.png" alt="Sikkim family tour review">
        </div>
        <div class="author-info">
          <h5>Rajiv Mehta</h5>
          <span>Turbo Hills Traveler</span>
        </div>
      </div>
      <ul class="rating-area">
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-half"></i></li>
      </ul>
      <h5>Well-Planned Family Tour</h5>
      <div class="content">
        <p>
          We traveled to Gangtok and Lachen with our family.
          The driver was experienced, the vehicle was comfortable,
          and all permits were arranged in advance.
          A very reliable travel agency.
        </p>
      </div>
    </div>
  </div>

  <!-- Testimonial 4 -->
  <div class="swiper-slide">
    <div class="testimonial-card">
      <div class="author-area">
        <div class="author-img">
          <img src="<?= BASE_URL ?>/assets/img/home1/testimonial-author-img4.png" alt="North Bengal sightseeing review">
        </div>
        <div class="author-info">
          <h5>Sarah Williams</h5>
          <span>International Traveler</span>
        </div>
      </div>
      <ul class="rating-area">
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
      </ul>
      <h5>Wonderful Himalayan Journey</h5>
      <div class="content">
        <p>
          As an international traveler, I felt completely safe and supported.
          Turbo Hills planned our North Bengal sightseeing tour beautifully.
          Darjeeling and Mirik were highlights of the trip.
        </p>
      </div>
    </div>
  </div>

  <!-- Testimonial 5 -->
  <div class="swiper-slide">
    <div class="testimonial-card two">
      <div class="author-area">
        <div class="author-img">
          <img src="<?= BASE_URL ?>/assets/img/home1/testimonial-author-img5.png" alt="Lachung Lachen tour review">
        </div>
        <div class="author-info">
          <h5>Vikram Singh</h5>
          <span>Turbo Hills Traveler</span>
        </div>
      </div>
      <ul class="rating-area trustpilot">
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
        <li><i class="bi bi-circle-fill"></i></li>
      </ul>
      <h5>Hassle-Free Lachung & Lachen Trip</h5>
      <div class="content">
        <p>
          Traveling to high-altitude places like Lachung and Lachen needs
          proper planning and permits. Turbo Hills handled everything professionally.
          The trip was smooth, safe, and truly memorable.
        </p>
      </div>
    </div>
  </div>

</div>

        </div>
      </div>
    </div>
    <div class="review-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
      <div class="tripadvisor-rating-area">
        <a href="https://www.tripadvisor.com/" class="tripadvisor-rating">
          <img src="<?= BASE_URL ?>/assets/img/home1/icon/tripadvisor-logo.svg" alt="">
          <div class="rating-area">
            <span>Reviews</span>
            <img src="<?= BASE_URL ?>/assets/img/home1/icon/tripadvisor-start.svg" alt="">
          </div>
        </a>
        <svg class="divider" width="6" height="52" viewBox="0 0 6 52" xmlns="http://www.w3.org/2000/svg">
          <path d="M3.5 5L5.88675 0H0.113249L2.5 5H3.5ZM2.5 47L0.113249 52H5.88675L3.5 47H2.5ZM2.5 4.5V47.5H3.5V4.5H2.5Z" />
        </svg>
      </div>
      <a href="http://trustpilot.com/" class="trustpilot-rating-area">
        <strong>4.5</strong>
        <div class="trustpilot-rating">
          <img src="<?= BASE_URL ?>/assets/img/home1/icon/trustpilot-logo.svg" alt="">
          <div class="rating-area">
            <img src="<?= BASE_URL ?>/assets/img/home1/icon/trustpilot-star.svg" alt="">
            <span>(2K reviews)</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- home1 testimonial Section End-->

<?php include 'includes/sections/index-faq.php'; ?>
<?php include 'includes/sections/counter-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>