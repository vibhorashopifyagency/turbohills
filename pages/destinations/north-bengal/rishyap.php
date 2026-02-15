<?php

    $pageTitle = 'Rishyap — Ridge Village & Kanchenjunga Views';
    $metaDescription = 'Rishyap is a peaceful ridge village known for dramatic Kanchenjunga viewpoints, sunrise vistas and simple homestays for slow, mindful stays.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/rishyap.jpg' : '/assets/img/north-bengal/rishyap.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Rishyap — Ridge Sunrise & Solitude',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Rishyap — Small Ridge Village',
            "subheading" => 'Sunrise Kanchenjunga views and homestay calm'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Rishyap Highlights',
            "activity_body_content" => 'A small village perfect for sunrise viewing, gentle ridge walks and homestay experiences with warm local hosts. Great for photographers and slow travellers who want quiet mountain mornings.',
            "assistant_snippet" => 'Rishyap: sunrise views, ridge walks and quiet homestays.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Rishyap',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short stays ideal for photographers, couples and those seeking calm.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and small lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and solo travellers',
            "language" => 'English & Hindi',
            "guide" => 'Local host-guides',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec',
            "category" => 'Photography • Relaxation'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Private transfer', 'Homestay accommodation', 'Breakfast' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Travel to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sunrise vistas across Kanchenjunga.',
                'Quiet homestays and ridge walks.',
                'Low-light pollution for stargazing on clear nights.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Rishyap Area',
            "image_and_names" => [ [ 'name' => 'Rishyap Ridge', 'image' => '/assets/img/north-bengal/rishyap.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Access', 'description' => 'Short hill drives from nearby towns; expect narrow roads.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for crisp sunrise views; Mar–May for pleasant days.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'When to visit?', 'answer' => 'October–December for crisp sunrise views.' ],
                [ 'question' => 'Is Rishyap suitable for seniors?', 'answer' => 'Yes — the pace is slow and activities are gentle.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Rishyap • North Bengal"],
            "intro" => "Typical stops around Rishyap include ridge viewpoints, pine trails, and calm mountain village moments.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with ridge and snow-peak panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Community interactions, local food, and quiet hill-village experiences.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Village life"], "tags" => ["title" => "Popular around Rishyap", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Rishyap", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby forest viewpoints and village routes.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Rishyap", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Rishyap for sunrise photography, ridge walks and calm homestay hospitality.'
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
