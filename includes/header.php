<?php
    // Ensure the response is served as UTF-8
    if (!headers_sent()) {
        header('Content-Type: text/html; charset=utf-8');
    }
    if (!isset($pageTitle)) $pageTitle = 'Turbo Hills — Sikkim tours from Bagdogra';
    if (!isset($metaDescription)) $metaDescription = 'Turbo Hills offers tailored Sikkim tours starting from Bagdogra Airport. Explore Gangtok, Lachung, Yuksom and more — best packages, expert guides, and fast transfers.';
    $siteDomain = 'https://turbohills.com';
    $canonical = $siteDomain . ($_SERVER['REQUEST_URI'] ?? '/');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
  <!-- Open Graph -->
  <meta property="og:site_name" content="Turbo Hills">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical); ?>">
  <!-- Favicons and touch icons could go here -->

  <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Nice Select CSS -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" href="assets/img/fav-icon.svg" type="image/svg+xml" sizes="20x20">

  <!-- Site-wide JSON-LD: Organization + WebSite -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?php echo $siteDomain; ?>#org",
        "name": "Turbo Hills",
        "url": "<?php echo $siteDomain; ?>",
        "logo": "<?php echo $siteDomain; ?>/assets/img/Turbo-Hills-Logo.png",
        "sameAs": []
      },
      {
        "@type": "WebSite",
        "@id": "<?php echo $siteDomain; ?>#website",
        "url": "<?php echo $siteDomain; ?>",
        "name": "Turbo Hills - Sikkim tours from Bagdogra",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "<?php echo $siteDomain; ?>/?s={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      }
    ]
  }
  </script>

</head>

