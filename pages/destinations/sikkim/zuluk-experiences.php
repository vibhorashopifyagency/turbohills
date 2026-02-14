<?php

    // Variables
    $pageTitle = 'Zuluk Experiences — East Sikkim Offbeat Drives';
    $metaDescription = 'Drive the historic Old Silk Route via Zuluk for dramatic mountain roads, zig-zag passes and sunrise views. Private transfers and local guides available.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/lachung.jpg';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Zuluk Experiences — Old Silk Route & Scenic Drives',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Zuluk — Old Silk Route & Sunrise Viewpoints",
            "subheading" => "High-mountain roads, dramatic viewpoints and offbeat exploration", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Zuluk Highlights — Scenic Mountain Drives',
            "activity_body_content" => 'Zuluk on the Old Silk Route offers dramatic switchback roads, sunrise viewpoints and offbeat mountain landscapes — ideal for adventurous road-trippers.',
            "assistant_snippet" => 'Drive Zuluk on the Old Silk Route — spectacular sunrise viewpoints and historic mountain roads.',
            "location_slider_wrap" => 'Top Stops Around Zuluk',
            "highlights_tour" => 'Highlights — Zuluk & Silk Route',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Zuluk trips involve long scenic drives; private transfers, experienced drivers and flexible stopovers are recommended.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Basic mountain stays and homestays',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Robust private vehicle/SUV recommended',
            "group_size" => 'Small groups or private charters',
            "language" => 'English, Hindi & local drivers',
            "guide" => 'Local driver-guides with route experience',
            "age_range" => 'Suitable for adventurous travellers',
            "season" => 'Best: Apr–Jun & Sep–Nov; winter roads may close',
            "category" => 'Road Trip • Offbeat • Photography'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private transfers and experienced driver",
                    "Accommodation as per itinerary",
                    "Meals as listed",
                    "Local guide where required"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal insurance",
                    "Fuel surcharges for long drives"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Zuluk sunrise viewpoints and serpentine roads.",
                "Historic Old Silk Route and offbeat mountain vistas.",
                "Photographic stops and remote village visits."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Zuluk & Silk Route',
            "image_and_names" => [
                ['name' => 'Zuluk', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Old Silk Route', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Jorepokhri', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Rangpo', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Gangtok', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Road Conditions",
                    "description" => "Zuluk involves high-altitude roads; seasonal conditions can affect access."
                ],
                [
                    "highlight" => "Vehicle",
                    "description" => "A robust SUV or local vehicle with experienced driver is recommended."
                ],
                [
                    "highlight" => "Weather",
                    "description" => "Carry warm layers and sun protection; mornings can be cold."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "Is Zuluk suitable for day trips?",
                    "answer" => "Zuluk is best experienced as part of a multi-day road trip due to travel times and remote location."
                ],
                [
                    "question" => "When is best to visit Zuluk?",
                    "answer" => "Spring and autumn months offer the most reliable road conditions and clear vistas."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Drive the Old Silk Route — private transfers and experienced drivers available."
        ] 
    ];
    

    // Header and constants
    include __DIR__ . '/../../../includes/header_constants.php';

    // Output structured data (JSON-LD) for AEO: WebPage, FAQPage and TouristTrip
    $ld_graph = [];
    $page_url = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . ($_SERVER['REQUEST_URI'] ?? '') ;
    }

    $ld_graph[] = [
        "@type" => "WebPage",
        "name" => $pageTitle,
        "description" => $metaDescription,
        "url" => $page_url
    ];

    // FAQ items
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

    // TouristTrip entry
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
