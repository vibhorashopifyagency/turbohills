<?php

    $pageTitle = 'Lava — Gateway to Neora Valley & Rhododendron Forests';
    $metaDescription = 'Lava is a gateway village to Neora Valley National Park with rhododendron forests, birdlife and calm lodges — ideal for nature walks, birding and soft treks.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/lava.jpg' : '/assets/img/north-bengal/lava.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Lava — Neora Valley Gateway',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Lava — Rhododendrons & Birdlife',
            "subheading" => 'Access point for Neora Valley and tranquil forest stays'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Lava Highlights',
            "activity_body_content" => 'Explore rhododendron forests, birding trails and Neora Valley routes from Lava — a calm base for nature lovers, photographers and soft trekkers seeking quiet forest mornings.',
            "assistant_snippet" => 'Lava: rhododendron forests, birding and access to Neora Valley.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Lava',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Ideal for birding, gentle treks and forest-stay experiences with local guides.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Forest lodges and eco-stays',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Nature groups and couples',
            "language" => 'English & Hindi',
            "guide" => 'Local naturalist guides',
            "age_range" => 'All ages',
            "season" => 'Best Mar–May & Oct–Dec',
            "category" => 'Nature • Trekking'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Guided forest walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Park permits (where applicable)', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Neora Valley trails and rhododendron blooms in spring.',
                'Birdwatching with local naturalists.',
                'Quiet forest lodges and misty morning walks.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Lava Area',
            "image_and_names" => [ [ 'name' => 'Neora Valley', 'image' => '/assets/img/north-bengal/neora-valley.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Permits', 'description' => 'Check park permit requirements for deeper treks into Neora Valley.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Mar–May for blooms; Oct–Dec for clear skies and birding.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Can I trek from Lava?', 'answer' => 'Yes — several trails lead into Neora Valley; hire a local guide for longer treks.' ],
                [ 'question' => 'Is Lava good for birding?', 'answer' => 'Yes — forest edges and valley trails attract diverse Himalayan birdlife.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Lava • North Bengal"],
            "intro" => "Typical stops around Lava include pine-forest viewpoints, monastery corners, and short village drives.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with forest and mountain panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Monastery visits, local food stops, and community interactions.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Village life"], "tags" => ["title" => "Popular around Lava", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Lava", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby ridges, tea points, and valley edges.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Lava", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Lava stays for guided Neora Valley walks, birding and peaceful forest mornings.'
        ]
    ];

    include __DIR__ . '/../../../includes/header_constants.php';

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
            "name" => "North Bengal, India"
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
                "name" => "North Bengal",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/north-bengal/north-bengal-experiences.php' : '/pages/destinations/north-bengal/north-bengal-experiences.php')
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
