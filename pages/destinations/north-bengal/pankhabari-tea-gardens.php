<?php

    $pageTitle = 'Pankhabari Tea Gardens — Sunrise Slopes & Photography';
    $metaDescription = 'Pankhabari tea gardens are lesser-known slopes ideal for sunrise photography, quiet tea-walks and peaceful mornings among emerald terraces.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/pankhabari.jpg' : '/assets/img/north-bengal/pankhabari.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Pankhabari — Quiet Tea Terraces',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Pankhabari — Sunrise Tea Slopes',
            "subheading" => 'Photography, tea-walks and offbeat estate visits'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Pankhabari Highlights',
            "activity_body_content" => 'Visit less-touristed tea slopes for early morning light, estate walks and intimate encounters with plantation life. Perfect for photographers who love soft sunrise hues and misty terraces.',
            "assistant_snippet" => 'Pankhabari: tea terraces, sunrise photography and quiet estate walks.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Pankhabari',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short visits focused on tea-estate experiences, photography and local tasting rituals.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Estate visits and day trips',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Estate guide on request',
            "age_range" => 'All ages',
            "season" => 'Best Mar–May & Oct–Dec',
            "category" => 'Photography • Tea'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [ 'Transfer to estate', 'Guided walk', 'Tasting (where available)' ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [ 'Transport to Bagdogra', 'Insurance' ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Sunrise light on tea terraces and misty slopes.',
                'Estate walks and candid photography.',
                'Local tasting sessions and tea-craft insights.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Pankhabari Area',
            "image_and_names" => [ [ 'name' => 'Pankhabari Slopes', 'image' => '/assets/img/north-bengal/pankhabari.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Access', 'description' => 'Estate visits may need prior coordination with locals.' ],
                [ 'highlight' => 'Best Time', 'description' => 'Early mornings give the best light for photography.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Can we do photography tours?', 'answer' => 'Yes — early mornings are best for light and colours.' ],
                [ 'question' => 'Are tea tastings available?', 'answer' => 'Often yes, subject to estate schedules and availability.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Pankhabari visits for sunrise photography, estate walks and tea-craft stories.'
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
