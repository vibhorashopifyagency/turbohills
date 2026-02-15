<?php

    $pageTitle = 'Rishyap — Ridge Village & Kanchenjunga Views';
    $metaDescription = 'Rishyap is a peaceful ridge village known for dramatic Kanchenjunga viewpoints, sunrise vistas and simple homestays for slow, mindful stays.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/rishyap.jpg' : '/assets/img/north-bengal/rishyap.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Rishyap — Ridge Sunrise & Solitude',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Rishyap — Small Ridge Village',
            "subheading" => 'Sunrise Kanchenjunga views and homestay calm'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Rishyap Highlights',
            "activity_body_content" => 'A small village perfect for sunrise viewing, gentle ridge walks and homestay experiences with warm local hosts. Great for photographers and slow travellers who want quiet mountain mornings.',
            "assistant_snippet" => 'Rishyap: sunrise views, ridge walks and quiet homestays.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Rishyap',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short stays ideal for photographers, couples and those seeking calm.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and small lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and solo travellers',
            "language" => 'English & Hindi',
            "guide" => 'Local host-guides',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec',
            "category" => 'Photography • Relaxation'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Private transfer', 'Homestay accommodation', 'Breakfast' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Travel to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sunrise vistas across Kanchenjunga.',
                'Quiet homestays and ridge walks.',
                'Low-light pollution for stargazing on clear nights.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Rishyap Area',
            "image_and_names" => [ [ 'name' => 'Rishyap Ridge', 'image' => '/assets/img/north-bengal/rishyap.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Access', 'description' => 'Short hill drives from nearby towns; expect narrow roads.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for crisp sunrise views; Mar–May for pleasant days.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'When to visit?', 'answer' => 'October–December for crisp sunrise views.' ],
                [ 'question' => 'Is Rishyap suitable for seniors?', 'answer' => 'Yes — the pace is slow and activities are gentle.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Rishyap for sunrise photography, ridge walks and calm homestay hospitality.'
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
