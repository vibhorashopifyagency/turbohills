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
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Latpanchar • North Bengal"],
            "intro" => "Typical stops around Latpanchar include birding points, forest-edge roads, and short viewpoint halts.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access viewpoints with valley and forest panoramas.", "images" => [["src" => "/assets/img/innerpages/inspiration-details2.jpg", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/innerpages/inspiration-details3.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Village Life", "description" => "Birding culture, community interactions, and local food stops.", "image" => ["src" => "/assets/img/innerpages/inspiration-details4.jpg", "alt" => "Village life"], "tags" => ["title" => "Popular around Latpanchar", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Village Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Latpanchar", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable drives to nearby ridges, tea pockets, and forest bends.", "image" => ["src" => "/assets/img/innerpages/inspiration-details5.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Latpanchar", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Latpanchar for remote stays and short hikes away from crowds.'
        ]
    ];

    include __DIR__ . '/../../../includes/header_constants.php';

    $ld_graph = [];
    $page_url = '';
    $request_path = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $request_path = strtok(($_SERVER['REQUEST_URI'] ?? ''), '?');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $request_path;
    }

    $canonical_url = (defined('BASE_URL') && !empty($request_path)) ? rtrim(BASE_URL, '/') . $request_path : $page_url;
    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);

    $destination_name = $data['headings']['heading1'] ?? $pageTitle;
    $destination_name_parts = preg_split('/\s+[—-]\s+/', (string) $destination_name);
    $destination_name = trim((string) ($destination_name_parts[0] ?? $destination_name));
    if ($destination_name === '') {
        $destination_name = $pageTitle;
    }

    $org_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#organization';
    $website_id = (defined('BASE_URL') ? rtrim(BASE_URL, '/') : '') . '#website';
    $page_id = ($canonical_url ?: $page_url) . '#webpage';
    $destination_id = ($canonical_url ?: $page_url) . '#destination';
    $faq_id = ($canonical_url ?: $page_url) . '#faq';

    $ld_graph[] = [
        "@type" => "Organization",
        "@id" => $org_id,
        "name" => "Turbo Hills",
        "url" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') : "https://turbohills.com")
    ];

    $ld_graph[] = [
        "@type" => "WebSite",
        "@id" => $website_id,
        "name" => "Turbo Hills",
        "url" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') : "https://turbohills.com"),
        "publisher" => ["@id" => $org_id]
    ];

    $ld_graph[] = [
        "@type" => "TouristDestination",
        "@id" => $destination_id,
        "name" => $destination_name,
        "description" => $metaDescription,
        "url" => ($canonical_url ?: $page_url),
        "image" => $first_image_url,
        "containedInPlace" => [
            "@type" => "Place",
            "name" => "North Bengal, India"
        ]
    ];

    $ld_graph[] = [
        "@type" => "BreadcrumbList",
        "@id" => ($canonical_url ?: $page_url) . '#breadcrumb',
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' : '/')
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => "North Bengal",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/north-bengal/north-bengal-experiences.php' : '/pages/destinations/north-bengal/north-bengal-experiences.php')
            ],
            [
                "@type" => "ListItem",
                "position" => 3,
                "name" => $pageTitle,
                "item" => ($canonical_url ?: $page_url)
            ]
        ]
    ];

    $ld_graph[] = [
        "@type" => "WebPage",
        "@id" => $page_id,
        "name" => $pageTitle,
        "description" => $metaDescription,
        "url" => ($canonical_url ?: $page_url),
        "publisher" => ["@id" => $org_id],
        "about" => ["@id" => $destination_id],
        "isPartOf" => ["@id" => $website_id]
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
            foreach ($ld_graph as $idx => $node) {
                if (!empty($node['@type']) && $node['@type'] === 'WebPage' && !empty($node['@id']) && $node['@id'] === $page_id) {
                    $ld_graph[$idx]['mainEntity'] = $faq_entities;
                    break;
                }
            }
            $ld_graph[] = [
                "@type" => "FAQPage",
                "@id" => $faq_id,
                "mainEntity" => $faq_entities
            ];
        }
    }

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
