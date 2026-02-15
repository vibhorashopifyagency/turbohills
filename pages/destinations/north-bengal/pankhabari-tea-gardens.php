<?php

    $pageTitle = 'Pankhabari Tea Gardens — Sunrise Slopes & Photography';
    $metaDescription = 'Pankhabari tea gardens are lesser-known slopes ideal for sunrise photography, quiet tea-walks and peaceful mornings among emerald terraces.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/pankhabari.jpg' : '/assets/img/north-bengal/pankhabari.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Pankhabari — Quiet Tea Terraces',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Pankhabari — Sunrise Tea Slopes',
            "subheading" => 'Photography, tea-walks and offbeat estate visits'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Pankhabari Highlights',
            "activity_body_content" => 'Visit less-touristed tea slopes for early morning light, estate walks and intimate encounters with plantation life. Perfect for photographers who love soft sunrise hues and misty terraces.',
            "assistant_snippet" => 'Pankhabari: tea terraces, sunrise photography and quiet estate walks.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Pankhabari',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short visits focused on tea-estate experiences, photography and local tasting rituals.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Estate visits and day trips',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Estate guide on request',
            "age_range" => 'All ages',
            "season" => 'Best Mar–May & Oct–Dec',
            "category" => 'Photography • Tea'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfer to estate', 'Guided walk', 'Tasting (where available)' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Transport to Bagdogra', 'Insurance' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sunrise light on tea terraces and misty slopes.',
                'Estate walks and candid photography.',
                'Local tasting sessions and tea-craft insights.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Pankhabari Area',
            "image_and_names" => [ [ 'name' => 'Pankhabari Slopes', 'image' => '/assets/img/north-bengal/pankhabari.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Access', 'description' => 'Estate visits may need prior coordination with locals.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Early mornings give the best light for photography.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Can we do photography tours?', 'answer' => 'Yes — early mornings are best for light and colours.' ],
                [ 'question' => 'Are tea tastings available?', 'answer' => 'Often yes, subject to estate schedules and availability.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Pankhabari • North Bengal"],
            "intro" => "Typical stops around Pankhabari include tea-garden roads, quiet lookouts, and heritage mountain routes.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with tea-garden and valley panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Community interactions, tea-route stories, and local food stops.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Village life"], "tags" => ["title" => "Popular around Pankhabari", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Pankhabari", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby tea sections and mountain bends.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Pankhabari", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Pankhabari visits for sunrise photography, estate walks and tea-craft stories.'
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
