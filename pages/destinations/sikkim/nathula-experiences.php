<?php

    // Variables
    $pageTitle = 'Nathula Pass Day Trip — Indo-China Border & Mountain Views';
    $metaDescription = 'Visit Nathula Pass for high-altitude views, historic border routes and cultural insights. Permit required; day-trips from Gangtok available.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/nathula.jpg' : '/assets/img/sikkim/nathula.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Nathula Pass — Himalayan Border Route',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/breadcrumb-bg3.jpg'
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Nathula Pass — Border Roads & High Mountain Landscapes",
            "subheading" => "A permit-based visit to a historic mountain pass on the Indo-China border", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Nathula Pass — What to Expect',
            "activity_body_content" => 'Nathula Pass lies on the historic Indo-China border and is visited for its striking mountain vistas, historic roads and frontier character. Access to Nathula is heavily regulated and requires permits, often arranged through tour operators; visiting windows and timings can change based on security and diplomatic considerations. We plan Nathula as a guided day trip from Gangtok with permit handling, ID checks and clear timing instructions to ensure a smooth visit.',
            "assistant_snippet" => 'Nathula Pass day trips with permit handling — guided visits from Gangtok with strict permit procedures.',
            "location_slider_wrap" => 'Nearby Highlights',
            "highlights_tour" => 'Highlights — Nathula Pass',
            "Additional_Info" => 'Permits & Travel Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Nathula visits require permits; plan ahead and travel with experienced operators.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Guided day trip with permit assistance',
            "breakfast_and_dinner" => 'Meals as specified',
            "transportation" => 'Private transfer from Gangtok',
            "group_size" => 'Small guided groups',
            "language" => 'English and Hindi guides',
            "guide" => 'Required guide and permit handler',
            "age_range" => 'Best for travellers comfortable at altitude',
            "season" => 'Best: Apr–Jun & Sep–Nov; closed in winter',
            "category" => 'Day Trip • Culture • History'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfers and permit arrangement",
                    "Local guide and fees as per permit",
                    "Short itinerary covering key viewpoints"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Personal expenses",
                    "Passport fees for permit where required",
                    "Meals not listed"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Historic border road and vista points.",
                "Permit-based day trips from Gangtok.",
                "Cultural insights at nearby shrines and checkpoints."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Nearby — Nathula & Surroundings',
            "image_and_names" => [
                ['name' => 'Nathula', 'image' => '/assets/img/sikkim/nathula.jpg'],
                ['name' => 'Tsomgo Lake', 'image' => '/assets/img/sikkim/tsomgo-lake.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/gangtok.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits",
                    "description" => "Nathula requires official permits; foreign nationals must allow extra processing time."
                ],
                [
                    "highlight" => "Altitude",
                    "description" => "High altitude; brief acclimatisation recommended."
                ],
                [
                    "highlight" => "Timing",
                    "description" => "Permit windows and local closures can affect trip timing."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I get a Nathula permit?",
                    "answer" => "Nathula permits are arranged through authorised channels; we handle the paperwork once ID and passport details are provided. Allow time for processing."
                ],
                [
                    "question" => "Is Nathula open year-round?",
                    "answer" => "No — Nathula access is seasonal and subject to security and weather conditions. Winter closures are common."
                ],
                [
                    "question" => "What ID is required for Nathula?",
                    "answer" => "Carry original ID such as passport for foreigners and Aadhaar/Passport for Indian nationals; copies are insufficient for permit checks."
                ],
                [
                    "question" => "Can foreigners visit Nathula?",
                    "answer" => "Yes, but foreign nationals need additional clearances which may take extra time; plan ahead and book permits early."
                ],
                [
                    "question" => "How long is a Nathula visit?",
                    "answer" => "Nathula is normally a half-day to full-day trip from Gangtok including travel and permit formalities."
                ],
                [
                    "question" => "Are there health concerns at Nathula?",
                    "answer" => "Nathula is high-altitude; guests with heart or breathing conditions should consult a physician before travel."
                ],
                [
                    "question" => "Can Nathula be combined with Tsomgo Lake?",
                    "answer" => "Yes — Nathula is often combined with Tsomgo Lake as a day trip from Gangtok, subject to permit windows."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Nathula • Sikkim"],
            "intro" => "Typical stops around Nathula include high-pass viewpoints, border route drives, and mountain photo halts.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with pass and mountain panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Local route history, monastery influences, and cultural touchpoints.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around Nathula", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Pass Routes", "url" => "#culture-heritage"], ["label" => "Mountain Drives", "url" => "#short-scenic-drives"], ["label" => "Nathula", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drive-and-stop circuits for high-road viewpoints.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Nathula", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Permit-assisted day trips from Gangtok with cultural insights."
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
