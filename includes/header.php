<?php
    // Ensure the response is served as UTF-8
    if (!headers_sent()) {
        header('Content-Type: text/html; charset=utf-8');
    }
    if (!isset($pageTitle)) $pageTitle = 'Turbo Hills — Sikkim tours from Bagdogra';
    if (!isset($metaDescription)) $metaDescription = 'Turbo Hills offers tailored Sikkim tours starting from Bagdogra Airport. Explore Gangtok, Lachung, Yuksom and more — best packages, expert guides, and fast transfers.';
    
    $allowedDomains = [
        'turbohills.com',
        'www.turbohills.com',
        'turbohills.in',
        'www.turbohills.in'
    ];

    $host = $_SERVER['HTTP_HOST'];

    echo $host;

    if (in_array($host, $allowedDomains)) {
        $siteDomain = 'https://' . $host;
    } else {
        $siteDomain = 'https://turbohills.com'; // fallback
    }

    $canonical = $siteDomain . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
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
    <meta property="og:image" content="<?php echo $siteDomain; ?>/assets/img/og-cover.jpg">
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
            "@graph": [{
                    "@type": "Organization",
                    "@id": "<?php echo $siteDomain; ?>#org",
                    "name": "Turbo Hills",
                    "url": "<?php echo $siteDomain; ?>",
                    "logo": "<?php echo $siteDomain; ?>/assets/img/Turbo-Hills-Logo.png",
                    "sameAs": [
                        "https://www.facebook.com/turbohills",
                        "https://www.instagram.com/turbohills"
                    ]
                },
                {
                    "@type": "WebSite",
                    "@id": "<?php echo $siteDomain; ?>#website",
                    "url": "<?php echo $siteDomain; ?>",
                    "name": "Turbo Hills - Sikkim & North Bengal Tours",
                    "publisher": {
                        "@id": "<?php echo $siteDomain; ?>#org"
                    },
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "<?php echo $siteDomain; ?>/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                }
            ]
        }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "<?php echo $siteDomain; ?>#localbusiness",
        "name": "Turbo Hills",
        "url": "<?php echo $siteDomain; ?>",
        "image": "<?php echo $siteDomain; ?>/assets/img/Turbo-Hills-Logo.png",
        "description": "Turbo Hills is a trusted travel agency in Bagdogra providing Sikkim and North Bengal tour packages, cab services with permits, and customized itineraries for Indian and international travelers.",
        "telephone": "<?php echo $phone_number; ?>",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bagdogra",
            "addressRegion": "West Bengal",
            "postalCode": "734014",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.6997,
            "longitude": 88.3286
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
            "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
            ],
            "opens": "09:00",
            "closes": "21:00"
        },
        "areaServed": [
            "Sikkim",
            "North Bengal",
            "Darjeeling",
            "Gangtok",
            "Kalimpong"
        ],
        "sameAs": [
            "https://www.facebook.com/turbohills",
            "https://www.instagram.com/turbohills",
            "https://www.tripadvisor.com/"
        ]
    }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AggregateRating",
            "itemReviewed": {
                "@type": "LocalBusiness",
                "@id": "<?php echo $siteDomain; ?>#localbusiness"
            },
            "ratingValue": "4.8",
            "reviewCount": "120"
        }
    </script>

    <?php
        // Optional page-level structured data (FAQ, etc.)
        if (!empty($pageSchema)) {
            echo $pageSchema;
        }
        // Additional optional structured data
        if (!empty($pageSchema2)) {
            echo $pageSchema2;
        }
    ?>
</head>

