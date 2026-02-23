<?php

    $pageTitle = 'Phalut — Remote Summit & Alpine Solitude';
    $metaDescription = 'Phalut is a remote summit beyond Sandakphu offering alpine vistas, quiet treks and offbeat wilderness for travellers seeking solitude and wide mountain panoramas.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/phalut/Sandakphu.jpg' : '/assets/img/phalut/Sandakphu.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Phalut — Offbeat Summit Experience',
            "slider_images" => [ '/assets/img/phalut/Sandakphu.jpg' ]
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
                [ 'name' => 'Phalut', 'image' => '/assets/img/phalut/jammu.jpg' ],
                [ 'name' => 'Phalut', 'image' => '/assets/img/phalut/OIP.webp' ],
                [ 'name' => 'Phalut', 'image' => '/assets/img/phalut/sandakphu_980.jpg' ]
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
        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Phalut • North Bengal"],
            "intro" => "Typical stops around Phalut include high-ridge viewpoints, trekking pauses, and mountain camp moments.",
            "heading" => "Sample photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "Easy-access ridge viewpoints with wide Himalayan panoramas.", "images" => [["src" => "/assets/img/phalut/Phalut.webp", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/phalut/Phalut4.jpg", "alt" => "Landscape", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Local Culture & Trek Life", "description" => "Trail culture, mountain shelters, and local route stories.", "image" => ["src" => "/assets/img/phalut/_DSC0758.jpg", "alt" => "Trek culture"], "tags" => ["title" => "Popular around Phalut", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Trail Walks", "url" => "#culture-heritage"], ["label" => "Nature Photography", "url" => "#short-scenic-drives"], ["label" => "Phalut", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Drive-and-walk combinations for nearby ridge and valley views.", "image" => ["src" => "/assets/img/phalut/OIP (1).webp", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Phalut", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "North Bengal", "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"]]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Phalut treks with AI-curated pacing and experienced local guides.'
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
