<?php

    $pageTitle = 'Takdah — Little-Known Tea Village & Panoramas';
    $metaDescription = 'Takdah is a quiet, little-known hill village with old tea terraces and peaceful mornings — perfect for travellers seeking offbeat views, tea-walks and slow stays.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/takdah.jpg' : '/assets/img/north-bengal/takdah.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Takdah — Quiet Tea Village',
            "slider_images" => [ 'assets/img/innerpages/breadcrumb-bg1.jpg' ]
        ],
        "headings" => [
            "heading1" => 'Takdah — Tea Terraces & Peace',
            "subheading" => 'Low-traffic village life and sunrise views'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Takdah Highlights',
            "activity_body_content" => 'A small hill village with old tea gardens and wide views — ideal for slow mornings, tea-walks and unobstructed sunrise photography. Takdah suits travellers who prefer low-traffic villages and mindful mountain breaks.',
            "assistant_snippet" => 'Takdah: offbeat tea village with panoramic terrace views.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Takdah',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Short stays for rest, photography and tea estate visits.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Homestays and small lodges',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local guide available',
            "age_range" => 'All ages',
            "season" => 'Best Oct–Dec & Mar–May',
            "category" => 'Relaxation • Tea'
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
                'Old tea terraces and sunrise viewpoints.',
                'Quiet village walks and local interactions.',
                'Colonial-era charm and peaceful forest edges.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Takdah Area',
            "image_and_names" => [ [ 'name' => 'Takdah Terrace', 'image' => '/assets/img/north-bengal/takdah.jpg' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Access', 'description' => 'Narrow hill roads; private transfer recommended.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => '1–2 nights works best for tea-walks, sunrise and local village life.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'Is Takdah crowded?', 'answer' => 'No — relatively low tourist numbers make it peaceful.' ],
                [ 'question' => 'What is Takdah known for?', 'answer' => 'Takdah is known for old tea terraces, quiet homestays and slow mountain mornings.' ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Takdah stays for calm mornings and tea-walks with local hosts.'
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
