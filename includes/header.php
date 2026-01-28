<?php
    // Ensure the response is served as UTF-8
    if (!headers_sent()) {
        header('Content-Type: text/html; charset=utf-8');
    }

    // Default page title and meta description
    if (!isset($pageTitle)) $pageTitle = 'Turbo Hills — Sikkim Tours from Bagdogra Airport';
    if (!isset($metaDescription)) $metaDescription = 'Turbo Hills offers customized Sikkim tour packages from Bagdogra Airport. Visit Gangtok, Lachung, Yumthang & Yuksom with expert drivers, permits, and smooth transfers.';
    
    // Determine the site domain based on the host
    $allowedDomains = [
        'turbohills.com',
        'www.turbohills.com',
        'turbohills.in',
        'www.turbohills.in'
    ];
    $host = $_SERVER['HTTP_HOST'];
    if (in_array($host, $allowedDomains)) {
        $siteDomain = 'https://' . $host;
    } else {
        $siteDomain = 'https://turbohills.com'; // fallback
    }

    // Canical URL
    $canonical = $siteDomain . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    if ($canonical === $siteDomain . '/index.php') {
        $canonical = $siteDomain . '/';
    }
    
    if (!isset($schemaType)) {
        $schemaType = null;
    }
?>
<!doctype html>
<html lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical); ?>">
    <meta property="og:site_name" content="Turbo Hills">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($metaDescription); ?>">

    <meta property="og:image" content="<?php echo $siteDomain; ?>/<?= BASE_URL ?>/assets/img/og-cover.jpg">
    <link rel="preload" as="image" href="<?= $siteDomain; ?>/<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png">
    <link rel="alternate" hreflang="en-IN" href="https://turbohills.in<?= strtok($_SERVER['REQUEST_URI'], '?'); ?>">
    <link rel="alternate" hreflang="en" href="https://turbohills.com<?= strtok($_SERVER['REQUEST_URI'], '?'); ?>">
    <!-- Favicons and touch icons could go here -->

    <!-- Bootstrap CSS -->
    <link href="<?= BASE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="<?= BASE_URL ?>/assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="<?= BASE_URL ?>/assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="<?= BASE_URL ?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Nice Select CSS -->
    <link href="<?= BASE_URL ?>/assets/css/nice-select.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/daterangepicker.css">
    <!-- BoxIcon  CSS -->
    <link href="<?= BASE_URL ?>/assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="<?= BASE_URL ?>/assets/img/fav-icon.svg" type="image/svg+xml" sizes="20x20">

    <!-- Site-wide JSON-LD: Organization + WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "@id": "<?= $siteDomain; ?>#localbusiness",
        "name": "Turbo Hills",
        "url": "<?= $siteDomain; ?>",
        "logo": "<?= $siteDomain; ?>/<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png",
        "image": "<?= $siteDomain; ?>/<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png",
        "description": "Turbo Hills is a trusted travel agency in Bagdogra providing Sikkim and North Bengal tour packages, cab services with permits, and customized itineraries for Indian and international travelers.",
        "telephone": "<?= $phone_number; ?>",
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
            "closes": "22:00"
        },

        "areaServed": [
            "Sikkim",
            "North Bengal",
            "Darjeeling",
            "Gangtok",
            "Kalimpong",
            "Siliguri",
            "Bagdogra",
            "Dooars",
            "Mirik",
            "Gopaldhara",
            "Jaldapara",
            "Lataguri"
            "Sandakphu",
            "Yuksom",
            "Lachung",
            "Lachen",
            "Pelling",
            "Yumthang Valley",
            "Nathula Pass",
            "Gurudongmar Lake",
            "Zero Point",
            "Nathula Pass",
            "Mangan",
            "Ravangla",
            "Namchi",
            "Suntalekhola",
            "Jorepokhri",
            "Kalijhora",
            "Sittong",
            "West Sikkim",
            "East Sikkim",
            "North Sikkim",
            "South Sikkim"
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
        "@type": "WebSite",
        "@id": "<?= $siteDomain; ?>#website",
        "url": "<?= $siteDomain; ?>",
        "name": "Turbo Hills - Sikkim & North Bengal Tours",
        "publisher": {
            "@id": "<?= $siteDomain; ?>#localbusiness"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?= $siteDomain; ?>/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TouristAttraction",
        "@id": "<?= $siteDomain; ?>#bagdogra-airport-landing",
        "name": "Bagdogra Airport Tours & Transfers by Turbo Hills",
        "description": "Turbo Hills provides Sikkim and North Bengal tour packages with airport pickup from Bagdogra Airport (IXB). Expert drivers, permits, and seamless mountain travel.",
        "url": "<?= $siteDomain; ?>/bagdogra-airport-tours/",
        "isAccessibleForFree": false,

        "touristType": [
            "Domestic Tourists",
            "International Tourists",
            "Honeymoon Travelers",
            "Family Travelers"
        ],

        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.6812,
            "longitude": 88.3286
        },

        "location": {
            "@type": "Place",
            "name": "Bagdogra Airport",
            "sameAs": "https://en.wikipedia.org/wiki/Bagdogra_Airport",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Bagdogra",
                "addressRegion": "West Bengal",
                "postalCode": "734014",
                "addressCountry": "IN"
            }
        },

        "provider": {
            "@type": ["LocalBusiness", "TravelAgency"],
            "@id": "<?= $siteDomain; ?>#localbusiness"
        },

        "areaServed": [
            {
                "@type": "Place",
                "name": "Sikkim"
            },
            {
                "@type": "Place",
                "name": "North Bengal"
            },
            {
                "@type": "Place",
                "name": "Gangtok"
            },
            {
                "@type": "Place",
                "name": "Darjeeling"
            },
            {
                "@type": "Place",
                "name": "Gurudongmar Lake"
            }
        ],

        "availableLanguage": ["English", "Hindi", "Bengali"]
    }
    </script>
    <?php if (isset($schemaType) && $schemaType === 'terms'): ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "Terms & Conditions",
          "url": "<?php echo htmlspecialchars($canonical); ?>",
          "publisher": {
            "@type": "Organization",
            "name": "Turbo Hills",
            "url": "https://turbohills.com"
          }
        }
        </script>
    <?php elseif (isset($schemaType) && $schemaType === 'privacy'): ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "Privacy Policy",
          "url": "<?php echo htmlspecialchars($canonical); ?>",
          "publisher": {
            "@type": "Organization",
            "name": "Turbo Hills",
            "url": "https://turbohills.com"
          }
        }
        </script>
    <?php endif; ?>

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
                        <img src="<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png" alt="Turbo Hills - Sikkim & North Bengal Travel Agency">
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
                <img src="<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png" alt="">
            </a>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="/" class="mobile-logo-wrap">
                        <img src="<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png" alt="">
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
                                            <li><a href="/destinations/sikkim/east-sikkim-tour.php">East Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/west-sikkim-tour.php">West Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/north-sikkim-tour.php">North Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/south-sikkim-tour.php">South Sikkim Tour</a></li>
                                            <li><a href="/destinations/sikkim/gangtok-tour-packages.php">Gangtok Tour Packages</a></li>
                                            <li><a href="/destinations/sikkim/lachung-lachen-tour.php">Lachung & Lachen Tour</a></li>
                                            <li><a href="/sikkim/yumthang-valley-tour/">Yumthang Valley Tour</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>North Bengal Tours</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li><a href="/destinations/north-bengal/darjeeling-tour-packages.php">Darjeeling Tour</a></li>
                                            <li><a href="/destinations/north-bengal/kalimpong-tour-packages.php">Kalimpong Tour</a></li>
                                            <li><a href="/destinations/north-bengal/dooars-tour-packages.php">Dooars Tour</a></li>
                                            <li><a href="/destinations/north-bengal/sandakphu-trek.php">Sandakphu Trek</a></li>
                                            <li><a href="/destinations/north-bengal/mirik-tour.php">Mirik Tour</a></li>
                                            <li><a href="/destinations/north-bengal/jaldapara-lataguri-tour.php">Jaldapara & Lataguri</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-single-item">
                                        <div class="menu-title">
                                            <h5>Cab & Permit Services</h5>
                                        </div>
                                        <i class="bi bi-plus dropdown-icon"></i>
                                        <ul>
                                            <li><a href="/destinations/cab-services/sikkim-tourist-cab.php">Sikkim Tourist Cab</a></li>
                                            <li><a href="/destinations/cab-services/north-sikkim-cab.php">North Sikkim Cab</a></li>
                                            <li><a href="/destinations/permit-services/north-sikkim-permit.php">North Sikkim Permit</a></li>
                                            <li><a href="/destinations/permit-services/foreigners-permit-sikkim.php">Foreigner Permit (PAP)</a></li>
                                            <li><a href="/destinations/cab-services/bagdogra-airport-transfer.php">Bagdogra Airport Pickup</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <img src="<?= BASE_URL ?>/assets/img/home1/mega-menu-vector1.svg" alt="" class="vector1">
                            <img src="<?= BASE_URL ?>/assets/img/home1/mega-menu-vector2.svg" alt="" class="vector2">
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
                            <li><a href="/tour-packages/family-tour-packages.php">Family Tours</a></li>
                            <li><a href="/destinations/tour-packages/honeymoon-packages.php">Honeymoon Packages</a></li>
                            <li><a href="/destinations/tour-packages/budget-tour-packages.php">Budget Tours</a></li>
                            <li><a href="/destinations/tour-packages/luxury-tour-packages.php">Luxury Tours</a></li>
                            <li><a href="/destinations/tour-packages/custom-tour-packages.php">Customized Tours</a></li>
                        </ul>
                    </li>
                    <!-- FAQ -->
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
                            <img src="<?= BASE_URL ?>/assets/img/home1/icon/whatsapp-icon.svg" alt="">
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
                                <img src="<?= BASE_URL ?>/assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddressLabel; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-right">
                <div class="contact-area d-lg-flex d-none">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="<?= BASE_URL ?>/assets/img/home1/icon/whatsapp-icon.svg" alt="">
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
                                <img src="<?= BASE_URL ?>/assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddressLabel; ?></a>
                            </div>
                        </li>
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