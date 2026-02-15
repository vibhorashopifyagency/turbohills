<?php

    $pageTitle = 'Phalut — Remote Summit & Alpine Solitude';
    $metaDescription = 'Phalut is a remote summit beyond Sandakphu offering alpine vistas, quiet treks and offbeat wilderness for travellers seeking solitude and wide mountain panoramas.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/phalut.jpg' : '/assets/img/north-bengal/phalut.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Phalut — Offbeat Summit Experience',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg2.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Phalut — Quiet High-Altitude Views',
            "subheading" => 'Remote ridgelines and alpine silence'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Phalut Highlights',
            "activity_body_content" => 'A less-travelled high-ridge destination beyond Sandakphu, Phalut offers vast mountain views, rhododendron forests and a strong sense of remoteness — perfect for experienced trekkers seeking immersive wilderness.',
            "assistant_snippet" => 'Phalut: remote summit trekking and alpine panoramas.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Phalut',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Ideal for trekkers looking for solitude and uncrowded mountain scenery.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain lodges',
            "breakfast_and_dinner" => 'As per trek plan',
            "transportation" => 'Transfers to trailhead',
            "group_size" => 'Small trekking groups',
            "language" => 'English & local guides',
            "guide" => 'Trek guide required',
            "age_range" => 'Fit travellers',
            "season" => 'Best Oct–Dec & Apr–May',
            "category" => 'Trekking • Offbeat'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [
                    'Trek guide and local support',
                    'Lodging on trek',
                    'Meals as per plan'
                ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [
                    'Permits',
                    'Insurance',
                    'Personal gear'
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sweepingly remote views across Himalayan summits.',
                'Rhododendron and alpine flora during spring.',
                'Offbeat, low-traffic trekking routes.',
                'Sunrise and sunset ridge camps with minimal crowding.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops',
            "image_and_names" => [
                [ 'name' => 'Sandakphu', 'image' => '/assets/img/north-bengal/sandakphu.jpg' ]
            ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Preparation', 'description' => 'Remote terrain — arrange a guide and proper gear.' ],
                [ 'highlight' => 'Safety', 'description' => 'Weather can change quickly; layer clothing and carry essentials.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is a guide necessary?', 'answer' => 'Yes, local guides are recommended for safety and navigation.' ],
                [ 'question' => 'What fitness level is needed?', 'answer' => 'A moderate to high fitness level is advised for multi-day high-ridge trekking.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Phalut treks with AI-curated pacing and experienced local guides.'
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
