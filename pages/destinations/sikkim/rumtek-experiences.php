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

    // Output structured data (JSON-LD) for AEO: WebPage, FAQPage, TouristDestination and TouristTrip
    $ld_graph = [];
    $page_url = '';
    $request_path = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $request_path = strtok(($_SERVER['REQUEST_URI'] ?? ''), '?');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $request_path;
    }

    $canonical_url = (defined('BASE_URL') && !empty($request_path)) ? rtrim(BASE_URL, '/') . $request_path : $page_url;
    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);

    $destination_name = $data['headings']['heading1'] ?? $pageTitle;
    $destination_name_parts = preg_split('/\s+[—-]\s+/', (string) $destination_name);
    $destination_name = trim((string) ($destination_name_parts[0] ?? $destination_name));
    if ($destination_name === '') {
        $destination_name = $pageTitle;
    }

    $org_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#organization';
    $website_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#website';
    $page_id = ($canonical_url ?: $page_url) . '#webpage';
    $destination_id = ($canonical_url ?: $page_url) . '#destination';
    $faq_id = ($canonical_url ?: $page_url) . '#faq';

    $ld_graph[] = [
        "@type" => "Organization",
        "@id" => $org_id,
        "name" => "Turbo Hills",
        "url" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') : "https://turbohills.com")
    ];

    $ld_graph[] = [
        "@type" => "WebSite",
        "@id" => $website_id,
        "name" => "Turbo Hills",
        "url" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') : "https://turbohills.com"),
        "publisher" => ["@id" => $org_id]
    ];

    $ld_graph[] = [
        "@type" => "TouristDestination",
        "@id" => $destination_id,
        "name" => $destination_name,
        "description" => $metaDescription,
        "url" => ($canonical_url ?: $page_url),
        "image" => $first_image_url,
        "containedInPlace" => [
            "@type" => "Place",
            "name" => "Sikkim, India"
        ]
    ];

    $ld_graph[] = [
        "@type" => "BreadcrumbList",
        "@id" => ($canonical_url ?: $page_url) . '#breadcrumb',
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' : '/')
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "Sikkim",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/sikkim/sikkim-experiences.php' : '/pages/destinations/sikkim/sikkim-experiences.php')
            ],
            [
                "@type" => "ListItem",
                "position" => 3,
                "name" => $pageTitle,
                "item" => ($canonical_url ?: $page_url)
            ]
        ]
    ];

    $ld_graph[] = [
        "@type" => "WebPage",
        "@id" => $page_id,
        "name" => $pageTitle,
        "description" => $metaDescription,
        "url" => ($canonical_url ?: $page_url),
        "publisher" => ["@id" => $org_id],
        "about" => ["@id" => $destination_id],
        "isPartOf" => ["@id" => $website_id]
    ];

    if (!empty($data['faq']['items']) && is_array($data['faq']['items'])) {
        $faq_entities = [];
        foreach ($data['faq']['items'] as $fq) {
            if (!empty($fq['question']) && !empty($fq['answer'])) {
                $faq_entities[] = [
                    "@type" => "Question",
                    "name" => $fq['question'],
                    "acceptedAnswer" => ["@type" => "Answer", "text" => $fq['answer']]
                ];
            }
        }
        if (!empty($faq_entities)) {
            foreach ($ld_graph as $idx => $node) {
                if (!empty($node['@type']) && $node['@type'] === 'WebPage' && !empty($node['@id']) && $node['@id'] === $page_id) {
                    $ld_graph[$idx]['mainEntity'] = $faq_entities;
                    break;
                }
            }
            $ld_graph[] = ["@type" => "FAQPage", "@id" => $faq_id, "mainEntity" => $faq_entities];
        }
    }

    $ld_graph[] = ["@type" => "TouristTrip", "name" => $pageTitle, "description" => $metaDescription, "image" => $first_image_url];
    $ld = ["@context" => "https://schema.org", "@graph" => $ld_graph];

    echo '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';

    include BASE_PATH . '/includes/sections/breadcrumb-section.php';
    include BASE_PATH . '/includes/sections/enquiry-modal.php';
    include BASE_PATH . '/includes/sections/package-details-section.php';
    require_once BASE_PATH . '/includes/footer.php';

?>
