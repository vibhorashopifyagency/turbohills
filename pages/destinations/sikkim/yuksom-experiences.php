<?php

    // Variables
    $pageTitle = 'Yuksom Experiences — West Sikkim Trek & Culture';
    $metaDescription = 'Explore Yuksom — gateway to Dzongri and trekking routes, cultural heritage and scenic trails. Private transfers from Bagdogra and local guides.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/lachung.jpg';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Yuksom Experiences — Trekking & Heritage',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Yuksom — Gateway to Dzongri & Trekking Trails",
            "subheading" => "Historic gateway town, trekking starts and alpine scenery", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Yuksom Highlights — Trek Starts & Heritage',
            "activity_body_content" => 'Yuksom is the traditional starting point for treks to Dzongri and Goecha La, and offers cultural sites and scenic walks for short-stay visitors.',
            "assistant_snippet" => 'Yuksom — trekking gateway to Dzongri; private transfers and local guide support available.',
            "location_slider_wrap" => 'Top Stops Around Yuksom',
            "highlights_tour" => 'Highlights — Yuksom & Trekking Routes',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Yuksom itineraries include transfers, local guides and options to join short treks or cultural excursions.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Guesthouses and eco-lodges',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Private transfers and local vehicles',
            "group_size" => 'Private or small trekking groups',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Experienced trekking guides available',
            "age_range" => 'Trekking depends on difficulty; suitable for fit travellers',
            "season" => 'Best: Mar–May & Sep–Nov for trekking',
            "category" => 'Trekking • Culture • Nature'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfer from Bagdogra/NJP",
                    "Local guiding for treks (if selected)",
                    "Accommodation as per itinerary",
                    "Meals as listed",
                    "Permit assistance where required"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Trekking permits if applicable",
                    "Personal trekking gear",
                    "Insurance and personal expenses"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Trek starts to Dzongri and Goecha La.",
                "Historic Yuksom monastery sites and local culture.",
                "Scenic village walks and homestay experiences."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Yuksom & Trek Routes',
            "image_and_names" => [
                ['name' => 'Yuksom', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Dzongri', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Goecha La', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Khecheopalri', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Pelling', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Trek Difficulty",
                    "description" => "Choose treks according to fitness; higher trails require acclimatisation and experience."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "Some trekking regions require permits; we can assist with arrangements."
                ],
                [
                    "highlight" => "Packing",
                    "description" => "Bring trekking boots, warm layers and rain protection for higher trails."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I get to Yuksom?",
                    "answer" => "Yuksom is accessible by road from Bagdogra with a drive to Pelling and onward; private transfers typically arranged by us."
                ],
                [
                    "question" => "When is the best time for trekking from Yuksom?",
                    "answer" => "Spring (Mar–May) and autumn (Sep–Nov) are the best windows for clear weather and trekking."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Plan your Yuksom trek — transfers, guides and lodging available."
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
