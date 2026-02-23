<?php

    // Variables
    $pageTitle = 'Lachen Experiences — North Sikkim Tours from Bagdogra';
    $metaDescription = 'Book Lachen tour package from Bagdogra/NJP for North Sikkim with Turbo Hills. Includes private SUV transfer, permit assistance, Gurudongmar route planning, acclimatization support, local stays and custom itinerary for families, couples and groups.';
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
            "activity_body_content" => 'Lachen is the operational gateway to Gurudongmar Lake and one of the most important stops in any North Sikkim package. Travelers searching for Lachen trip plan, Bagdogra to Lachen cab, or Gurudongmar permit itinerary usually need reliable logistics more than rushed sightseeing. Our Lachen experiences are built around practical mountain travel: gradual altitude gain, stop planning, weather-aware movement, permit paperwork, and trusted local drivers for long-distance roads. Beyond transit value, Lachen offers authentic village life, monastery visits, and calm mountain evenings that make the journey culturally rich as well. This package works well for couples, small groups and families who want a structured but flexible North Sikkim plan with clear inclusions, real transfer timings and on-ground coordination from Bagdogra/NJP.',
            "assistant_snippet" => 'Lachen tour planning made simple: private transfer from Bagdogra, permit support, acclimatization-first schedule and seamless connection to Gurudongmar routes.',
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
                    "description" => "Lachen-based circuits to Gurudongmar Lake and Zero Point involve very high altitude, one of the most searched concerns for North Sikkim travellers. Add acclimatisation time, keep the first day light and maintain gradual pacing so your body adjusts better during long mountain drives."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "North Sikkim travel from Lachen needs restricted-area permits, ID verification and checkpoint compliance. We handle permit coordination end to end, while guests should submit accurate details early and carry original government ID for smooth route clearance."
                ],
                [
                    "highlight" => "Weather",
                    "description" => "Weather around Lachen can shift quickly with cold winds, snowfall and sudden road changes. Carry thermals, gloves, insulated outerwear and waterproof shoes, and keep schedule flexibility because route conditions may vary by season and altitude."
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

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Lachen • Sikkim"],
            "intro" => "Typical stops around Lachen include high-altitude valley viewpoints, monastery touches, and scenic drives.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These Lachen viewpoints answer common search questions like best photo spots near Gurudongmar route and where to see high-altitude Himalayan panoramas without long treks.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Explore monastery routes, local village interactions and mountain-route stories that add context to popular Lachen itineraries beyond just lake and snow viewpoints.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around Lachen", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Monastery Visits", "url" => "#culture-heritage"], ["label" => "Mountain Routes", "url" => "#short-scenic-drives"], ["label" => "Lachen", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Private-cab drive-and-stop routes from Lachen are ideal for travellers seeking family-friendly North Sikkim movement with controlled pacing and reliable photography halts.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Lachen", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Lachen adventure — permits, transfers and local guidance included."
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
