<?php
    $pageTitle = 'Sikkim & North Bengal Tour Packages with Cab & Permits | Turbo Hills Bagdogra';
    $metaDescription = 'Book Sikkim and North Bengal tour packages with Turbo Hills. We provide cabs, permits, sightseeing tours, airport pickup from Bagdogra, and custom itineraries for Indian & international travelers.';

    $pageSchema = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What services does Turbo Hills provide?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Turbo Hills provides Sikkim and North Bengal tour packages, cab rentals, travel permits, airport pickup from Bagdogra, sightseeing tours, and customized itineraries for Indian and international travelers."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does Turbo Hills arrange permits for North Sikkim?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Turbo Hills arranges all required permits for North Sikkim, Nathula Pass, and other restricted areas, ensuring a smooth and hassle-free travel experience."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you provide cab services from Bagdogra Airport?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Turbo Hills offers airport pickup and drop cab services from Bagdogra Airport to Gangtok, Darjeeling, Kalimpong, and all major destinations in Sikkim and North Bengal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can international tourists book tours with Turbo Hills?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Turbo Hills specializes in assisting international tourists with permits, transportation, sightseeing, and custom tour planning across Sikkim and North Bengal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why should I choose Turbo Hills for Sikkim tours?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Turbo Hills is a trusted local travel company based near Bagdogra, known for transparent pricing, experienced drivers, permit assistance, and end-to-end travel solutions."
                    }
                }
            ]
        }
    </script>';

    $pageSchema2 = '<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "serviceType": "Sikkim and North Bengal Tour Services",
            "provider": {
                "@type": "LocalBusiness",
                "@id": "<?php echo $siteDomain; ?>#localbusiness"
            },
            "areaServed": {
                "@type": "AdministrativeArea",
                "name": "Sikkim and North Bengal"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Tour & Travel Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "Cab Services from Bagdogra Airport"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "North Sikkim Permit Assistance"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                        "@type": "Service",
                        "name": "Sikkim & North Bengal Tour Packages"
                        }
                    }
                ]
            }
        }
    </script>';
    
    // Header and constants
    include __DIR__ . '/includes/header_constants.php';

    // Sections
    include __DIR__ . '/includes/sections/home-banner.php'; //Home Banner
    include __DIR__ . '/includes/sections/lead-form.php'; // Lead Form
    include __DIR__ . '/includes/sections/home2-package-slider.php'; // Package Slider
    include __DIR__ . '/includes/sections/home-5/home5-destination-section.php'; // Top Destinations
    include __DIR__ . '/includes/sections/home-3/home3-about-section.php'; // Left Image with text
    include __DIR__ . '/includes/sections/home2-parallax-section.php'; // Parallax section
    include __DIR__ . '/includes/sections/home2-destination-section.php'; // Destination Slider
    include __DIR__ . '/includes/sections/home2-service-section.php'; // Sevice center banner
    include __DIR__ . '/includes/sections/home-3/home3-tour-guide.php'; // Tour Guide Slider
    // include __DIR__ . '/includes/sections/home-5/home5-about-section.php'; // Tour Guide Slider
    // include __DIR__ . '/includes/sections/home-6/home6-service-section.php'; // Purple service section
    // include __DIR__ . '/includes/sections/home2-about-us.php'; // Trustpoint section
    // include __DIR__ . '/includes/sections/home-6/home6-offer-banner.php'; // Banner Slider
    include __DIR__ . '/includes/sections/home-2/home2-testimonial-section.php'; // Testimonial Section
    include __DIR__ . '/includes/sections/counter-section.php'; // Counter Section
    include __DIR__ . '/includes/sections/home-2/home2-gallery-section.php'; // Gallery Section
    include __DIR__ . '/includes/sections/index-faq.php'; // Index FAQ Section

    // Footer
    include __DIR__ . '/includes/footer.php';
?>