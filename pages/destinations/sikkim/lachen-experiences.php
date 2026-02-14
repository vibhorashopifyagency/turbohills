<?php

    // Variables
    $pageTitle = 'Lachen Experiences — North Sikkim Tours from Bagdogra';
    $metaDescription = 'Visit Lachen and nearby high-altitude attractions. Private transfers from Bagdogra, local guides and permit assistance.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/lachung.jpg' : '/assets/img/sikkim/lachung.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Lachen Experiences — Gateway to North Sikkim',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Lachen — High-Altitude Lakes & Villages",
            "subheading" => "Access to Gurudongmar Lake, traditional villages and alpine roads", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Lachen Highlights — High-Altitude Landscapes',
            "activity_body_content" => 'Lachen serves as the gateway to North Sikkim’s high-altitude lakes and remote villages. From Lachen travellers access Gurudongmar Lake, remote alpine roads and traditional mountain hospitality. Our itineraries prioritise acclimatisation, safe driving practices and permit handling so guests can enjoy scenic drives, homestays and short guided walks while minimising altitude risk. Expect robust vehicles, experienced drivers and local guides who manage logistics for high-altitude visits.',
            "assistant_snippet" => 'Lachen gateway to Gurudongmar — acclimatisation-focused itineraries, permit handling and robust transfers.',
            "location_slider_wrap" => 'Top Stops Around Lachen',
            "highlights_tour" => 'Highlights — Lachen & Surroundings',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Lachen itineraries include private transfers from Bagdogra, mountain accommodation, guide and permit handling for high-altitude visits.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain lodges and guesthouses',
            "breakfast_and_dinner" => 'Breakfast & dinner included as per itinerary',
            "transportation" => 'Private SUV with experienced driver',
            "group_size" => 'Private or small groups (2–8 travellers)',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Certified local guide with permit assistance',
            "age_range" => 'Recommended 12–65; consult for seniors',
            "season" => 'Best: Apr–Jun & Sep–Nov; winter may restrict access',
            "category" => 'Adventure • High-Altitude • Nature'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "All inter-city transfers in a private SUV",
                    "Mountain accommodation (as per itinerary)",
                    "Breakfast and dinner as per plan",
                    "Local certified guide & permit handling",
                    "Sightseeing to Gurudongmar (subject to permits)"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Lunches, tips and optional activities"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Gurudongmar Lake — High-altitude glacial lake (permit required).",
                "Scenic mountain drives and alpine villages.",
                "Traditional Lachen village experiences and local cuisine."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Lachen & North Sikkim',
            "image_and_names" => [
                ['name' => 'Lachen', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Gurudongmar Lake', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Zero Point', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Lachung', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Yumthang Valley', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "High Altitude",
                    "description" => "Gurudongmar and Zero Point are high-altitude sites; acclimatise and inform us about medical conditions."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "Inner-line permits required for some areas; we arrange permits for travellers."
                ],
                [
                    "highlight" => "Weather",
                    "description" => "Carry warm layers; roads can be affected in winter months."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I reach Lachen?",
                    "answer" => "Lachen is reached via a multi-stage drive from Bagdogra/ NJP, usually with overnight stops for acclimatisation. We organise private transfers and breaks."
                ],
                [
                    "question" => "When is Gurudongmar accessible?",
                    "answer" => "Gurudongmar access depends on weather and road conditions; spring to early autumn is the most reliable window. Permits are required and arranged by us."
                ],
                [
                    "question" => "Are there altitude concerns for Lachen?",
                    "answer" => "Yes — Lachen and onward sites are high-altitude. Allow time to acclimatise, avoid strenuous activity on arrival and disclose medical conditions before travel."
                ],
                [
                    "question" => "What should I pack for Lachen and North Sikkim?",
                    "answer" => "Pack warm layers, sturdy boots, sun protection and any personal medication. Include high-energy snacks and a basic first-aid kit."
                ],
                [
                    "question" => "Can I customise my Lachen itinerary?",
                    "answer" => "Yes — itineraries are flexible; we can add extra acclimatisation days, higher-standard stays or alternate routes depending on preferences."
                ],
                [
                    "question" => "Is travel to Lachen suitable for families?",
                    "answer" => "Families can visit with cautious pacing and private transfers; consult us about age or health concerns so we can adjust the plan."
                ],
                [
                    "question" => "How long should I plan for a Lachen–Gurudongmar trip?",
                    "answer" => "A typical Lachen-based North Sikkim trip ranges 3–5 days depending on destinations and permit windows."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Lachen adventure — permits, transfers and local guidance included."
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
