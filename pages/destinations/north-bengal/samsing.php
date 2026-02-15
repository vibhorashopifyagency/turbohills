<?php

    $pageTitle = 'Samsing — Offbeat Tea Gardens & River Flats';
    $metaDescription = 'Samsing is an offbeat Dooars village with tea gardens, river flats and quiet walking trails — ideal for travellers seeking low-key nature experiences and slow village days.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/samsing.jpg' : '/assets/img/north-bengal/samsing.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Samsing — Tea Gardens & Quiet River Trails',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg2.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Samsing — Offbeat Dooars Village',
            "subheading" => 'Tea slopes, river flats and easy nature walks'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Samsing Highlights',
            "activity_body_content" => 'A lesser-known Dooars village with riverside trails, tea slopes and quiet nature walks — perfect for relaxed exploration, photography and slow village evenings.',
            "assistant_snippet" => 'Samsing: offbeat tea slopes and river walks in the Dooars.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Samsing',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Small-group day trips and homestay options for calm nature stays.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and eco-lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local guides available',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Offbeat • Nature'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Guided walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Tea-garden walks and river flats.',
                'Quiet village life and local interactions.',
                'Birdlife and soft-light photography in the Dooars.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Samsing Area',
            "image_and_names" => [ [ 'name' => 'Samsing Tea Slopes', 'image' => '/assets/img/north-bengal/samsing.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Best For', 'description' => 'Travellers wanting offbeat tea-garden experiences and slow walks.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for clear weather; Mar–May for lush greens.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'How to reach?', 'answer' => 'Private transfers from Siliguri or nearby Dooars towns are recommended.' ],
                [ 'question' => 'Is Samsing good for families?', 'answer' => 'Yes — the walks are gentle and the pace is relaxed.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Samsing for offbeat tea-garden stays, river walks and calm Dooars evenings.'
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
