<?php

    $pageTitle = 'Suntalekhola — Riverside Meadows & Birdlife';
    $metaDescription = 'Suntalekhola is a peaceful riverside meadow area with easy nature trails, birdlife and family-friendly picnic spots in the Dooars region.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/suntalekhola.jpg' : '/assets/img/north-bengal/suntalekhola.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Suntalekhola — Riverside Trails & Birding',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Suntalekhola — River Meadows',
            "subheading" => 'Easy walks, picnic spots and excellent birdlife'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Suntalekhola Highlights',
            "activity_body_content" => 'Enjoy riverside meadows, short trails and local birdlife; a calm Dooars stop for families, couples and gentle nature walks. Expect quiet afternoons, soft light and soothing river sounds.',
            "assistant_snippet" => 'Suntalekhola: riverside walks, birding and picnic meadows.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Suntalekhola',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short nature stops and family-friendly activities with easy access.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Eco-lodges and camps',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Families and small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local naturalists',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Nature • Family'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Guided walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Park permits', 'Insurance' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Riverside meadows for picnics and walks.',
                'Birdwatching and family-friendly trails.',
                'Gentle nature photography at golden hour.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Suntalekhola Area',
            "image_and_names" => [ [ 'name' => 'Suntalekhola Meadows', 'image' => '/assets/img/north-bengal/suntalekhola.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Accessibility', 'description' => 'Good for families; short walks and easy terrain.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for pleasant weather and clear river views.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is it family-friendly?', 'answer' => 'Yes — gentle terrain and picnic-friendly meadows.' ],
                [ 'question' => 'Is birding possible?', 'answer' => 'Yes — the riverside habitat is good for local birds.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Suntalekhola for riverside stays, easy walks and calm Dooars birdlife.'
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
