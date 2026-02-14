<?php

    // Variables
    $pageTitle = 'Gurudongmar Lake — Sacred High-Altitude Lake in North Sikkim';
    $metaDescription = 'Experience Gurudongmar Lake — one of the highest lakes in India with surreal turquoise waters, high-altitude panoramas and cultural significance.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/gurudongmar.jpg';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Gurudongmar Lake — High-Altitude Pilgrimage & Photography',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg'
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Gurudongmar Lake — Sacred, High-Altitude Wonder",
            "subheading" => "Sacred lake visits, high-altitude panoramas and spiritual significance", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Gurudongmar Highlights',
            "activity_body_content" => 'Gurudongmar lake is a remote high-altitude lake with spiritual importance and stunning turquoise waters — visits require acclimatisation and permit assistance.',
            "assistant_snippet" => 'Visit Gurudongmar Lake with acclimatisation and permit assistance for a high-altitude sacred lake experience.',
            "location_slider_wrap" => 'Nearby — North Sikkim Highlights',
            "highlights_tour" => 'Highlights — Gurudongmar Lake',
            "Additional_Info" => 'Permit & Acclimatisation Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Gurudongmar visits are high-altitude and may require prior acclimatisation and permit arrangements.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Remote, high-altitude experience',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => '4x4/robust vehicles required',
            "group_size" => 'Small groups with medical readiness',
            "language" => 'English & Hindi guides',
            "guide" => 'Experienced mountain guides',
            "age_range" => 'Not recommended for those with serious medical conditions',
            "season" => 'Best: May–Oct; winters often inaccessible',
            "category" => 'High-Altitude • Pilgrimage • Photography'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Permit handling and necessary clearances",
                    "Robust vehicles and experienced drivers",
                    "Accommodation and meals as listed"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Medical evacuation insurance",
                    "Personal medical expenses",
                    "Flights to base locations"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Sacred lake with turquoise waters.",
                "Remote mountain vistas and pilgrimage stops.",
                "Requires acclimatisation and permit arrangements."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'North Sikkim — Key Stops',
            "image_and_names" => [
                ['name' => 'Gurudongmar Lake', 'image' => '/assets/img/sikkim/gurudongmar.jpg'],
                ['name' => 'Lachung', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Lachen', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Acclimatisation",
                    "description" => "Plan for proper acclimatisation before attempting high-altitude visits."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "Gurudongmar visits require permits and coordination with local authorities."
                ],
                [
                    "highlight" => "Health",
                    "description" => "Carry medication and consult a physician if you have health concerns."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How difficult is the visit to Gurudongmar?",
                    "answer" => "Gurudongmar is remote and high-altitude; preparation and acclimatisation are essential."
                ],
                [
                    "question" => "What permits are needed?",
                    "answer" => "Permits are required and handled by tour operators; foreign nationals may have additional requirements."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Sacred, high-altitude pilgrimage requiring acclimatisation and permits."
        ] 
    ];
    

    // Header and constants
    include __DIR__ . '/../../../includes/header_constants.php';

    // Output structured data (JSON-LD) for AEO: WebPage, FAQPage and TouristTrip
    $ld_graph = [];
    $page_url = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . ($_SERVER['REQUEST_URI'] ?? '') ;
    }

    $ld_graph[] = [
        "@type" => "WebPage",
        "name" => $pageTitle,
        "description" => $metaDescription,
        "url" => $page_url
    ];

    // FAQ items
    if (!empty($data['faq']['items']) && is_array($data['faq']['items'])) {
        $faq_entities = [];
        foreach ($data['faq']['items'] as $fq) {
            if (!empty($fq['question']) && !empty($fq['answer'])) {
                $faq_entities[] = [
                    "@type" => "Question",
                    "name" => $fq['question'],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => $fq['answer']
                    ]
                ];
            }
        }
        if (!empty($faq_entities)) {
            $ld_graph[] = [
                "@type" => "FAQPage",
                "mainEntity" => $faq_entities
            ];
        }
    }

    // TouristTrip entry
    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);
    $ld_graph[] = [
        "@type" => "TouristTrip",
        "name" => $pageTitle,
        "description" => $metaDescription,
        "image" => $first_image_url
    ];

    $ld = [
        "@context" => "https://schema.org",
        "@graph" => $ld_graph
    ];

    echo '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';

    include BASE_PATH . '/includes/sections/breadcrumb-section.php';
    include BASE_PATH . '/includes/sections/enquiry-modal.php';
    include BASE_PATH . '/includes/sections/package-details-section.php';
    require_once BASE_PATH . '/includes/footer.php';

?>
