<?php

    // Variables
    $pageTitle = 'South Sikkim Tours — Namchi, Ravangla & Tea Gardens';
    $metaDescription = 'South Sikkim tours cover Namchi, Ravangla and Temi Tea Garden — cultural trails, panoramic viewpoints and easy treks. Day trips and short itineraries available.';
    // OpenGraph / Social
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/south-sikkim-hero.jpg';

    $data = [
        "slider_details" => [
            "slider_heading" => 'South Sikkim — Cultural Trails & Tea Gardens',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/breadcrumb-bg3.jpg'
            ]
        ],
        "headings" => [
            "heading1" => "South Sikkim — Namchi, Ravangla & Temi",
            "subheading" => "Easy-access cultural routes, viewpoints and tea-garden walks"
        ],
        "tour_headings" => [
            "activity_content_heading" => 'South Sikkim Highlights',
            "activity_body_content" => 'South Sikkim offers gentle walks, panoramic viewpoints and cultural experiences — ideal for relaxing short trips.',
            "assistant_snippet" => 'Explore Namchi, Ravangla and Temi Tea Garden on short South Sikkim tours with local guides.',
            "location_slider_wrap" => 'Top Stops — South Sikkim',
            "highlights_tour" => 'Highlights — South Sikkim',
            "Additional_Info" => 'Travel Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'South Sikkim is lower altitude and accessible year-round; ideal for cultural short-breaks.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Comfortable stays and cultural visits',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Private transfers or shared vehicles',
            "group_size" => 'Small groups or private departures',
            "language" => 'English & Hindi guides available',
            "guide" => 'Local guides for cultural walks',
            "age_range" => 'Family friendly',
            "season" => 'Year-round; monsoon can be wet',
            "category" => 'Culture • Tea Gardens • Short Trips'
        ],
        "features" => [
            "included" => [
                "title" => "Included",
                "items" => [
                    "Transfers and local guide",
                    "Accommodation as listed",
                    "Entrance fees where specified"
                ]
            ],
            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Travel to starting point",
                    "Personal expenses"
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                "Scenic viewpoints at Ravangla with panoramic Himalayan outlooks.",
                "Temi Tea Garden walks, tea tastings and plantation-fed vista trails.",
                "Cultural visits in Namchi, including the famous Char Dham and local markets.",
                "Short, family-friendly treks and birdwatching opportunities in lower altitudes.",
                "Community-based homestays and local cuisine sampling for an authentic experience."
            ]
        ],
        "location_slider" => [
            "heading" => 'South Sikkim Stops',
            "image_and_names" => [
                ['name' => 'Namchi', 'image' => '/assets/img/sikkim/namchi.jpg'],
                ['name' => 'Ravangla', 'image' => '/assets/img/sikkim/ravangla.jpg'],
                ['name' => 'Temi Tea Garden', 'image' => '/assets/img/sikkim/temi-tea-garden.jpg']
            ]
        ],
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                ["highlight" => "Weather", "description" => "Lower altitude; pleasant most of the year."],
                ["highlight" => "Transport", "description" => "Well-connected by road from Gangtok and Siliguri."]
            ]
        ],
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                ["question" => "Is South Sikkim suitable for families?","answer" => "Yes — gentle walks, lower altitudes and shorter drives make it ideal for families and older travellers."],
                ["question" => "Can I combine South and North Sikkim?","answer" => "Yes — you can combine them, but allow extra days and plan acclimatisation before entering North Sikkim." ],
                ["question" => "What is special about Temi Tea Garden?","answer" => "Temi is Sikkim's most famous tea estate with scenic plantation walks, a colonial-era factory visit and tastings of locally produced orthodox tea."],
                ["question" => "Are there easy hikes in South Sikkim?","answer" => "Yes — short, well-marked trails in Ravangla and nearby rhododendron paths suit most fitness levels."],
                ["question" => "When is the best time to visit South Sikkim?","answer" => "Spring and autumn offer clear skies and pleasant temperatures; monsoon months can be wet but lush."],
                ["question" => "Do I need permits for South Sikkim?","answer" => "Most South Sikkim attractions do not require inner-line permits, but your operator will advise on any site-specific rules."
                ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "South Sikkim • Sikkim"],
            "intro" => "Typical stops around South Sikkim include tea gardens, cultural monuments, and easy scenic drives.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with valley and tea-estate panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Community sites, monastery routes, and local food experiences.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Culture"], "tags" => ["title" => "Popular around South Sikkim", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Tea Gardens", "url" => "#culture-heritage"], ["label" => "Local Culture", "url" => "#culture-heritage"], ["label" => "South Sikkim", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby tea slopes and heritage points.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "South Sikkim", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],
        "single_feature_list" => ["single_feature" => "South Sikkim combines tea-garden tranquillity, community experiences and easy-access viewpoints — perfect for short cultural retreats and family trips." ]
    ];

    include __DIR__ . '/../../../includes/header_constants.php';

    // Build JSON-LD
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

    if (!empty($data['faq']['items'])) {
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
