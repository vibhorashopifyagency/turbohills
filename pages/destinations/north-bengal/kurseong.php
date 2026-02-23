<?php

    $pageTitle = 'Kurseong — Quiet Tea Town & Forest Walks';
    $metaDescription = 'Kurseong offers colonial charm, tea gardens and forested walks — a calm stop between plains and higher Himalayan ridges for slow travel.';
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/assets/img/kurseong/kurseong-banner-2.jpg' : '/assets/img/kurseong/kurseong-banner-2.jpg');

    $data = [
        "slider_details" => [
            "slider_heading" => 'Kurseong — Tea Town Tranquillity',
            "slider_images" => [ '/assets/img/kurseong/kurseong-banner-2.jpg' ]
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
            "image_and_names" => [ [ 'name' => 'Elysia Park', 'image' => '/assets/img/kurseong/kursion-tempal.avif' ] ]
        ],
        "additional_info" => [
            "title" => 'Travel Notes',
            "items" => [
                [ 'highlight' => 'Pace', 'description' => 'Kurseong is ideal for slow mornings and short strolls, making it a frequently searched option for peaceful hill stays near Darjeeling without heavy crowds.' ],
                [ 'highlight' => 'Ideal Stay', 'description' => 'A 1–2 night Kurseong stay works well for tea-estate visits, forest walks, heritage corners and relaxed mountain downtime with minimal travel fatigue.' ]
            ]
        ],
        "faq" => [
            "title" => 'FAQ',
            "items" => [
                [ 'question' => 'How long to stay?', 'answer' => '1–2 days are enough for a relaxed visit.' ],
                [ 'question' => 'Is Kurseong crowded?', 'answer' => 'Usually less crowded than larger hill towns, making it ideal for peaceful stays.' ]
            ]
        ],
        "inspiration_details" => [
            "quote" => [
                "text" => "The best views come after the simplest walks.",
                "name" => "TurboHills Team",
                "location" => "Kurseong • North Bengal"
            ],

            "intro" => "Typical stops around Kurseong include tea slopes, forest roads, and calm town viewpoints.",
            "heading" => "Sample photo stops & short experiences",

            "sections" => [

                [
                    "id" => "scenic-viewpoints",
                    "title" => "1. Scenic Viewpoints",
                    "description" => "These easy-access Kurseong viewpoints are suitable for travellers searching valley panoramas, tea-garden landscapes and short photo stops without strenuous hiking.",
                    "images" => [
                        [
                            "src" => "/assets/img/kurseong/kursion-tempal.avif",
                            "alt" => "Viewpoint",
                            "col" => 7
                        ],
                        [
                            "src" => "/assets/img/kurseong/dow hill.jpeg",
                            "alt" => "Landscape",
                            "col" => 5
                        ]
                    ]
                ],
                [
                    "id" => "culture-heritage",
                    "title" => "2. Local Culture & Heritage",
                    "description" => "Town walks, monastery corners and local tea-culture stories answer common AEO queries on what to do in Kurseong apart from scenic viewpoints.",
                    "image" => [
                        "src" => "/assets/img/innerpages/inspiration-details4.jpg",
                        "alt" => "Heritage"
                    ],
                    "tags" => [
                        "title" => "Popular around Kurseong",
                        "items" => [
                            ["label" => "Viewpoints", "url" => "#scenic-viewpoints"],
                            ["label" => "Heritage Walks", "url" => "#culture-heritage"],
                            ["label" => "Tea Gardens", "url" => "#short-scenic-drives"],
                            [
                                "label" => "Kurseong",
                                "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')
                            ]
                        ]
                    ]
                ],
                [
                    "id" => "short-scenic-drives",
                    "title" => "3. Short Scenic Drives",
                    "description" => "Comfortable private drives connect nearby viewpoints and hill villages, ideal for family-friendly Kurseong itineraries with flexible pacing.",
                    "image" => [
                        "src" => "/assets/img/innerpages/inspiration-details5.jpg",
                        "alt" => "Scenic drive"
                    ]
                ]
            ],

            "page_tags" => [
                [
                    "label" => "Kurseong",
                    "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')
                ],
                [
                    "label" => "North Bengal",
                    "url" => "/pages/destinations/kurseong/kurseong-experiences.php"
                ]
            ]
        ],
        "single_feature_list" => [
            "single_feature" => 'Book Kurseong stays with AI-curated local walks and tea experiences.'
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
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/kurseong/kurseong-experiences.php' : '/pages/destinations/kurseong/kurseong-experiences.php')
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