<body class="tt-magic-cursor">

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="whatsapp-float" target="_blank">
        <?php echo $whatsapp_svg; ?>
    </a>

    <!-- Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"/>
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"/>
        </svg>
    </div>

    <!-- header Section Start-->
    <div class="topbar-area d-lg-block d-none">
        <div class="container">
            <div class="topbar-wrap">
                <div class="logo-and-search-area">
                    <a href="/" class="header-logo">
                         <img src="assets/img/Turbo-Hills-Logo.png" alt="">
                    </a>
                </div>
                <div class="topbar-right">
                    <div class="support-and-language-area">
                        <a href="#">Need Help?</a>
                    </div>
                    <a href="tel:<?php echo $phone_number; ?>" class="primary-btn1 black-bg">
                        <span>
                            <?php echo $contact_person_black_svg; ?>
                            Contact Us
                        </span>
                        <span>
                            <?php echo $contact_person_white_svg; ?>
                            Click to Call
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header class="style-1">
        <div class="container d-flex flex-nowrap align-items-center justify-content-between">
            <a href="index.html" class="header-logo d-lg-none d-block">
                <img src="assets/img/Turbo-Hills-Logo.png" alt="">
            </a>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="index.html" class="mobile-logo-wrap">
                        <img src="assets/img/Turbo-Hills-Logo.png" alt="">
                    </a>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li class="menu-item-has-children active">
                        <a href="index.html" class="drop-down">
                            Home
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li class="active"><a href="index.html">Main Home</a></li>
                            <li><a href="travel-agency-01.html">Travel Agency-01</a></li>
                            <li><a href="travel-agency-02.html">Travel Agency-02</a></li>
                            <li><a href="travel-agency-03.html">Travel Agency-03</a></li>
                            <li><a href="travel-agency-04.html">Travel Agency-04</a></li>
                            <li><a href="experience-01.html">Experience-01</a></li>
                            <li><a href="experience-02.html">Experience-02</a></li>
                            <li><a href="visa-agency.html">Visa Agency</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children position-inherit">
                        <a href="destination-01.html" class="drop-down">
                            Destination
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <div class="mega-menu">
                            <div class="container">
                                <div class="menu-row">
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Europe</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/france-flag.png" alt="">
                                                    Paris, France
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/uk-flag.png" alt="">
                                                    United Kingdom
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/netherland-flag.png" alt="">
                                                    Netherlands
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/italy-flag.png" alt="">
                                                    Italy
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/greece-flag.png" alt="">
                                                    Greece
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/romania-flag.png" alt="">
                                                    Romania
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Asia</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/japan-flag2.png" alt="">
                                                    Tokyo, Japan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/indonesia-flag.png" alt="">
                                                    Indonesia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/thailand-flag.png" alt="">
                                                    Thailand
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/malaysia-flag.png" alt="">
                                                    Malaysia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/vietnam-flag.png" alt="">
                                                    Hanoi, Vietnam
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/india-flag.png" alt="">
                                                    India
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Africa</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/egypt-flag.png" alt="">
                                                    Egypt
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/south-africa-flag.png" alt="">
                                                    South Africa
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/zimbabwe-flag.png" alt="">
                                                    Zimbabwe
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/kenya-flag.png" alt="">
                                                    Kenya
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/morocco-flag.png" alt="">
                                                    Morocco
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/senegal-flag.png" alt="">
                                                    Senegal
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Oceania</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/australia-flag.png" alt="">
                                                    Australia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/south-africa-flag.png" alt="">
                                                    New Zealand
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/papua-new-guinea-flag.png" alt="">
                                                    Papua New Guinea
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Middle East</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/uae-flag.png" alt="">
                                                    United Arab Emirates
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/qatar-flag.png" alt="">
                                                    Qatar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/bahrain-flag.png" alt="">
                                                    Bahrain
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/saudi-arabia-flag.png" alt="">
                                                    Saudi Arabia
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/jordan-flag.png" alt="">
                                                    Jordan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/palestine-flag.png" alt="">
                                                    Palestine
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>North America</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/us-flag.png" alt="">
                                                    United States
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/canada-flag.png" alt="">
                                                    Canada
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/mexico-flag.png" alt="">
                                                    Mexico
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/jamaica-flag.png" alt="">
                                                    Jamaica
                                                </a>
                                            </li>
                                            <li>
                                                <a href="destination-details.html">
                                                    <img src="assets/img/home1/costa-rica-flag.png" alt="">
                                                    Costa Rica
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/home1/mega-menu-vector1.svg" alt="" class="vector1">
                            <img src="assets/img/home1/mega-menu-vector2.svg" alt="" class="vector2">
                        </div>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="travel-package-01.html" class="drop-down">
                            Travel Package
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="travel-package-01.html">Travel Package Style 01</a></li>
                            <li><a href="travel-package-02.html">Travel Package Style 02</a></li>
                            <li><a href="travel-package-details.html">Travel Package Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="visa.html" class="drop-down">
                            Visa
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="visa.html">Visa Package</a></li>
                            <li><a href="visa-details.html">Visa Package Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" class="drop-down">
                            Pages
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="about.html">About GoFly</a></li>
                            <li>
                                <a href="destination-01.html">Destination</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="destination-01.html">Destination Style 01</a></li>
                                    <li><a href="destination-02.html">Destination Style 02</a></li>
                                    <li><a href="destination-03.html">Destination Style 03</a></li>
                                    <li><a href="destination-04.html">Destination Style 04</a></li>
                                    <li><a href="destination-05.html">Destination Style 05</a></li>
                                    <li><a href="destination-06.html">Destination Style 06</a></li>
                                    <li><a href="destination-details.html">Destination Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="experience-grid.html">Experience</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="experience-grid.html">Experience Grid</a></li>
                                    <li><a href="experience-details.html">Experience Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="hotel.html">Hotel</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="hotel.html">Hotel</a></li>
                                    <li><a href="hotel-details.html">Hotel Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="travel-inspiration-01.html">Travel Inspiration</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="travel-inspiration-01.html">Travel Inspiration Style 01</a></li>
                                    <li><a href="travel-inspiration-02.html">Travel Inspiration Style 02</a></li>
                                    <li><a href="travel-inspiration-03.html">Travel Inspiration Style 03</a></li>
                                    <li><a href="travel-inspiration-details.html">Travel Inspiration Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="guider.html">Guider</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="guider.html">Guider</a></li>
                                    <li><a href="guider-details.html">Guider Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                                <i class="d-lg-flex d-none bi-caret-right-fill dropdown-icon"></i>
                                <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="error.html">404</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="contact-area d-lg-none d-flex">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="assets/img/home1/icon/whatsapp-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>WhatsApp</span>
                            <a href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                        </div>
                    </div>  
                    <i class="bi bi-caret-down-fill contact-dropdown-btn"></i>
                    <ul class="contact-list">
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddressLabel; ?></a>
                            </div>
                        </li>
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-right">
                <div class="contact-area d-lg-flex d-none">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="assets/img/home1/icon/whatsapp-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>WhatsApp</span>
                            <a href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                        </div>
                    </div>  
                    <i class="bi bi-caret-down-fill contact-dropdown-btn"></i>
                    <ul class="contact-list">
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddressLabel; ?></a>
                            </div>
                        </li>
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-button mobile-menu-btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                        <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                        <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->