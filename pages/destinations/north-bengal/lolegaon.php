<?php

    $pageTitle = 'Lolegaon — Quiet Hamlet & Forest Trails';
    $metaDescription = 'Lolegaon is a small, peaceful village offering forested trails, panoramic viewpoints and a slow pace perfect for short escapes and mindful retreats.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/lolegaon.jpg' : '/assets/img/north-bengal/lolegaon.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Lolegaon — Forest Trails & Panoramas',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Lolegaon — Hamlet on the Ridge',
            "subheading" => 'Forested trails, sunrise ridges and serene viewpoints'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Lolegaon Highlights',
            "activity_body_content" => 'Enjoy quiet forest trails, small tea gardens and ridgeline viewpoints away from busy tourist routes. Ideal for couples, families and solo travellers seeking calm mornings and easy walks.',
            "assistant_snippet" => 'Lolegaon: easy hikes, forest walks and calm stays.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Lolegaon',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short stays for nature lovers, light hikers and slow-paced travellers.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and small lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Couples and small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local guide on request',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Nature • Relaxation'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfers', 'Accommodation', 'Breakfast' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Transport to Bagdogra', 'Insurance', 'Meals not listed' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Forest trails and quiet viewpoints.',
                'Sunrise ridge walks with Himalayan silhouettes.',
                'Warm homestays and local hill community interactions.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Lolegaon Area',
            "image_and_names" => [ [ 'name' => 'Lolegaon Viewpoint', 'image' => '/assets/img/north-bengal/lolegaon.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Suitability', 'description' => 'Great for low-traffic trails, short hikes and homestay comforts.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Oct–Dec for clear views; Mar–May for forest blooms.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'How to get there?', 'answer' => 'Private transfers from nearby towns are easiest; roads may be narrow.' ],
                [ 'question' => 'Is Lolegaon good for families?', 'answer' => 'Yes — gentle trails and calm stays suit families and senior travellers.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Lolegaon for serene forest stays, easy hikes and quiet ridge views.'
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
