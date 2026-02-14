<?php

    // Variables
    $pageTitle = 'Tsomgo (Changu) Lake — High-Altitude Glacial Lake Near Gangtok';
    $metaDescription = 'Visit Tsomgo (Changu) Lake for serene glacial waters, yak rides and mountain panoramas. Short day trips from Gangtok with permits and local guides.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/tsomgo-lake.jpg' : '/assets/img/sikkim/tsomgo-lake.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Tsomgo Lake — Changu Experience & Yak Rides',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Tsomgo (Changu) Lake — Sacred High-Altitude Lake",
            "subheading" => "Glacial shores, yak rides and serene mountain reflections", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Tsomgo Lake Highlights',
            "activity_body_content" => 'Tsomgo (Changu) Lake is a high-altitude glacial lake close to Gangtok that draws visitors for its reflective waters, yak rides and mountain panoramas. Typical visits feature short walks along the shore, cultural sights like Baba Mandir and optional yak rides. As access can be subject to permits and weather, we recommend planning Tsomgo as a day trip from Gangtok with a local guide. Facilities are basic so bring essentials and dress in layers.',
            "assistant_snippet" => 'Tsomgo Lake day trips — glacial shores, optional yak rides and short guided walks; permit guidance available.',
            "location_slider_wrap" => 'Nearby Attractions',
            "highlights_tour" => 'Highlights — Tsomgo Lake',
            "Additional_Info" => 'Permit & Travel Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Tsomgo visits typically include short walks and optional yak rides; permits for foreigners may be required.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Short day trip with basic facilities',
            "breakfast_and_dinner" => 'Meals not typically included for short visits',
            "transportation" => 'Private transfer from Gangtok',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi guides available',
            "guide" => 'Local guide and driver assistance',
            "age_range" => 'Family friendly, accessible for most ages',
            "season" => 'Best: Mar–Jun & Sep–Nov; winter cold',
            "category" => 'Day Trip • Scenic • Culture'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfers from Gangtok",
                    "Local permits and guide assistance",
                    "Optional yak-ride charges as applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Any personal expenses",
                    "Meals unless specified",
                    "Entrance fees where applicable"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Tsomgo Lake's glacial waters and yak rides.",
                "Short day trips from Gangtok with scenic stops.",
                "Photography-friendly viewpoints near the shoreline."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Nearby — Tsomgo Lake & Surroundings',
            "image_and_names" => [
                ['name' => 'Tsomgo Lake', 'image' => '/assets/img/sikkim/tsomgo-lake.jpg'],
                ['name' => 'Nathula Pass', 'image' => '/assets/img/sikkim/nathula.jpg'],
                ['name' => 'Baba Mandir', 'image' => '/assets/img/sikkim/baba-mandir.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/gangtok.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits",
                    "description" => "Certain areas around Tsomgo may require permits, especially for foreign nationals."
                ],
                [
                    "highlight" => "Altitude",
                    "description" => "Tsomgo sits at high elevation; short acclimatisation recommended for sensitive travellers."
                ],
                [
                    "highlight" => "Facilities",
                    "description" => "Limited facilities near the lake; carry water and essentials."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "Do I need a permit to visit Tsomgo?",
                    "answer" => "Some visitors, especially foreign nationals, may need permits for areas near Tsomgo; we assist with permit arrangements where required."
                ],
                [
                    "question" => "Are yak rides safe?",
                    "answer" => "Yak rides are optional; choose reputable operators, follow guides' instructions and avoid rides if you have mobility concerns."
                ],
                [
                    "question" => "How long is a typical Tsomgo visit?",
                    "answer" => "Most visits are half-day to full-day trips from Gangtok including travel time; plan for a 4–6 hour outing."
                ],
                [
                    "question" => "What should I carry for Tsomgo Lake?",
                    "answer" => "Carry warm clothing, water, sunscreen and basic snacks. Facilities are limited near the lake."
                ],
                [
                    "question" => "Is Tsomgo suitable for families?",
                    "answer" => "Yes — short walks and guided visits make Tsomgo appropriate for families, though altitude sensitivity should be considered for young children and seniors."
                ],
                [
                    "question" => "Can Tsomgo be combined with other Gangtok day trips?",
                    "answer" => "Yes — combine Tsomgo with visits to Baba Mandir, Nathula (permit required) or nearby viewpoints for a full day itinerary."
                ],
                [
                    "question" => "Are there altitude concerns at Tsomgo?",
                    "answer" => "Tsomgo sits at high elevation; those with breathing or heart conditions should consult a physician before travel."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Short, scenic lake visit suitable for photography and cultural interest."
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
