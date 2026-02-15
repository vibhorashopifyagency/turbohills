<?php

    $pageTitle = 'Suntalekhola — Riverside Meadows & Birdlife';
    $metaDescription = 'Suntalekhola is a peaceful riverside meadow area with easy nature trails, birdlife and family-friendly picnic spots in the Dooars region.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/suntalekhola.jpg' : '/assets/img/north-bengal/suntalekhola.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Suntalekhola — Riverside Trails & Birding',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Suntalekhola — River Meadows',
            "subheading" => 'Easy walks, picnic spots and excellent birdlife'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Suntalekhola Highlights',
            "activity_body_content" => 'Enjoy riverside meadows, short trails and local birdlife; a calm Dooars stop for families, couples and gentle nature walks. Expect quiet afternoons, soft light and soothing river sounds.',
            "assistant_snippet" => 'Suntalekhola: riverside walks, birding and picnic meadows.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Suntalekhola',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short nature stops and family-friendly activities with easy access.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Eco-lodges and camps',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Families and small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local naturalists',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Nature • Family'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Guided walks' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Park permits', 'Insurance' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Riverside meadows for picnics and walks.',
                'Birdwatching and family-friendly trails.',
                'Gentle nature photography at golden hour.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Suntalekhola Area',
            "image_and_names" => [ [ 'name' => 'Suntalekhola Meadows', 'image' => '/assets/img/north-bengal/suntalekhola.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Accessibility', 'description' => 'Good for families; short walks and easy terrain.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for pleasant weather and clear river views.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is it family-friendly?', 'answer' => 'Yes — gentle terrain and picnic-friendly meadows.' ],
                [ 'question' => 'Is birding possible?', 'answer' => 'Yes — the riverside habitat is good for local birds.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Suntalekhola for riverside stays, easy walks and calm Dooars birdlife.'
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
