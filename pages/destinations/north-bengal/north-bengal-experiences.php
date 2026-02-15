<?php

    // Variables
    $pageTitle = 'North Bengal Experiences — Tea Gardens, Wildlife & Gentle Adventure';
    $metaDescription = 'Find peaceful mornings in tea gardens, soft adventure in Dooars wildlife safaris and mindful hill-stays in North Bengal — stress-free private transfers, local hosts and curated experiences.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/darjeeling-sunset.jpg' : '/assets/img/north-bengal/darjeeling-sunset.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'North Bengal Experiences — Tea Gardens, Hills & Wildlife',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg',
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "North Bengal — Tea Gardens, Forests & Gentle Adventure",
            "subheading" => "Slow mornings in tea gardens, wildlife safaris and river valleys for a stress-free escape", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'North Bengal Highlights — Tea, Trails & Wildlife',
            "activity_body_content" => 'North Bengal blends peaceful tea gardens, mist-kissed hills and wild river valleys into a gentle, restorative journey. Walk among emerald tea terraces at dawn, listen to the river at sunset, and choose soft adventure — jeep safaris in Jaldapara, river-rafting on the Teesta or easy treks above Darjeeling. Our itineraries prioritise slow travel: private transfers from Bagdogra, warm local homestays and flexible pacing so you can unwind while exploring. Ideal for travellers seeking calm, connection and a hint of adventure.',
            "assistant_snippet" => 'North Bengal: tea-garden mornings, Dooars wildlife safaris, river valleys and relaxed hill stays; private transfers and local hosts included.',
            "location_slider_wrap" => 'Top Stops Around North Bengal',
            "highlights_tour" => 'Highlights — North Bengal Experiences',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'North Bengal experiences emphasise relaxed stays, private transfers, local guides and small-group wildlife and tea-garden activities.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ hill hotels, tea bungalows and cosy homestays',
            "breakfast_and_dinner" => 'Daily breakfast included; local dinners available at homestays',
            "transportation" => 'Private car transfers and comfortable local drivers',
            "group_size" => 'Private or small groups (2–8 travellers)',
            "language" => 'English, Hindi & regional guides',
            "guide" => 'Local naturalist and cultural guides for safaris and village walks',
            "age_range" => 'Family-friendly and suitable for seniors',
            "season" => 'Best Oct–Dec & Mar–May; monsoon ideal for lush tea gardens',
            "category" => 'Relaxation • Wildlife • Light Adventure'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "Comfortable car transfers and local driving support",
                    "Accommodation (tea bungalows, homestays or hotels as per package)",
                    "Daily breakfast",
                    "Local guide for safaris, tea-walks and cultural visits",
                    "Park entry and jeep safari charges where specified"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Meals not listed and personal expenses",
                    "Optional activities not in itinerary"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Tea-garden walks and early-morning tea tasting sessions.",
                "Sunrise at Tiger Hill and panoramic views over the Kanchenjunga range.",
                "Jeep safaris in Jaldapara and Dooars for one-horned rhino sightings.",
                "River valleys and gentle rafting options on the Teesta for adventurous days."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — North Bengal & Nearby',
            "image_and_names" => [
                ['name' => 'Darjeeling', 'image' => '/assets/img/north-bengal/darjeeling-tiger-hill.jpg'],
                ['name' => 'Kalimpong', 'image' => '/assets/img/north-bengal/kalimpong-view.jpg'],
                ['name' => 'Mirik', 'image' => '/assets/img/north-bengal/mirik-lake.jpg'],
                ['name' => 'Jaldapara', 'image' => '/assets/img/north-bengal/jaldapara-rhino.jpg'],
                ['name' => 'Dooars', 'image' => '/assets/img/north-bengal/dooars-forest.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits & ID",
                    "description" => "Most North Bengal sites do not require special permits; carry a photo ID for park entries and check specific safari rules."
                ],
                [
                    "highlight" => "Health & Pace",
                    "description" => "North Bengal is low to mid-altitude; travel at a relaxed pace, stay hydrated and allow time for gentle walks."
                ],
                [
                    "highlight" => "Weather & Packing",
                    "description" => "Bring layers, a light rain jacket for monsoon months and sturdy walking shoes for tea-paths and forest trails."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How far is Darjeeling from Bagdogra?",
                    "answer" => "Darjeeling is roughly a 3–4 hour drive from Bagdogra Airport depending on traffic; we arrange private transfers with experienced local drivers."
                ],
                [
                    "question" => "Do I need permits for Dooars or Jaldapara safaris?",
                    "answer" => "Park entries and jeep safaris require tickets and ID; we arrange permits and safari bookings in advance for a stress-free visit."
                ],
                [
                    "question" => "What is the best time to visit North Bengal?",
                    "answer" => "Best months are October–December and March–May for clear skies and pleasant temperatures; monsoon months make the tea gardens lush and green."
                ],
                [
                    "question" => "Is North Bengal suitable for families and seniors?",
                    "answer" => "Yes — options range from relaxed tea-bungalow stays to gentle safaris and short walks, making it suitable for families and older travellers."
                ],
                [
                    "question" => "Can I do wildlife safaris and short river activities from Darjeeling?",
                    "answer" => "Yes — Jeep safaris in Jaldapara/Dooars and river activities on the Teesta are popular; itineraries can combine hill and lowland experiences."
                ],
                [
                    "question" => "What should I pack for North Bengal?",
                    "answer" => "Bring layers for hill mornings, a light rain jacket, sturdy shoes for walks and a small daypack; include medication and sunscreen."
                ],
                [
                    "question" => "How long should I stay to experience North Bengal?",
                    "answer" => "A 3–5 day stay is ideal to enjoy Darjeeling, a tea-garden walk and a Dooars wildlife safari without rushing."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your North Bengal experience — tea-garden mornings, wildlife safaris and peaceful homestays with private transfers."
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
