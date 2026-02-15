<?php

    $pageTitle = 'Latpanchar — Remote Hamlet & Mountain Solitude';
    $metaDescription = 'Latpanchar is a remote mountain hamlet offering solitude, simple hikes and panoramic viewpoints — ideal for travellers seeking quiet, birdlife and fewer visitors.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/north-bengal/latpanchar.jpg' : '/assets/img/north-bengal/latpanchar.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Latpanchar — Remote Mountain Hamlet',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg1.jpg'
            ]
        ],
        "headings" => [
            "heading1" => 'Latpanchar — Quiet Hikes & Views',
            "subheading" => 'Offbeat hamlet with simple trails and solitude'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Latpanchar Highlights',
            "activity_body_content" => 'Enjoy short hikes, mountain views and an uncrowded atmosphere — a good choice for peaceful short stays and contemplative walks. Latpanchar is also known for birdwatching zones and quiet village evenings.',
            "assistant_snippet" => 'Latpanchar: remote hamlet for solitude and short hikes.',
            "location_slider_wrap" => 'Nearby',
            "highlights_tour" => 'Highlights — Latpanchar',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Snapshot',
            "package_info_message" => 'Best for travellers seeking quiet and scenic views.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic homestays',
            "breakfast_and_dinner" => 'Breakfast included',
            "transportation" => 'Private transfers',
            "group_size" => 'Small groups',
            "language" => 'English & Hindi',
            "guide" => 'Local guide on request',
            "age_range" => 'Adults and older teens',
            "season" => 'Best Oct–Dec',
            "category" => 'Offbeat • Hiking'
        ],
        "features" => [
            "title" => 'Includes/Excludes',
            "included" => [
                "title" => 'Included',
                "items" => [
                    'Transfers',
                    'Accommodation',
                    'Breakfast'
                ]
            ],
            "excluded" => [
                "title" => 'Not Included',
                "items" => [
                    'Permits (if applicable)',
                    'Insurance',
                    'Meals not listed'
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Remote mountain panoramas and solitude.',
                'Short, easy hikes and village interactions.',
                'Birdwatching opportunities in surrounding forest edges.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Latpanchar Area',
            "image_and_names" => [
                [ 'name' => 'Latpanchar Hamlet', 'image' => '/assets/img/north-bengal/latpanchar.jpg' ]
            ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [
                    'highlight' => 'Access',
                    'description' => 'Remote roads; expect basic facilities and a true offbeat experience.'
                ],
                [
                    'highlight' => 'Best Time',
                    'description' => 'Oct–Dec offers clearer mountain views and pleasant walking weather.'
                ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [
                    'question' => 'Who should visit?',
                    'answer' => 'Travellers seeking solitude and simple rural exposures.'
                ],
                [
                    'question' => 'Is Latpanchar good for birding?',
                    'answer' => 'Yes — nearby forest patches attract many hill birds, especially in clear weather months.'
                ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Latpanchar for remote stays and short hikes away from crowds.'
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
