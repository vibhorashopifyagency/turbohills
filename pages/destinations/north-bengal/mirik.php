<?php

    $pageTitle = 'Mirik — Lakefront Calm & Tea Terraces';
    $metaDescription = 'Mirik is a serene lake town with Sumendu Lake, tea terraces and quiet walks — perfect for relaxed boating, photography and family-friendly stays.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/mirik-lake.jpg' : '/assets/img/north-bengal/mirik-lake.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Mirik — Lake & Tea Terrace Tranquillity',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
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
            "image_and_names" => [ [ 'name' => 'Sumendu Lake', 'image' => '/assets/img/north-bengal/mirik-lake.jpg' ] ]
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
        "single_feature_list" => [
            "single_feature" => 'Book Mirik stays with AI-curated lake activities and photography tips.'
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
