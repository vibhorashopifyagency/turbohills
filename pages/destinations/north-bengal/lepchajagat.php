<?php

    $pageTitle = 'Lepchajagat — Ridge Walks & Quiet Views';
    $metaDescription = 'Lepchajagat is a peaceful ridge village with short forest trails, Kanchenjunga glimpses and a relaxed village atmosphere for quiet mountain breaks.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/lepchajagat/lepchajagat.jfif' : '/assets/img/lepchajagat/lepchajagat.jfif');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Lepchajagat — Ridge Village Retreat',
            "slider_images" => [ 'assets/img/lepchajagat/lepchajagat.jfif' ]
        ],
        "headings" => [
            "heading1" => 'Lepchajagat — Forested Ridge',
            "subheading" => 'Short trails, birding and Kanchenjunga glimpses'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Lepchajagat Highlights',
            "activity_body_content" => 'A small, uncrowded ridge village ideal for short forest walks, birdwatching and quiet mornings with mountain views. It suits couples, solo travellers and families looking for peaceful nature-led stays.',
            "assistant_snippet" => 'Lepchajagat: quiet ridge walks and birding.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Lepchajagat',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Perfect for short stays and nature walks.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and small lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and solo travellers',
            "language" => 'English & Hindi',
            "guide" => 'Local guide available',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Nature • Birding'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Breakfast' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Travel to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Short forest trails and birdwatching.',
                'Easy ridge viewpoints with Kanchenjunga glimpses.',
                'Low-traffic homestays with warm local hospitality.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Lepchajagat Area',
            "image_and_names" => [ [ 'name' => 'Lepchajagat Ridge', 'image' => '/assets/img/lepchajagat/lepchajagat.jpg' ],
                                   [ 'name' => 'Lepchajagat Ridge', 'image' => '/assets/img/lepchajagat/lepchajagat-1.jpg' ], 
                                   [ 'name' => 'Lepchajagat Ridge', 'image' => '/assets/img/lepchajagat/lep4-1648469572.jpg' ]]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Suitability', 'description' => 'Lepchajagat is ideal for travellers searching peaceful hill stays near Darjeeling with short nature walks, low traffic and homestay-style comfort.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => 'A 1–2 night stay is usually enough for sunrise viewpoints, quiet forest trails and slow village experiences without itinerary pressure.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'What activities?', 'answer' => 'Short forest walks, village interactions and birding.' ],
                [ 'question' => 'When is the best time to visit?', 'answer' => 'Oct–Dec for clear views and Mar–May for fresh forest greens.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Lepchajagat • North Bengal"],
            "intro" => "Typical stops around Lepchajagat include misty forest points, quiet village lanes, and sunrise decks.",
            "heading" => "Photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These easy-access Lepchajagat viewpoints match common searches like best sunrise points near Darjeeling and quiet ridge photography spots.", "images" => [["src" => "/assets/img/lepchajagat/IMG.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/lepchajagat/lepchajagat03.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Community interactions, local food stops and hamlet charm answer popular AEO questions on what to do in Lepchajagat beyond viewpoint hopping.", "image" => ["src" => "/assets/img/lepchajagat/2.png", "alt" => "Village life"], "tags" => ["title" => "Popular around Lepchajagat", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Lepchajagat", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby viewpoints and tea routes are ideal for couples and families seeking low-walk offbeat itineraries.", "image" => ["src" => "/assets/img/lepchajagat/road-to-Lepchajagat-930x620.jpeg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Lepchajagat", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Lepchajagat for calm ridge stays and local-guided walks.'
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
