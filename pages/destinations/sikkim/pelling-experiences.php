<?php

    // Variables
    $pageTitle = 'Pelling Experiences — West Sikkim Tours from Bagdogra';
    $metaDescription = 'Discover Pelling: Himalayan vistas, Pemayangtse Monastery and waterfalls. Private transfers from Bagdogra, permit help and local guides.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/lachung.jpg' : '/assets/img/sikkim/lachung.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Pelling Experiences — Himalayan Views & Monasteries',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Pelling — Kanchenjunga Views & Heritage",
            "subheading" => "Panoramic Kanchenjunga viewpoints, monasteries and waterfalls", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Pelling Highlights — Kanchenjunga Panorama',
            "activity_body_content" => 'Pelling is a window onto Kanchenjunga — the world’s third highest peak — and combines dramatic viewpoints with rich local heritage. Visitors typically explore Pemayangtse Monastery, Khecheopalri Lake, waterfalls and village walks. Our Pelling programs balance comfortable stays with easy guided walks to sunrise viewpoints, cultural visits and photo stops. Transfers from Bagdogra/NJP are comfortable and we include local guides to explain heritage and ecology, making Pelling ideal for culture seekers and nature photographers.',
            "assistant_snippet" => 'Pelling highlights: Kanchenjunga panoramas, Pemayangtse Monastery and heritage walks; private transfers included.',
            "location_slider_wrap" => 'Top Stops Around Pelling',
            "highlights_tour" => 'Highlights — Pelling & Surroundings',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Pelling itineraries include private transfers, comfortable stays and guided walks to viewpoints and heritage sites.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ mountain lodges and guesthouses',
            "breakfast_and_dinner" => 'Breakfast included; dinner available',
            "transportation" => 'Private car transfers and local vehicles',
            "group_size" => 'Private or small groups (2–12 travellers)',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Local guide with heritage knowledge',
            "age_range" => 'Family-friendly',
            "season" => 'Best: Mar–Jun & Sep–Dec',
            "category" => 'Nature • Culture • Views'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "All transfers in a private vehicle",
                    "Accommodation in Pelling (as per package)",
                    "Daily breakfast",
                    "Local guide for viewpoints and monasteries",
                    "Permit assistance where applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Transport to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Lunches and personal expenses",
                    "Optional activities"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Kanchenjunga viewpoints — Sunrise and panorama spots.",
                "Pemayangtse Monastery — Historic Buddhist monastery.",
                "Khecheopalri Lake (nearby) — Sacred lake and nature walks.",
                "Waterfalls and village walks for cultural immersion."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Pelling & Nearby',
            "image_and_names" => [
                ['name' => 'Pelling', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Pemayangtse', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Khecheopalri Lake', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Rabdentse Ruins', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Yuksom', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits & ID",
                    "description" => "Carry photo ID; some nearby protected areas may need permits."
                ],
                [
                    "highlight" => "Altitude & Health",
                    "description" => "Pelling is at moderate altitude — stay hydrated and rest as needed."
                ],
                [
                    "highlight" => "Weather & Packing",
                    "description" => "Pack layers and warm clothing for mornings and evenings."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I reach Pelling from Bagdogra?",
                    "answer" => "Pelling is typically reached via a 5–7 hour scenic drive from Bagdogra/ Siliguri (NJP). We provide private transfers with driver stops for comfort and photo opportunities."
                ],
                [
                    "question" => "What are the best viewpoints in Pelling?",
                    "answer" => "Top viewpoints include the Pemayangtse viewpoint and dawn spots near the Khecheopalri area for Kanchenjunga panoramas."
                ],
                [
                    "question" => "Do I need permits for Pelling?",
                    "answer" => "Pelling itself does not need special permits, but some nearby protected areas may have entry rules; we will advise during booking."
                ],
                [
                    "question" => "Is Pelling suitable for families and seniors?",
                    "answer" => "Yes — moderate walks, comfortable lodges and short drives make Pelling family-friendly; inform us about mobility needs and we will adjust."
                ],
                [
                    "question" => "What should I pack for Pelling?",
                    "answer" => "Pack layered clothing, a light rain jacket, sunscreen, comfortable walking shoes and a warm layer for early mornings and evenings."
                ],
                [
                    "question" => "Can I customise a Pelling itinerary?",
                    "answer" => "Yes — itineraries are fully customisable to add cultural stops, longer hikes or higher-standard accommodation on request."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Pelling getaway — private transfers and guided viewpoint visits included."
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
