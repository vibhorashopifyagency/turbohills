<?php

    // Variables
    $pageTitle = 'Pelling Experiences — West Sikkim Tours from Bagdogra';
    $metaDescription = 'Book Pelling tour package from Bagdogra/NJP with Turbo Hills. Explore Kanchenjunga viewpoints, Pemayangtse Monastery, Sky Walk, Khecheopalri Lake and waterfalls with private transfer, local guide and customizable Sikkim itinerary.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/pelling-experiences/gangtok-pelling-tour-bannnr.jpg' : '/assets/img/pelling-experiences/gangtok-pelling-tour-bannnr.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Pelling Experiences — Himalayan Views & Monasteries',
            "slider_images" => [
                'assets/img/pelling-experiences/gangtok-pelling-tour-bannnr.jpg',
                'assets/img/pelling-experiences/gangtok-pelling-image.webp',
                'assets/img/pelling-experiences/gangtok-ravangla-pelling-6n-7d.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Pelling — Kanchenjunga Views & Heritage",
            "subheading" => "Panoramic Kanchenjunga viewpoints, monasteries and waterfalls", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Pelling Highlights — Kanchenjunga Panorama',
            "activity_body_content" => 'Pelling is one of the top choices for travelers searching peaceful West Sikkim tours with iconic Kanchenjunga views, monastery heritage and short scenic drives. The destination is ideal for 2–3 day itineraries that combine Pemayangtse Monastery, Pelling Sky Walk, Rabdentse ruins, Khecheopalri Lake and waterfall circuits. Our Pelling package from Bagdogra/NJP is designed for comfort-focused travelers: private transfer, verified stays, local guide support and balanced pacing for families, couples and senior guests. If you are comparing Pelling trip cost, best hotels in Pelling, or sightseeing options near Gangtok and West Sikkim, this itinerary gives practical coverage without overloading the day. It is especially suitable for photographers and culture travelers who want mountain panoramas with meaningful local context.',
            "assistant_snippet" => 'Pelling travel plan: Kanchenjunga sunrise viewpoints, Pemayangtse Monastery, Sky Walk and Khecheopalri Lake with private transfer and local guide support.',
            "location_slider_wrap" => 'Top Stops Around Pelling',
            "highlights_tour" => 'Highlights — Pelling & Surroundings',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Pelling itineraries include private transfers, comfortable stays and guided walks to viewpoints and heritage sites.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ mountain lodges and guesthouses',
            "breakfast_and_dinner" => 'Breakfast included; dinner available',
            "transportation" => 'Private car transfers and local vehicles',
            "group_size" => 'Private or small groups (2–12 travellers)',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Local guide with heritage knowledge',
            "age_range" => 'Family-friendly',
            "season" => 'Best: Mar–Jun & Sep–Dec',
            "category" => 'Nature • Culture • Views'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "All transfers in a private vehicle",
                    "Accommodation in Pelling (as per package)",
                    "Daily breakfast",
                    "Local guide for viewpoints and monasteries",
                    "Permit assistance where applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Transport to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Lunches and personal expenses",
                    "Optional activities"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Kanchenjunga viewpoints — Sunrise and panorama spots.",
                "Pemayangtse Monastery — Historic Buddhist monastery.",
                "Khecheopalri Lake (nearby) — Sacred lake and nature walks.",
                "Waterfalls and village walks for cultural immersion."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Pelling & Nearby',
            "image_and_names" => [
                ['name' => 'Pelling', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Pemayangtse', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Khecheopalri Lake', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Rabdentse Ruins', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Yuksom', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits & ID",
                    "description" => "Pelling town sightseeing is usually permit-light, but select nearby protected spots can have entry controls. Carry valid photo ID and itinerary details, a frequent search concern for first-time travellers planning monastery, ruins and lake circuits in West Sikkim."
                ],
                [
                    "highlight" => "Altitude & Health",
                    "description" => "Pelling sits at moderate hill altitude and is generally comfortable for couples, families and seniors. Stay hydrated, pace uphill stretches near viewpoints, and include relaxed breaks so Kanchenjunga sunrise visits remain enjoyable and low-fatigue."
                ],
                [
                    "highlight" => "Weather & Packing",
                    "description" => "Pelling weather can shift between sunny afternoons and cool, misty mornings. Pack layered clothing, rain protection, sturdy walking shoes and one warm outer layer, especially for sunrise viewpoint sessions and monastery-focused day plans."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How do I reach Pelling from Bagdogra?",
                    "answer" => "Pelling is typically reached via a 5–7 hour scenic drive from Bagdogra/ Siliguri (NJP). We provide private transfers with driver stops for comfort and photo opportunities."
                ],
                [
                    "question" => "What are the best viewpoints in Pelling?",
                    "answer" => "Top viewpoints include the Pemayangtse viewpoint and dawn spots near the Khecheopalri area for Kanchenjunga panoramas."
                ],
                [
                    "question" => "Do I need permits for Pelling?",
                    "answer" => "Pelling itself does not need special permits, but some nearby protected areas may have entry rules; we will advise during booking."
                ],
                [
                    "question" => "Is Pelling suitable for families and seniors?",
                    "answer" => "Yes — moderate walks, comfortable lodges and short drives make Pelling family-friendly; inform us about mobility needs and we will adjust."
                ],
                [
                    "question" => "What should I pack for Pelling?",
                    "answer" => "Pack layered clothing, a light rain jacket, sunscreen, comfortable walking shoes and a warm layer for early mornings and evenings."
                ],
                [
                    "question" => "Can I customise a Pelling itinerary?",
                    "answer" => "Yes — itineraries are fully customisable to add cultural stops, longer hikes or higher-standard accommodation on request."
                ]
            ]
        ],

        // Inspiration Details (template trial) — render only when present
        "inspiration_details" => [
            "quote" => [
                "text" => "The best views come after the simplest walks.",
                "name" => "TurboHills Team",
                "location" => "Pelling • West Sikkim"
            ],
            "intro" => "Typical stops around Pelling include Pemayangtse Monastery, Rabdentse Ruins and nearby waterfalls. You can also connect Pelling with Yuksom for heritage + nature trails.",
            "heading" => "Photo stops & short experiences",
            "sections" => [
                [
                    "id" => "kanchenjunga-viewpoints",
                    "title" => "1. Kanchenjunga Viewpoints",
                    "description" => "These sunrise points are designed for travellers searching best Kanchenjunga views from Pelling, clear-weather mountain photography and short-access panorama stops.",
                    "images" => [
                        ["src" => "/assets/img/pelling-experiences/E9IFodAVkAQdIwh.jpg", "alt" => "Viewpoint", "col" => 7],
                        ["src" => "/assets/img/pelling-experiences/723415851Gangtok_National_Park_Main.jpg", "alt" => "Mountains", "col" => 5]
                    ]
                ],
                [
                    "id" => "monasteries-heritage",
                    "title" => "2. Monasteries & Heritage",
                    "description" => "Quiet monastery visits, local history and guided heritage walks answer common AEO questions on what to do in Pelling beyond viewpoints and how to explore West Sikkim culture in one route.",
                    "image" => ["src" => "/assets/img/pelling-experiences/pelling-2.jpg", "alt" => "Monastery"],
                    "tags" => [
                        "title" => "Popular around Pelling",
                        "items" => [
                            ["label" => "Sunrise Views", "url" => "#kanchenjunga-viewpoints"],
                            ["label" => "Monastery Visits", "url" => "#monasteries-heritage"],
                            ["label" => "Heritage Walks", "url" => "#monasteries-heritage"],
                            ["label" => "Waterfalls", "url" => "/pages/destinations/sikkim/pelling-experiences.php"]
                        ]
                    ]
                ],
                [
                    "id" => "short-scenic-drives",
                    "title" => "3. Short Scenic Drives",
                    "description" => "Private local drives connect viewpoints, lakes and village photo stops, ideal for families and couples seeking low-walk itineraries with flexible pacing and weather-aware adjustments.",
                    "image" => ["src" => "/assets/img/pelling-experiences/pelling.webp", "alt" => "Scenic drive"]
                ]
            ],
            "page_tags" => [
                ["label" => "Pelling", "url" => "/pages/destinations/sikkim/pelling-experiences.php"],
                ["label" => "West Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Pelling getaway — private transfers and guided viewpoint visits included."
        ] 
    ];
    

    // Header and constants
    include __DIR__ . '/../../../includes/header_constants.php';

    // Output structured data (JSON-LD) for AEO: WebPage, FAQPage and TouristTrip
    $ld_graph = [];
    $page_url = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $request_path = strtok(($_SERVER['REQUEST_URI'] ?? ''), '?');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $request_path;
    }

    $canonical_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/sikkim/pelling-experiences.php' : $page_url);

    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);

    $org_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#organization';
    $website_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#website';
    $page_id = ($canonical_url ? $canonical_url : $page_url) . '#webpage';
    $destination_id = ($canonical_url ? $canonical_url : $page_url) . '#destination';
    $faq_id = ($canonical_url ? $canonical_url : $page_url) . '#faq';

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
        "name" => "Pelling",
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
                "name" => "Pelling Experiences",
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
            // Link FAQ content directly to the page entity (helps AI engines understand Q/A is on-page)
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

    // TouristTrip entry
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
