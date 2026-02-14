<?php

    // Variables
    $pageTitle = 'Gangtok Experiences — East Sikkim Tours from Bagdogra';
    $metaDescription = 'Explore Gangtok: monasteries, viewpoints and cultural tours. Private transfers from Bagdogra, local guides and permit assistance.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/lachung.jpg';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Gangtok Experiences — City & Cultural Tours',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Gangtok — Monasteries, Viewpoints & Culture",
            "subheading" => "City walks, Tibetan monasteries and panoramic Himalayan views", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Gangtok Highlights — Culture & Views',
            "activity_body_content" => 'Discover Gangtok’s monasteries, MG Marg, and nearby viewpoints on relaxed day trips from Bagdogra. Ideal for culture seekers and short-stay visitors.',
            "assistant_snippet" => 'Explore Gangtok from Bagdogra — monasteries, viewpoints, and guided cultural walks.',
            "location_slider_wrap" => 'Top Stops Around Gangtok',
            "highlights_tour" => 'Highlights — Gangtok & Surroundings',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Gangtok city experiences include private transfers, local guide support and easy day trips to nearby attractions for a comfortable cultural stay.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ city hotels and boutique stays',
            "breakfast_and_dinner" => 'Daily breakfast included; dinner on request',
            "transportation" => 'Private car transfers and local taxis as required',
            "group_size" => 'Private or small groups (2–12 travellers)',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Local certified guide for city tours',
            "age_range" => 'Suitable for most ages',
            "season" => 'Year-round; best Oct–Dec & Mar–May',
            "category" => 'Culture • Sightseeing'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "City transfers and sightseeing as per itinerary",
                    "Accommodation in Gangtok (as per package)",
                    "Daily breakfast",
                    "Local guide for cultural tours",
                    "Permit assistance where applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Meals not mentioned and personal expenses",
                    "Optional activities"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Rumtek and Enchey Monasteries — Buddhist culture and rituals.",
                "MG Marg — Walk, shop and taste local cuisine.",
                "Tsomgo Lake day trip and Baba Mandir (seasonal).",
                "Hanuman Tok and Tashi Viewpoint for Himalayan panoramas."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Gangtok & Nearby',
            "image_and_names" => [
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Rumtek Monastery', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Tsomgo Lake', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Nathula Pass', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Lachen', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits & ID",
                    "description" => "Some nearby attractions may require permits; carry original ID."
                ],
                [
                    "highlight" => "Altitude & Health",
                    "description" => "Gangtok is a hill city with mild altitude; stay hydrated and rest between excursions."
                ],
                [
                    "highlight" => "Weather & Packing",
                    "description" => "Pack layers and comfortable walking shoes for city walks and short drives."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How far is Gangtok from Bagdogra?",
                    "answer" => "Gangtok is approximately a 4–5 hour drive from Bagdogra (depending on traffic and road conditions)."
                ],
                [
                    "question" => "Do I need permits to visit Gangtok?",
                    "answer" => "For Gangtok city itself permits are not required, but some nearby protected areas may require permits which we can arrange."
                ],
                [
                    "question" => "What is the best time to visit Gangtok?",
                    "answer" => "Best months are March–June and October–December for pleasant weather and clear views."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Gangtok city experience — local guides and private transfers included."
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
