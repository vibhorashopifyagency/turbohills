<?php

    // Variables
    $pageTitle = 'North Sikkim Tours — Lachen, Lachung, Gurudongmar & More';
    $metaDescription = 'North Sikkim tours cover Lachen, Lachung, Gurudongmar Lake and high-altitude wonders. Multi-day itineraries with permit handling and expert guides.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/north-sikkim-hero.jpg' : '/assets/img/sikkim/north-sikkim-hero.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'North Sikkim Tours — Lachen, Lachung & High-Altitude Lakes',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg',
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/breadcrumb-bg3.jpg'
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "North Sikkim — Lachen, Lachung & Gurudongmar",
            "subheading" => "Multi-day itineraries, permit assistance and high-altitude experiences", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'North Sikkim — Highlights',
            "activity_body_content" => 'North Sikkim is a high-altitude region of extraordinary alpine landscapes, sacred lakes and remote Tibetan-influenced villages. Typical multi-day tours include staged travel through Lachen and Lachung, visits to Yumthang Valley (Valley of Flowers), Yume Samdong (Zero Point) and Gurudongmar Lake. These itineraries emphasise acclimatisation, permit formalities and reliable transport so guests can focus on scenery and cultural encounters. North Sikkim is best for travellers seeking wilderness beauty, photography and off-the-beaten-path experiences.',
            "assistant_snippet" => 'North Sikkim multi-day tours: Lachen, Lachung, Yumthang, Zero Point and Gurudongmar with permit handling and staged acclimatisation.',
            "location_slider_wrap" => 'Key Stops in North Sikkim',
            "highlights_tour" => 'Highlights — North Sikkim',
            "Additional_Info" => 'Permits, Acclimatisation & Logistics',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'North Sikkim tours require planning, acclimatisation and permit formalities; we handle logistics for a smooth trip.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Multi-day mountain itineraries',
            "breakfast_and_dinner" => 'Meals per itinerary',
            "transportation" => '4x4 or robust vehicles',
            "group_size" => 'Small groups for comfort and safety',
            "language" => 'English & Hindi guide support',
            "guide" => 'Experienced mountain guides',
            "age_range" => 'Suitable for fit travellers',
            "season" => 'Best: May–Oct; winter access limited',
            "category" => 'Multi-day • High-Altitude • Adventure'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Permit handling and clearances",
                    "Accommodation and transfers as listed",
                    "Local guide and vehicle"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Personal insurance",
                    "Flight/train to base",
                    "Medical evacuation insurance"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Lachen & Lachung valleys and Yumthang experiences.",
                "Gurudongmar Lake and high-altitude vistas.",
                "Cultural exchanges and remote village visits."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'North Sikkim — Sample Stops',
            "image_and_names" => [
                ['name' => 'Lachen', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg'],
                ['name' => 'Lachung', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Gurudongmar', 'image' => '/assets/img/sikkim/gurudongmar.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Acclimatisation",
                    "description" => "Multiple acclimatisation days recommended for high-altitude sections."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "We handle permits and clearances for restricted areas."
                ],
                [
                    "highlight" => "Safety",
                    "description" => "Medical checks and travel insurance advised for high-altitude tours."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How many days for a North Sikkim trip?",
                    "answer" => "A typical North Sikkim itinerary runs 5–8 days depending on destinations and permit windows; we recommend at least 6 days to include acclimatisation."
                ],
                [
                    "question" => "Do North Sikkim trips require acclimatisation?",
                    "answer" => "Yes — staged travel and acclimatisation days are essential to reduce altitude risk; our recommended itineraries include slow pacing and rest stops."
                ],
                [
                    "question" => "What permits are needed for North Sikkim?",
                    "answer" => "Inner-line permits and local clearances are required for many North Sikkim spots; we handle permit paperwork for guests."
                ],
                [
                    "question" => "What is the best season for North Sikkim?",
                    "answer" => "Late spring to early autumn (May–October) provides the most reliable access; winters are very cold and may close roads."
                ],
                [
                    "question" => "Are there health/safety considerations?",
                    "answer" => "High-altitude risks exist; travellers should inform us of medical history, consider travel insurance and follow guide recommendations."
                ],
                [
                    "question" => "Can North Sikkim tours be customised?",
                    "answer" => "Yes — we can tailor durations, add acclimatisation days, upgrade accommodation or focus on photography, culture or light trekking."
                ],
                [
                    "question" => "What kind of vehicle is used in North Sikkim?",
                    "answer" => "We use robust SUVs/4x4s with experienced mountain drivers to handle rough roads and steep gradients."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "North Sikkim • Sikkim"],
            "intro" => "Typical stops across North Sikkim include alpine valleys, mountain lakes, and high-altitude drive routes.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with dramatic Himalayan panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Monastery routes, local settlements, and mountain culture insights.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around North Sikkim", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Monastery Visits", "url" => "#culture-heritage"], ["label" => "Mountain Routes", "url" => "#short-scenic-drives"], ["label" => "North Sikkim", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drive-and-stop circuits to lakes, valleys, and snow points.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "North Sikkim", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Multi-day North Sikkim itineraries with permit handling and experienced guides."
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
