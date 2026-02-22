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

<!-- home1 testimonial Section Start-->
<?php include __DIR__ . '/includes/sections/reviews.php'; ?>
<!-- home1 testimonial Section End-->

<?php include 'includes/sections/index-faq.php'; ?>
<?php include 'includes/sections/counter-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>