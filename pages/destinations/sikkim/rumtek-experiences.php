<?php

    // Variables
    $pageTitle = 'Rumtek Monastery — Cultural & Buddhist Heritage Near Gangtok';
    $metaDescription = 'Visit Rumtek Monastery for vibrant Tibetan Buddhist ceremonies, colourful murals and cultural immersion. Guided visits from Gangtok.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/rumtek.jpg';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Rumtek Monastery — Spiritual & Cultural Tours',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg',
                'assets/img/innerpages/breadcrumb-bg3.jpg'
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Rumtek Monastery — A Centre For Tibetan Buddhism",
            "subheading" => "Ceremonies, monasteries and Ladakhi-style architecture close to Gangtok", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Rumtek — What To Expect',
            "activity_body_content" => 'Rumtek Monastery is one of Sikkim’s most significant Buddhist monasteries offering cultural ceremonies and quiet reflection.',
            "assistant_snippet" => 'Visit Rumtek for vibrant Buddhist festivals, artwork and a peaceful monastery visit near Gangtok.',
            "location_slider_wrap" => 'Nearby Cultural Highlights',
            "highlights_tour" => 'Highlights — Rumtek',
            "Additional_Info" => 'Visiting & Conduct Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Rumtek visits are cultural in nature; respect local norms and follow guide instructions.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Cultural visits and guided monastery tours',
            "breakfast_and_dinner" => 'Meals as per itinerary or local stops',
            "transportation" => 'Short private transfer from Gangtok',
            "group_size" => 'Small groups encouraged for respectful visits',
            "language" => 'English & Hindi guides available',
            "guide" => 'Local guide recommended',
            "age_range" => 'All ages (respectful conduct required)',
            "season" => 'Year-round but monsoon can affect access',
            "category" => 'Culture • Heritage • Day Trip'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfer and guide",
                    "Entry guidance and cultural briefing",
                    "Short walking tour of the monastery complex"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Donations to monastery",
                    "Food and beverages unless specified",
                    "Transportation outside planned stops"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Monastery architecture and Buddhist ceremonies, including colourful thangkas and ritual schedules.",
                "In-depth cultural insights into the Karma Kagyu lineage and monastic life.",
                "Photographic opportunities of murals, prayer wheels and courtyard rituals.",
                "Short guided meditation sessions and interactions with resident monks (when permitted).",
                "Easy day trip from Gangtok combined with nearby viewpoints and local handicraft stalls."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Cultural Stops Near Rumtek',
            "image_and_names" => [
                ['name' => 'Rumtek Monastery', 'image' => '/assets/img/sikkim/rumtek.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/gangtok.jpg'],
                ['name' => 'Lumbini Park', 'image' => '/assets/img/sikkim/Buddhist-stupa.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Dress Code",
                    "description" => "Respectful clothing recommended inside monastery grounds."
                ],
                [
                    "highlight" => "Photography",
                    "description" => "Photography may be restricted during ceremonies; follow monk guidance."
                ],
                [
                    "highlight" => "Festivals",
                    "description" => "Festival dates vary; check local calendars for special events."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "Can tourists enter Rumtek Monastery?",
                    "answer" => "Yes — visitors are welcome during visiting hours; please follow temple decorum and any area-specific restrictions."
                ],
                [
                    "question" => "Are there festivals at Rumtek?",
                    "answer" => "Yes — Rumtek hosts several Tibetan Buddhist festivals; dates are set by the lunar calendar and can draw local pilgrims."
                ],
                [
                    "question" => "Is there a dress code for visitors?",
                    "answer" => "Modest clothing is recommended; shoulders and knees should be covered and shoes removed where requested."
                ],
                [
                    "question" => "Is photography allowed inside the monastery?",
                    "answer" => "Photography is allowed in many areas but may be restricted during ceremonies; always ask a guide or monk before taking photos."
                ],
                [
                    "question" => "How long does a typical visit take?",
                    "answer" => "A short guided visit usually takes 1–2 hours, longer if attending a service or exploring nearby markets."
                ],
                [
                    "question" => "Can Rumtek be combined with other Gangtok day trips?",
                    "answer" => "Yes — Rumtek pairs well with nearby cultural stops, viewpoints and short market visits in a single day."
                ],
                [
                    "question" => "Are donations required?",
                    "answer" => "Donations are voluntary and appreciated to support monastery upkeep; any contributions are at the visitor's discretion."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Home to the Karma Kagyu lineage seat — Rumtek offers living Buddhist traditions, rich murals and accessible day-trip cultural immersion from Gangtok."
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
