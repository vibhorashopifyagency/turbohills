<?php

    $pageTitle = 'Lepchajagat — Ridge Walks & Quiet Views';
    $metaDescription = 'Lepchajagat is a peaceful ridge village with short forest trails, Kanchenjunga glimpses and a relaxed village atmosphere for quiet mountain breaks.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/lepchajagat.jpg' : '/assets/img/north-bengal/lepchajagat.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Lepchajagat — Ridge Village Retreat',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
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
            "image_and_names" => [ [ 'name' => 'Lepchajagat Ridge', 'image' => '/assets/img/north-bengal/lepchajagat.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Suitability', 'description' => 'Great for travellers seeking short, peaceful walks and homestays.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => '1–2 nights is ideal to enjoy quiet mornings and forest trails.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'What activities?', 'answer' => 'Short forest walks, village interactions and birding.' ],
                [ 'question' => 'When is the best time to visit?', 'answer' => 'Oct–Dec for clear views and Mar–May for fresh forest greens.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Lepchajagat for calm ridge stays and local-guided walks.'
        ]
    ];

    include __DIR__ . '/../../../includes/header_constants.php';

    $ld_graph = [];
    $page_url = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . ($_SERVER['REQUEST_URI'] ?? '');
    }

    $ld_graph[] = [
        "@type" => "WebPage",
        "name" => $pageTitle,
        "description" => $metaDescription,
        "url" => $page_url
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
            $ld_graph[] = [
                "@type" => "FAQPage",
                "mainEntity" => $faq_entities
            ];
        }
    }

    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);

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
