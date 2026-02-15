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
        "single_feature_list" => [
            "single_feature" => 'Book Lava stays for guided Neora Valley walks, birding and peaceful forest mornings.'
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
