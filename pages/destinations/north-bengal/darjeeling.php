<?php

    $pageTitle = 'Darjeeling — Sunrise Views, Tea & Toy Train';
    $metaDescription = 'Darjeeling: watch sunrise at Tiger Hill, stroll Observatory Hill and ride the historic toy train. Calm tea gardens, heritage lanes and Himalayan vistas for a peaceful escape.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/darjeeling-tiger-hill.jpg' : '/assets/img/north-bengal/darjeeling-tiger-hill.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Darjeeling — Sunrise, Tea & Quiet Strolls',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg'
            ]
        ],
        "headings" => [
            "heading1" => 'Darjeeling — Classic Hill Retreat',
            "subheading" => 'Sunrise vistas, tea-garden walks and slow moments by the ridge'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Darjeeling Highlights',
            "activity_body_content" => 'Watch sunrise from Tiger Hill, visit Observatory Hill and explore historic tea estates. Gentle walks, local cafés and the toy-train make Darjeeling a calm, scenic stop ideal for photographers and slow travellers. Add a monastery visit, heritage market stroll and curated tea tasting for a fuller, stress-free mountain experience.',
            "assistant_snippet" => 'Darjeeling: tiger hill sunrise, tea-estate walks and heritage toy-train routes.',
            "location_slider_wrap" => 'Top Stops Around Darjeeling',
            "highlights_tour" => 'Highlights — Darjeeling',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Private transfers, local hosts and curated slow itineraries for meaningful stays.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ hill hotels and tea bungalows',
            "breakfast_and_dinner" => 'Daily breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Private or small groups',
            "language" => 'English, Hindi & regional guides',
            "guide" => 'Local cultural guide',
            "age_range" => 'Family-friendly',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Scenic • Tea • Relaxation'
        ],
        "features" => [
            "title" => "What's Included & Not Included",
            "included" => [
                "title" => "Included",
                "items" => [
                    'Private pickup & drop (Bagdogra)',
                    'Accommodation as per package',
                    'Daily breakfast',
                    'Guided tea-estate walk'
                ]
            ],
            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    'Transport to Bagdogra',
                    'Personal insurance',
                    'Meals not listed'
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Tiger Hill sunrise and panoramic Kanchenjunga views.',
                'Toy Train ride and heritage strolls.',
                'Happy Valley tea-estate tours and tastings.',
                'Curated café and market walks for local food and culture.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Darjeeling Area',
            "image_and_names" => [
                [ 'name' => 'Tiger Hill', 'image' => '/assets/img/north-bengal/darjeeling-tiger-hill.jpg' ],
                [ 'name' => 'Observatory Hill', 'image' => '/assets/img/north-bengal/darjeeling-observatory.jpg' ]
            ]
        ],
        "additional_info" => [
            "title" => 'Important Travel Information',
            "items" => [
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec and Mar–May for clear skies and pleasant temperatures.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => '2–3 nights allows sunrise, tea-estate visits and a relaxed toy-train experience.' ]
            ]
        ],
        "faq" => [
            "title" => 'Frequently Asked Questions',
            "items" => [
                [ 'question' => 'How to reach?', 'answer' => 'Darjeeling is best reached by private transfer from Bagdogra (3–4 hours).' ],
                [ 'question' => 'Is Darjeeling good for families?', 'answer' => 'Yes — it offers easy sightseeing, tea-garden visits and gentle walks suitable for families.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Darjeeling stays with AI-curated itineraries for personalized, calm travel.'
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
