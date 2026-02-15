<?php

    $pageTitle = 'Sandakphu — High Ridge Trek & Himalayan Panorama';
    $metaDescription = 'Sandakphu offers a high ridge trek with panoramic Himalayan views, rhododendron forests and peaceful alpine meadows for trekkers seeking iconic summit landscapes.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/sandakphu.jpg' : '/assets/img/north-bengal/sandakphu.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Sandakphu — Trekking Ridge & Peaks',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg2.jpg'
            ]
        ],
        "headings" => [
            "heading1" => 'Sandakphu — Alpine Views',
            "subheading" => 'High-ridge trekking for panoramic Himalayan vistas'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Sandakphu Trek',
            "activity_body_content" => 'A classic high-altitude ridge walk offering dramatic sunrise views across multiple 8,000m peaks. Ideal for trekkers seeking quiet alpine landscapes, rhododendron blooms in spring and unforgettable ridge-line camping moments.',
            "assistant_snippet" => 'Sandakphu: multi-day ridge trekking and panoramic mountain views.',
            "location_slider_wrap" => 'Nearby Stops',
            "highlights_tour" => 'Highlights — Sandakphu',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts',
            "package_info_message" => 'Trek-friendly itineraries with local guides and gradual altitude gain.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain lodges',
            "breakfast_and_dinner" => 'Meals on trek included as specified',
            "transportation" => 'Private transfers to trek start',
            "group_size" => 'Small trekking groups',
            "language" => 'English & local guides',
            "guide" => 'Trek guide and porters as needed',
            "age_range" => 'Fit travellers 12+',
            "season" => 'Best Apr–May & Oct–Nov',
            "category" => 'Trekking • Viewpoints'
        ],
        "features" => [
            "title" => "What's Included & Not Included",
            "included" => [
                "title" => "Included",
                "items" => [
                    'Private transfers to trekhead',
                    'Trek guide and local support',
                    'Lodging on trek as per plan',
                    'Meals on trek'
                ]
            ],
            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    'Permits if applicable',
                    'Personal travel insurance',
                    'Equipment rental'
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Panoramic views of Kanchenjunga and nearby high peaks.',
                'Rhododendron forests and alpine meadows.',
                'Offbeat trekking routes away from crowds.',
                'Golden-hour ridge photography and cloud-ocean views.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Sandakphu Region',
            "image_and_names" => [
                [ 'name' => 'Phalut', 'image' => '/assets/img/north-bengal/phalut.jpg' ],
                [ 'name' => 'Gurdum', 'image' => '/assets/img/north-bengal/gurdum.jpg' ]
            ]
        ],
        "additional_info" => [
            "title" => 'Important Travel Information',
            "items" => [
                [
                    'highlight' => 'Fitness',
                    'description' => 'Moderate to strenuous trekking; acclimatise and travel with an experienced guide.'
                ],
                [
                    'highlight' => 'Best Season',
                    'description' => 'Apr–May for blooms and Oct–Nov for clear mountain panoramas.'
                ]
            ]
        ],
        "faq" => [
            "title" => 'Frequently Asked Questions',
            "items" => [
                [
                    'question' => 'How long is the trek?',
                    'answer' => 'Typically 3–5 days depending on route and pace.'
                ],
                [
                    'question' => 'Can beginners do Sandakphu?',
                    'answer' => 'Fit beginners can do it with proper pacing, acclimatisation and local guide support.'
                ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book guided Sandakphu treks with AI-curated pace and local support.'
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
