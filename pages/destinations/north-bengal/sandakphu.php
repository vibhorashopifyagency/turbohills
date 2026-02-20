<?php

    $pageTitle = 'Sandakphu — High Ridge Trek & Himalayan Panorama';
    $metaDescription = 'Sandakphu offers a high ridge trek with panoramic Himalayan views, rhododendron forests and peaceful alpine meadows for trekkers seeking iconic summit landscapes.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp' : '/assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Sandakphu — Trekking Ridge & Peaks',
            "slider_images" => [
                '/assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp'
            ]
        ],
        "headings" => [
            "heading1" => 'Sandakphu — Alpine Views',
            "subheading" => 'High-ridge trekking for panoramic Himalayan vistas'
        ],
        "tour_headings" => [
            "activity_content_heading" => 'Sandakphu Trek',
            "activity_body_content" => 'A classic high-altitude ridge walk offering dramatic sunrise views across multiple 8,000m peaks. Ideal for trekkers seeking quiet alpine landscapes, rhododendron blooms in spring and unforgettable ridge-line camping moments.',
            "assistant_snippet" => 'Sandakphu: multi-day ridge trekking and panoramic mountain views.',
            "location_slider_wrap" => 'Nearby Stops',
            "highlights_tour" => 'Highlights — Sandakphu',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts',
            "package_info_message" => 'Trek-friendly itineraries with local guides and gradual altitude gain.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain lodges',
            "breakfast_and_dinner" => 'Meals on trek included as specified',
            "transportation" => 'Private transfers to trek start',
            "group_size" => 'Small trekking groups',
            "language" => 'English & local guides',
            "guide" => 'Trek guide and porters as needed',
            "age_range" => 'Fit travellers 12+',
            "season" => 'Best Apr–May & Oct–Nov',
            "category" => 'Trekking • Viewpoints'
        ],
        "features" => [
            "title" => "What's Included & Not Included",
            "included" => [
                "title" => "Included",
                "items" => [
                    'Private transfers to trekhead',
                    'Trek guide and local support',
                    'Lodging on trek as per plan',
                    'Meals on trek'
                ]
            ],
            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    'Permits if applicable',
                    'Personal travel insurance',
                    'Equipment rental'
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                'Panoramic views of Kanchenjunga and nearby high peaks.',
                'Rhododendron forests and alpine meadows.',
                'Offbeat trekking routes away from crowds.',
                'Golden-hour ridge photography and cloud-ocean views.'
            ]
        ],
        "location_slider" => [
            "heading" => 'Top Stops — Sandakphu Region',
            "image_and_names" => [
                [ 'name' => 'Phalut', 'image' => '/assets/img/sandakphu/sandakphu-travel.png' ],
                [ 'name' => 'Gurdum', 'image' => '/assets/img/sandakphu/Darjeeling_Sandakpu_Main.jpg' ]
            ]
        ],
        "additional_info" => [
            "title" => 'Important Travel Information',
            "items" => [
                [
                    'highlight' => 'Fitness',
                    'description' => 'Moderate to strenuous trekking; acclimatise and travel with an experienced guide.'
                ],
                [
                    'highlight' => 'Best Season',
                    'description' => 'Apr–May for blooms and Oct–Nov for clear mountain panoramas.'
                ]
            ]
        ],
        "faq" => [
            "title" => 'Frequently Asked Questions',
            "items" => [
                [
                    'question' => 'How long is the trek?',
                    'answer' => 'Typically 3–5 days depending on route and pace.'
                ],
                [
                    'question' => 'Can beginners do Sandakphu?',
                    'answer' => 'Fit beginners can do it with proper pacing, acclimatisation and local guide support.'
                ]
            ]
        ],
        "inspiration_details" => [
            "quote" => [
                "text" => "The best views come after the simplest walks.",
                "name" => "TurboHills Team",
                "location" => "Sandakphu • North Bengal"
            ],

            "intro" => "Typical stops around Sandakphu include ridge viewpoints, trekking routes, and high-mountain photo halts.",

            "heading" => "Sample photo stops & short experiences",

            "sections" => [
                [
                    "id" => "scenic-viewpoints",
                    "title" => "1. Scenic Viewpoints",
                    "description" => "Easy-access ridge viewpoints with Himalayan panoramas.",
                    "images" => [
                        [
                            "src" => "/assets/img/sandakphu/sandakphu-1.jpg",
                            "alt" => "Viewpoint",
                            "col" => 7
                        ],
                        [
                            "src" => "/assets/img/sandakphu/sadakphu-2.jpg",
                            "alt" => "Landscape",
                            "col" => 5
                        ]
                    ]
                ],

                [
                    "id" => "culture-heritage",
                    "title" => "2. Local Culture & Trek Life",
                    "description" => "Trail culture, local shelters, and mountain route stories.",
                    "image" => [
                        "src" => "/assets/img/sandakphu/sandakphu-3.jpg",
                        "alt" => "Trek culture"
                    ],
                    "tags" => [
                        "title" => "Popular around Sandakphu",
                        "items" => [
                            ["label" => "Viewpoints", "url" => "#scenic-viewpoints"],
                            ["label" => "Trail Walks", "url" => "#culture-heritage"],
                            ["label" => "Nature Photography", "url" => "#short-scenic-drives"],
                            [
                                "label" => "Sandakphu",
                                "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')
                            ]
                        ]
                    ]
                ],

                [
                    "id" => "short-scenic-drives",
                    "title" => "3. Short Scenic Drives",
                    "description" => "Drive-and-walk combinations for nearby ridge and valley points.",
                    "image" => [
                        "src" => "/assets/img/sandakphu/sandakphu-travel.png",
                        "alt" => "Scenic drive"
                    ]
                ]

            ],

            "page_tags" => [
                [
                    "label" => "Sandakphu",
                    "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')
                ],
                [
                    "label" => "North Bengal",
                    "url" => "/pages/destinations/north-bengal/north-bengal-experiences.php"
                ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book guided Sandakphu treks with AI-curated pace and local support.'
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
