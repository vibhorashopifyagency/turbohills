<?php

    $pageTitle = 'Mirik — Lakefront Calm & Tea Terraces';
    $metaDescription = 'Mirik is a serene lake town with Sumendu Lake, tea terraces and quiet walks — perfect for relaxed boating, photography and family-friendly stays.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/mirik-lake.jpg' : '/assets/img/north-bengal/mirik-lake.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Mirik — Lake & Tea Terrace Tranquillity',
            "slider_images" => [ '/assets/img/north-bengal/mirik-top.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Mirik — Sumendu Lake and Quiet Stays',
            "subheading" => 'Boating, tea terraces and slow photography mornings'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Mirik Highlights',
            "activity_body_content" => 'Boating on Sumendu Lake, strolling along pine-lined paths and visiting nearby tea terraces make Mirik an unhurried stop for couples, families and photographers. The town is ideal for restorative weekends and slow-paced mountain days.',
            "assistant_snippet" => 'Mirik: lake boating, tea terraces and peaceful photography spots.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Mirik',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short, calm stays with lake activities.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Cozy lakeside lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and families',
            "language" => 'English & Hindi',
            "guide" => 'Local guide on request',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Relaxation • Photography'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Private transfers', 'Accommodation', 'Sumendu Lake boating (as per package)' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Transport to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sumendu Lake boating and lakeside strolls.',
                'Tea-terrace walks and sunset viewpoints.',
                'Pine-lined paths and quiet café breaks.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Mirik Area',
            "image_and_names" => [ [ 'name' => 'Sumendu Lake', 'image' => '/assets/img/north-bengal/mirik-gopaldhara.jfif' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Pace', 'description' => 'Ideal for two-night leisure stays.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec and Mar–May for pleasant weather and clear skies.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is boating available?', 'answer' => 'Yes — seasonal boating on Sumendu Lake; check availability.' ],
                [ 'question' => 'Is Mirik suitable for families?', 'answer' => 'Yes — Mirik has easy walks, calm lakefront areas and family-friendly activities.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Mirik • North Bengal"],
            "intro" => "Typical stops around Mirik include lakeside viewpoints, orange orchards, and short pine-forest drives.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with lake and valley panoramas.", "images" => [["src" => "/assets/img/north-bengal/mirik-tempal.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/north-bengal/fog-mirik.webp", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Community interactions, market visits, and local tea-culture moments.", "image" => ["src" => "/assets/img/north-bengal/mirik-buddhas-tempal.jpg", "alt" => "Village life"], "tags" => ["title" => "Popular around Mirik", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Mirik", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby tea areas and gentle hill bends.", "image" => ["src" => "/assets/img/north-bengal/Gopaldhara1.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Mirik", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Mirik stays with AI-curated lake activities and photography tips.'
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
