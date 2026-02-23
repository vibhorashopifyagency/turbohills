<?php

    // Variables
    $pageTitle = 'Yuksom Experiences — West Sikkim Trek & Culture';
    $metaDescription = 'Book Yuksom tour and trekking gateway package from Bagdogra/NJP with Turbo Hills. Ideal for Dzongri and Goechala trail starters, monastery heritage walks, village stays, local guides, permit advice and custom West Sikkim itineraries.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sikkim/lachung.jpg' : '/assets/img/sikkim/lachung.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Yuksom Experiences — Trekking & Heritage',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Yuksom — Gateway to Dzongri & Trekking Trails",
            "subheading" => "Historic gateway town, trekking starts and alpine scenery", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Yuksom Highlights — Trek Starts & Heritage',
            "activity_body_content" => 'Yuksom is the classic trekking gateway in West Sikkim and a high-intent search destination for travelers planning Dzongri and Goechala route access. Beyond trekking logistics, Yuksom offers rich monastery heritage, local village culture and peaceful mountain stays that suit both active trekkers and slow-travel visitors. Our Yuksom package focuses on what travelers need most: transfer planning from Bagdogra/NJP, trek-readiness guidance, route permit support, local guide coordination and realistic acclimatization flow. If you are searching for Yuksom trek base details, best time for Dzongri route, or non-trek experiences in West Sikkim, this itinerary gives clear options for both categories. We combine practical logistics with cultural depth so travelers can start adventure routes confidently or enjoy heritage-based stays without rushing.',
            "assistant_snippet" => 'Yuksom travel plan: ideal base for Dzongri/Goechala starts with transfer support, permit guidance, local stays and optional culture-focused non-trek experiences.',
            "location_slider_wrap" => 'Top Stops Around Yuksom',
            "highlights_tour" => 'Highlights — Yuksom & Trekking Routes',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Yuksom itineraries include transfers, local guides and options to join short treks or cultural excursions.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Guesthouses and eco-lodges',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Private transfers and local vehicles',
            "group_size" => 'Private or small trekking groups',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Experienced trekking guides available',
            "age_range" => 'Trekking depends on difficulty; suitable for fit travellers',
            "season" => 'Best: Mar–May & Sep–Nov for trekking',
            "category" => 'Trekking • Culture • Nature'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfer from Bagdogra/NJP",
                    "Local guiding for treks (if selected)",
                    "Accommodation as per itinerary",
                    "Meals as listed",
                    "Permit assistance where required"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Trekking permits if applicable",
                    "Personal trekking gear",
                    "Insurance and personal expenses"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Trek starts to Dzongri and Goecha La.",
                "Historic Yuksom monastery sites and local culture.",
                "Scenic village walks and homestay experiences."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Yuksom & Trek Routes',
            "image_and_names" => [
                ['name' => 'Yuksom', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Dzongri', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Goecha La', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Khecheopalri', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Pelling', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Trek Difficulty",
                    "description" => "Yuksom is the gateway to beginner and advanced Himalayan trails, so route choice should match fitness and trek experience. This addresses frequent searches like which Yuksom trek is best for beginners and how difficult Dzongri or Goecha La routes are."
                ],
                [
                    "highlight" => "Permits",
                    "description" => "Many routes from Yuksom require forest or protected-area permits and timely document checks. We assist with compliance and local logistics so departures are not delayed at checkpoints and your itinerary stays smooth and regulation-ready."
                ],
                [
                    "highlight" => "Packing",
                    "description" => "Pack trekking boots, layered thermals, rain protection, quick-dry clothing, sun gear and a daypack with water plus essentials. West Sikkim weather shifts quickly, so proper layering is critical for safe movement and comfort on trail and village routes."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I get to Yuksom?",
                    "answer" => "Yuksom is reached by road from Bagdogra/ NJP via Pelling; we offer private transfers and can recommend overnight stops."
                ],
                [
                    "question" => "When is the best time for trekking from Yuksom?",
                    "answer" => "Spring (Mar–May) and autumn (Sep–Nov) are the best windows for clear weather and trekking; monsoon months can make trails slippery."
                ],
                [
                    "question" => "Do trekking routes from Yuksom need permits?",
                    "answer" => "Some higher trails require permits; we advise specific route requirements at booking and assist with permit arrangements."
                ],
                [
                    "question" => "Is Yuksom suitable for non-trekkers?",
                    "answer" => "Yes — Yuksom offers cultural walks, homestay experiences and short nature trails for non-trekkers who want a relaxed mountain stay."
                ],
                [
                    "question" => "What should I pack for treks starting at Yuksom?",
                    "answer" => "Pack trekking boots, layered clothing, rain protection, sun protection, and any required personal trekking gear; consider hiring local porters if needed."
                ],
                [
                    "question" => "Can I combine Yuksom with Pelling or other regions?",
                    "answer" => "Yes — Yuksom combines well with Pelling, Pelling-based drives, and longer itineraries across West Sikkim. We can customise multi-region plans."
                ],
                [
                    "question" => "Are there medical/altitude concerns?",
                    "answer" => "Most treks from Yuksom start at moderate elevation but higher routes need acclimatisation; consult us if you have medical concerns."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Yuksom • Sikkim"],
            "intro" => "Typical stops around Yuksom include heritage monasteries, forest trails, and calm village experiences.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These viewpoints work well for travellers searching easy photo points near Yuksom and mountain panoramas without committing to long high-altitude treks.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Historic monasteries, village stories and local interactions answer popular AEO queries on Yuksom heritage, spiritual history and community-led mountain experiences.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around Yuksom", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Monastery Visits", "url" => "#culture-heritage"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Yuksom", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable short drives connect forests, village edges and viewpoints, suitable for non-trekkers who still want meaningful West Sikkim landscape coverage.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Yuksom", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Plan your Yuksom trek — transfers, guides and lodging available."
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
