<?php

    // Variables
    $pageTitle = 'Tsomgo (Changu) Lake — High-Altitude Glacial Lake Near Gangtok';
    $metaDescription = 'Book Tsomgo (Changu) Lake day trip from Gangtok with Turbo Hills. Includes permit assistance, private cab transfer, optional yak ride, Baba Mandir stop and practical high-altitude guidance for families, couples and groups.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/tsomgo-lake.jpg' : '/assets/img/sikkim/tsomgo-lake.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Tsomgo Lake — Changu Experience & Yak Rides',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Tsomgo (Changu) Lake — Sacred High-Altitude Lake",
            "subheading" => "Glacial shores, yak rides and serene mountain reflections", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Tsomgo Lake Highlights',
            "activity_body_content" => 'Tsomgo (Changu) Lake is one of the most popular high-altitude day trips from Gangtok, known for glacial water reflections, mountain viewpoints and seasonal snow surroundings. Travelers often pair this route with Baba Mandir and, when allowed, Nathula-side sectors depending on permit and weather conditions. Our Tsomgo day plan addresses the most searched questions directly: permit requirements, travel duration, best season, clothing checklist and altitude comfort tips. We provide private transfer, route timing support, optional stop planning and practical guidance for kids, seniors and first-time mountain travelers. If you are searching for Tsomgo Lake trip cost, Changu Lake permit process, or one-day Gangtok sightseeing extension, this itinerary provides clear and realistic coverage.',
            "assistant_snippet" => 'Tsomgo Lake from Gangtok in one day: permit-ready private cab, optional yak ride, Baba Mandir stop, and high-altitude travel tips for smooth sightseeing.',
            "location_slider_wrap" => 'Nearby Attractions',
            "highlights_tour" => 'Highlights — Tsomgo Lake',
            "Additional_Info" => 'Permit & Travel Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Tsomgo visits typically include short walks and optional yak rides; permits for foreigners may be required.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Short day trip with basic facilities',
            "breakfast_and_dinner" => 'Meals not typically included for short visits',
            "transportation" => 'Private transfer from Gangtok',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi guides available',
            "guide" => 'Local guide and driver assistance',
            "age_range" => 'Family friendly, accessible for most ages',
            "season" => 'Best: Mar–Jun & Sep–Nov; winter cold',
            "category" => 'Day Trip • Scenic • Culture'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfers from Gangtok",
                    "Local permits and guide assistance",
                    "Optional yak-ride charges as applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Any personal expenses",
                    "Meals unless specified",
                    "Entrance fees where applicable"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Tsomgo Lake's glacial waters and yak rides.",
                "Short day trips from Gangtok with scenic stops.",
                "Photography-friendly viewpoints near the shoreline."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Nearby — Tsomgo Lake & Surroundings',
            "image_and_names" => [
                ['name' => 'Tsomgo Lake', 'image' => '/assets/img/sikkim/tsomgo-lake.jpg'],
                ['name' => 'Nathula Pass', 'image' => '/assets/img/sikkim/nathula.jpg'],
                ['name' => 'Baba Mandir', 'image' => '/assets/img/sikkim/baba-mandir.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/gangtok.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits",
                    "description" => "Tsomgo Lake day trips often operate in permit-controlled zones, especially when combined with Nathula, which is among the most searched route combinations from Gangtok. Foreign nationals and select visitor categories may need extra documentation, so advance ID sharing helps avoid permit delays."
                ],
                [
                    "highlight" => "Altitude",
                    "description" => "Tsomgo sits at high elevation where temperatures and oxygen comfort can differ sharply from Gangtok. Travellers sensitive to altitude should keep the day lightly paced, stay hydrated and avoid overexertion, especially during short lakeside halts and windy periods."
                ],
                [
                    "highlight" => "Facilities",
                    "description" => "Facilities near Tsomgo are basic and can vary by season and crowd levels. Carry water, personal medicine, warm layers, cash and light snacks so your visit remains comfortable during traffic build-up, weather shifts and longer return drives to Gangtok."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "Do I need a permit to visit Tsomgo?",
                    "answer" => "Some visitors, especially foreign nationals, may need permits for areas near Tsomgo; we assist with permit arrangements where required."
                ],
                [
                    "question" => "Are yak rides safe?",
                    "answer" => "Yak rides are optional; choose reputable operators, follow guides' instructions and avoid rides if you have mobility concerns."
                ],
                [
                    "question" => "How long is a typical Tsomgo visit?",
                    "answer" => "Most visits are half-day to full-day trips from Gangtok including travel time; plan for a 4–6 hour outing."
                ],
                [
                    "question" => "What should I carry for Tsomgo Lake?",
                    "answer" => "Carry warm clothing, water, sunscreen and basic snacks. Facilities are limited near the lake."
                ],
                [
                    "question" => "Is Tsomgo suitable for families?",
                    "answer" => "Yes — short walks and guided visits make Tsomgo appropriate for families, though altitude sensitivity should be considered for young children and seniors."
                ],
                [
                    "question" => "Can Tsomgo be combined with other Gangtok day trips?",
                    "answer" => "Yes — combine Tsomgo with visits to Baba Mandir, Nathula (permit required) or nearby viewpoints for a full day itinerary."
                ],
                [
                    "question" => "Are there altitude concerns at Tsomgo?",
                    "answer" => "Tsomgo sits at high elevation; those with breathing or heart conditions should consult a physician before travel."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Tsomgo • Sikkim"],
            "intro" => "Typical stops around Tsomgo include alpine lake viewpoints, mountain passes, and short snow-season drives.",
            "heading" => "Photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These easy-access viewpoints support top queries like best Tsomgo Lake photo spots, snow-season views and high-altitude panoramas on short day trips from Gangtok.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Monastery influences and mountain-route culture stops add depth for travellers asking what to do near Tsomgo beyond the lake viewpoint itself.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around Tsomgo", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Lake Stops", "url" => "#culture-heritage"], ["label" => "Mountain Routes", "url" => "#short-scenic-drives"], ["label" => "Tsomgo", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable private-cab drive-and-stop plans are ideal for families and couples seeking low-walk alpine experiences with weather-aware return timing.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Tsomgo", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Short, scenic lake visit suitable for photography and cultural interest."
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
