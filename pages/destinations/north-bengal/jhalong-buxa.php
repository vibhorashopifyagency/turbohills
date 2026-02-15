<?php

    $pageTitle = 'Jhalong / Buxa — Forest Fringe & Wildlife Corridors';
    $metaDescription = 'Jhalong and the Buxa–Jaigaon fringe offer dense forests, wildlife corridors and access to Buxa Tiger Reserve — quiet jeep safaris, birding and cultural fringe villages.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/jhalong-buxa.jpg' : '/assets/img/north-bengal/jhalong-buxa.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Jhalong & Buxa — Forests & Wildlife',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg2.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Jhalong / Buxa — Wildlife Fringe',
            "subheading" => 'Access to Buxa Tiger Reserve and quiet forest corridors'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Jhalong & Buxa Highlights',
            "activity_body_content" => 'Explore forest fringes, gentle river valleys and the buffer zones of Buxa Tiger Reserve. Expect quieter jeep safaris, birding, and cultural visits to Dooars fringe villages — ideal for travellers who want low-traffic wildlife experiences.',
            "assistant_snippet" => 'Jhalong / Buxa: forest walks, jeep safaris and fringe village stays.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Jhalong / Buxa',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Jeep safaris, guided forest walks and birding-focused itineraries with local naturalists.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Eco-lodges and camps',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private jeep safaris',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local naturalists',
            "age_range" => 'All ages',
            "season" => 'Best Nov–May',
            "category" => 'Wildlife • Nature'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Jeep safaris where specified', 'Guided forest walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Park permits (may apply)', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Jeep safaris into fringe forests and river valleys.',
                'Birdlife, butterflies and small-mammal sightings.',
                'Cultural visits to border villages and forest hamlets.',
                'Quiet riverside sunsets and low-traffic nature trails.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Jhalong & Buxa Area',
            "image_and_names" => [ [ 'name' => 'Buxa Tiger Reserve', 'image' => '/assets/img/north-bengal/buxa-tiger-reserve.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Permits', 'description' => 'Check entry and safari permits for Buxa; we can arrange permits in advance.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Nov-May offers clearer weather and better wildlife visibility.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Can we arrange safaris?', 'answer' => 'Yes — jeep safaris and guided walks can be arranged subject to park rules.' ],
                [ 'question' => 'Is it good for birding?', 'answer' => 'Yes — forest edges and river corridors attract diverse birdlife.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Jhalong / Buxa safaris with AI-assisted scheduling and trusted local naturalists.'
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
