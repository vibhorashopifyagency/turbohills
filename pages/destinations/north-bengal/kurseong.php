<?php

    $pageTitle = 'Kurseong — Quiet Tea Town & Forest Walks';
    $metaDescription = 'Kurseong offers colonial charm, tea gardens and forested walks — a calm stop between plains and higher Himalayan ridges for slow travel.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/kurseong.jpg' : '/assets/img/north-bengal/kurseong.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Kurseong — Tea Town Tranquillity',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Kurseong — Tea & Forests',
            "subheading" => 'Colonial charm, tea estates and quiet trails'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Kurseong Highlights',
            "activity_body_content" => 'Explore small tea estates, gentle forest walks and the town\'s colonial-era ambiance — ideal for slow exploration and calm mornings. Kurseong also suits short restorative breaks with warm cafés, low traffic and easy half-day excursions.',
            "assistant_snippet" => 'Kurseong: tea walks, peaceful viewpoints and local markets.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Kurseong',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short, relaxed stays with local hosts.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Cozy homestays and tea bungalows',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local guide available',
            "age_range" => 'All ages',
            "season" => 'Best Mar–May & Oct–Dec',
            "category" => 'Relaxation • Tea'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Private transfers', 'Accommodation', 'Breakfast' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Travel to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [ 'Tea-estate walks and local tastings.', 'Forest trails and easy viewpoints.', 'Colonial-era neighborhoods and calm market strolls.' ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Kurseong Area',
            "image_and_names" => [ [ 'name' => 'Elysia Park', 'image' => '/assets/img/north-bengal/kurseong-elysia.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Pace', 'description' => 'Ideal for slow mornings and short strolls.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => '1–2 nights works well for a relaxed tea-and-forest experience.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'How long to stay?', 'answer' => '1–2 days are enough for a relaxed visit.' ],
                [ 'question' => 'Is Kurseong crowded?', 'answer' => 'Usually less crowded than larger hill towns, making it ideal for peaceful stays.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Kurseong stays with AI-curated local walks and tea experiences.'
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
