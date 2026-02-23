<?php

    // Variables
    $pageTitle = 'Zuluk Experiences — East Sikkim Offbeat Drives';
    $metaDescription = 'Book Zuluk Old Silk Route package from Gangtok/Bagdogra with Turbo Hills. Experience famous zig-zag roads, sunrise viewpoints, offbeat East Sikkim villages, private SUV transfer and customizable road-trip itinerary with local guidance.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/zuluk.jpg' : '/assets/img/sikkim/zuluk.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Zuluk Experiences — Old Silk Route & Scenic Drives',
            "slider_images" => [
                'assets/img/sikkim/zuluk.jpg',
                'assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Zuluk — Old Silk Route & Sunrise Viewpoints",
            "subheading" => "High-mountain roads, dramatic viewpoints and offbeat exploration", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Zuluk Highlights — Scenic Mountain Drives',
            "activity_body_content" => 'Zuluk is one of the most searched offbeat East Sikkim road-trip destinations, famous for dramatic hairpin bends, sunrise ridgelines and the historic Old Silk Route atmosphere. This route is ideal for travelers who prefer scenic drives, photography stops and remote Himalayan village exposure instead of mainstream city sightseeing. Our Zuluk package is built around practical mountain movement: robust SUV transfer, experienced local driver, weather-sensitive departure windows, and route combinations with nearby East Sikkim points for better value. Travelers commonly ask about best time to visit Zuluk, road safety, stay options and sunrise points — this itinerary addresses each with answer-first planning. Whether you book from Gangtok or Bagdogra, we keep the schedule realistic and comfortable so the journey remains visually rich and low-stress.',
            "assistant_snippet" => 'Zuluk Old Silk Route itinerary: private SUV, sunrise viewpoint planning, weather-aware routing and offbeat East Sikkim village stops from Gangtok/Bagdogra.',
            "location_slider_wrap" => 'Top Stops Around Zuluk',
            "highlights_tour" => 'Highlights — Zuluk & Silk Route',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Zuluk trips involve long scenic drives; private transfers, experienced drivers and flexible stopovers are recommended.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain stays and homestays',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Robust private vehicle/SUV recommended',
            "group_size" => 'Small groups or private charters',
            "language" => 'English, Hindi & local drivers',
            "guide" => 'Local driver-guides with route experience',
            "age_range" => 'Suitable for adventurous travellers',
            "season" => 'Best: Apr–Jun & Sep–Nov; winter roads may close',
            "category" => 'Road Trip • Offbeat • Photography'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfers and experienced driver",
                    "Accommodation as per itinerary",
                    "Meals as listed",
                    "Local guide where required"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal insurance",
                    "Fuel surcharges for long drives"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Zuluk sunrise viewpoints and serpentine roads.",
                "Historic Old Silk Route and offbeat mountain vistas.",
                "Photographic stops and remote village visits."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Zuluk & Silk Route',
            "image_and_names" => [
                ['name' => 'Zuluk', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Old Silk Route', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Jorepokhri', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Rangpo', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Road Conditions",
                    "description" => "Zuluk routes on the Old Silk Route include steep loops and high-altitude bends, making road condition updates a top planning query. Access can shift by season and weather, so itineraries should include buffer time for safer, less rushed movement."
                ],
                [
                    "highlight" => "Vehicle",
                    "description" => "A strong SUV with an experienced mountain driver is strongly recommended for Zuluk switchbacks and uneven surfaces. Private vehicle planning improves comfort, adds flexible photo halts and supports safer handling on narrow mountain stretches."
                ],
                [
                    "highlight" => "Weather",
                    "description" => "Early mornings in Zuluk can be windy and very cold even outside peak winter season. Carry layered warm clothing, windproof outerwear, gloves, cap and sun protection so sunrise viewpoint sessions and long drives stay comfortable."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "Is Zuluk suitable for day trips?",
                    "answer" => "Due to travel times and remote roads, Zuluk is best experienced as part of a multi-day trip rather than a single day excursion."
                ],
                [
                    "question" => "When is best to visit Zuluk?",
                    "answer" => "Spring and autumn provide the most reliable road conditions and clearest vistas; winter can be very cold and some roads may be impassable."
                ],
                [
                    "question" => "What kind of vehicle is recommended for Zuluk?",
                    "answer" => "A robust SUV with an experienced local driver is recommended to handle steep switchbacks and variable road surfaces."
                ],
                [
                    "question" => "Are there accommodation options in Zuluk?",
                    "answer" => "Accommodation is basic in the area; many travellers prefer comfortable stays in nearby hubs and day excursions into Zuluk."
                ],
                [
                    "question" => "What should I pack for Zuluk?",
                    "answer" => "Warm layers, sun protection, a windproof jacket and sturdy shoes are recommended; mornings can be very chilly."
                ],
                [
                    "question" => "Can Zuluk be combined with Gangtok or other Sikkim regions?",
                    "answer" => "Yes — Zuluk is commonly combined with eastern Sikkim routes including Gangtok, Nathula and other nearby stops. We can design combined itineraries."
                ],
                [
                    "question" => "Is Zuluk safe for senior travellers?",
                    "answer" => "With private transfers, slower pacing and awareness of road conditions, senior travellers can visit—discuss any health concerns with us first."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Zuluk • Sikkim"],
            "intro" => "Typical stops around Zuluk include zig-zag road viewpoints, old silk-route landscapes, and short mountain drives.",
            "heading" => "Photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These viewpoint halts match top search intent such as best Zuluk zig-zag road views, Thambi-like sunrise frames and dramatic Old Silk Route panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Old trade-route stories and mountain community life answer AEO-style questions about Zuluk history, Silk Route relevance and local cultural context.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around Zuluk", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Route Heritage", "url" => "#culture-heritage"], ["label" => "Mountain Routes", "url" => "#short-scenic-drives"], ["label" => "Zuluk", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Drive-and-stop planning along dramatic bends keeps Zuluk suitable for couples and families seeking scenic but manageable East Sikkim road experiences.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Zuluk", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Drive the Old Silk Route — private transfers and experienced drivers available."
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
