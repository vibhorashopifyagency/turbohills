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
                "Spectacular turquoise waters set against snow-clad peaks — prime photography and spiritual reflection.",
                "Remote high-altitude vistas with a strong pilgrimage tradition and local legends.",
                "Requires staged travel and careful acclimatisation; ideal for prepared travellers.",
                "Close encounters with unique high-altitude flora and migratory birdlife in season.",
                "Cultural context — local rituals and offerings that reflect Sikkimese reverence for the lake."
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
                    "answer" => "The visit is challenging due to altitude and remoteness; travellers should be fit, acclimatise properly and expect long driving days."
                ],
                [
                    "question" => "What permits are needed?",
                    "answer" => "Inner-line permits and local clearances are required; we handle paperwork and advise on documentation well before departure."
                ],
                [
                    "question" => "When is the best time to visit Gurudongmar?",
                    "answer" => "Late spring to early autumn (May–October) gives the most reliable access; winter months can be inaccessible due to snow."
                ],
                [
                    "question" => "Are there altitude-related risks?",
                    "answer" => "Yes — symptoms of altitude sickness are possible; we include acclimatisation and medical guidance in our itineraries."
                ],
                [
                    "question" => "Can Gurudongmar be visited in a day from Gangtok?",
                    "answer" => "No — a visit typically involves multi-day travel with staged overnight stops to reduce altitude strain."
                ],
                [
                    "question" => "What should I pack for Gurudongmar?",
                    "answer" => "Warm layers, sun protection, water, basic medicines and sturdy footwear; oxygen or specialised medication if recommended by a physician."
                ],
                [
                    "question" => "Is Gurudongmar suitable for photographers?",
                    "answer" => "Absolutely — the lake and surrounding peaks offer outstanding photographic frames, particularly in clear weather and at sunrise."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "One of the highest lakes in India — Gurudongmar blends sacred pilgrimage, surreal alpine colour and remote high-altitude adventure."
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
            foreach ($ld_graph as $idx => $node) {
                if (!empty($node['@type']) && $node['@type'] === 'WebPage' && !empty($node['@id']) && $node['@id'] === $page_id) {
                    $ld_graph[$idx]['mainEntity'] = $faq_entities;
                    break;
                }
            }

            $ld_graph[] = [
                "@type" => "FAQPage",
                "@id" => $faq_id,
                "mainEntity" => $faq_entities
            ];
        }
    }

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
