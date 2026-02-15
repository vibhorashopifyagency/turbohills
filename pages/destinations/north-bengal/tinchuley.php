<?php

    $pageTitle = 'Tinchuley — Pine Village & Birding Trails';
    $metaDescription = 'Tinchuley is a pine-fringed village known for excellent birding, tea-walks and simple trails — a calm retreat for nature lovers and photographers.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/tinchuley.jpg' : '/assets/img/north-bengal/tinchuley.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Tinchuley — Pine Trails & Birding',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Tinchuley — Birding & Pine Walks',
            "subheading" => 'Quiet village life with excellent birdwatching opportunities'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Tinchuley Highlights',
            "activity_body_content" => 'Ideal for birdwatchers, Tinchuley offers pine trails, tea-garden views and slow village walks. The clean air, low traffic and quiet mornings make it a peaceful nature base.',
            "assistant_snippet" => 'Tinchuley: birding, pine walks and quiet homestays.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Tinchuley',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short stays focused on birding, pine trails and nature walks.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and eco-lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Birding groups and couples',
            "language" => 'English & Hindi',
            "guide" => 'Local naturalist guides',
            "age_range" => 'All ages',
            "season" => 'Best Mar–May & Oct–Dec',
            "category" => 'Birding • Nature'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Guided birding walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Transport to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Early-morning birding walks and pine-scented trails.',
                'Tea-garden views and village interactions.',
                'Soft-light photography and quiet ridge viewpoints.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Tinchuley Area',
            "image_and_names" => [ [ 'name' => 'Tinchuley Ridge', 'image' => '/assets/img/north-bengal/tinchuley.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Birding', 'description' => 'Bring binoculars and a field guide; local naturalists available.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for clear skies; Mar–May for migratory birds.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is birding good here?', 'answer' => 'Yes — Tinchuley is known for local and migratory species.' ],
                [ 'question' => 'How long should I stay?', 'answer' => 'A 1–2 night stay is ideal for birding and quiet walks.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Tinchuley for guided birding, pine trails and peaceful homestays.'
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