<body class="tt-magic-cursor">

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <a href="https://wa.me/<?php echo $whatsAppNumber; ?>" class="whatsapp-float" target="_blank">
        <?php echo $whatsapp_svg; ?>
    </a>

    <!-- Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z" />
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z" />
        </svg>
    </div>

    <!-- header Section Start-->
    <div class="topbar-area d-lg-block d-none">
        <div class="container">
            <div class="topbar-wrap">
                <div class="logo-and-search-area">
                    <a href="/" class="header-logo">
                        <img src="assets/img/Turbo-Hills-Logo.png" alt="Turbo Hills - Sikkim & North Bengal Travel Agency">
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
            <a href="/" class="header-logo d-lg-none d-block">
                <img src="assets/img/Turbo-Hills-Logo.png" alt="">
            </a>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="/" class="mobile-logo-wrap">
                        <img src="assets/img/Turbo-Hills-Logo.png" alt="">
                    </a>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">

                    <!-- HOME -->
                    <li class="active">
                        <a href="/">Home</a>
                    </li>

                    <li class="menu-item-has-children position-inherit">
                        <a href="destination-01.html" class="drop-down">
                            Turbo Hills Destinations
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <div class="mega-menu">
                            <div class="container">
                                <div class="menu-row">
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Sikkim Tour Packages</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li><a href="/destinations/sikkim/east-sikkim-tour/">East Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/west-sikkim-tour/">West Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/north-sikkim-tour/">North Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/south-sikkim-tour/">South Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/gangtok-tour-packages/">Gangtok Tour Packages</a></li>
                                            <li><a href="/destinations/sikkim/lachung-lachen-tour/">Lachung & Lachen Tour</a></li>
                                            <li><a href="/sikkim/yumthang-valley-tour/">Yumthang Valley Tour</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>North Bengal Tours</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li><a href="/destinations/north-bengal/darjeeling-tour-packages/">Darjeeling Tour</a></li>
                                            <li><a href="/destinations/north-bengal/kalimpong-tour-packages/">Kalimpong Tour</a></li>
                                            <li><a href="/destinations/north-bengal/dooars-tour-packages/">Dooars Tour</a></li>
                                            <li><a href="/destinations/north-bengal/sandakphu-trek/">Sandakphu Trek</a></li>
                                            <li><a href="/destinations/north-bengal/mirik-tour/">Mirik Tour</a></li>
                                            <li><a href="/destinations/north-bengal/jaldapara-lataguri-tour/">Jaldapara & Lataguri</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Cab & Permit Services</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li><a href="/destinations/cab-services/sikkim-tourist-cab/">Sikkim Tourist Cab</a></li>
                                            <li><a href="/destinations/cab-services/north-sikkim-cab/">North Sikkim Cab</a></li>
                                            <li><a href="/destinations/permit-services/north-sikkim-permit/">North Sikkim Permit</a></li>
                                            <li><a href="/destinations/permit-services/foreigners-permit-sikkim/">Foreigner Permit (PAP)</a></li>
                                            <li><a href="/destinations/cab-services/bagdogra-airport-transfer/">Bagdogra Airport Pickup</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/home1/mega-menu-vector1.svg" alt="" class="vector1">
                            <img src="assets/img/home1/mega-menu-vector2.svg" alt="" class="vector2">
                        </div>
                    </li>

                    <!-- TOUR TYPES -->
                    <li class="menu-item-has-children">
                        <a href="/tour-packages/" class="drop-down">
                            Tour Packages
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="/tour-packages/family-tour-packages/">Family Tours</a></li>
                            <li><a href="/destinations/tour-packages/honeymoon-packages/">Honeymoon Packages</a></li>
                            <li><a href="/destinations/tour-packages/budget-tour-packages/">Budget Tours</a></li>
                            <li><a href="/destinations/tour-packages/luxury-tour-packages/">Luxury Tours</a></li>
                            <li><a href="/destinations/tour-packages/custom-tour-packages/">Customized Tours</a></li>
                        </ul>
                    </li>

                    <!-- TRAVEL GUIDE (AEO GOLD) -->
                    <!-- <li class="menu-item-has-children">
                        <a href="destnations/travel-guide/" class="drop-down">
                            Travel Guide
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <i class="bi bi-plus dropdown-icon"></i>
                        <ul class="sub-menu">
                            <li><a href="/destinations/travel-guide/best-time-to-visit-sikkim/">Best Time to Visit
                                    Sikkim</a></li>
                            <li><a href="/destinations/travel-guide/sikkim-permit-rules/">Sikkim Permit Rules</a></li>
                            <li><a href="/destinations/travel-guide/north-sikkim-road-conditions/">North Sikkim Road
                                    Status</a></li>
                            <li><a href="/destinations/travel-guide/sikkim-north-bengal-faq/">Sikkim & North Bengal
                                    FAQ</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="/faq.php">FAQs</a>
                    </li>

                    <!-- ABOUT -->
                    <li>
                        <a href="/about.php">About</a>
                    </li>

                    <!-- CONTACT -->
                    <li>
                        <a href="/contact.php">Contact</a>
                    </li>

                </ul>


                <div class="contact-area d-lg-none d-flex">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="assets/img/home1/icon/whatsapp-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>WhatsApp</span>
                            <a
                                href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
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
                        <!-- <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a
                                    href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                            </div>
                        </li> -->
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
                            <a
                                href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
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
                        <!-- <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a
                                    href="https://wa.me/<?php echo $whatsAppNumber; ?>"><?php echo $whatsAppNumberLabel; ?></a>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <div class="sidebar-button mobile-menu-btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z">
                        </path>
                        <path
                            d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z">
                        </path>
                        <path
                            d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->