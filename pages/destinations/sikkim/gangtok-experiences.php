<?php

    // Variables
    $pageTitle = 'Gangtok Experiences — East Sikkim Tours from Bagdogra';
    $metaDescription = 'Book Gangtok tour packages from Bagdogra or NJP with Turbo Hills. Explore MG Marg, Rumtek Monastery, Tsomgo Lake and Nathula day trips with private cab transfer, permit assistance, local guides, hotel booking and custom Sikkim itinerary planning.';
    // OpenGraph / Social (header may use these variables)
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . 'assets/img/gangtok-experiences/gangtok-bnnr.jpg' : 'assets/img/gangtok-experiences/gangtok-bnnr.jpg');
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Gangtok Experiences — City & Cultural Tours',
            "slider_images" => [
                'assets/img/gangtok-experiences/gangtok-bnnr.jpg',
                'assets/img/gangtok-experiences/gangtok-local-sightseeing.jpg',
                'assets/img/gangtok-experiences/sikkim-gangtok.webp',
            ]
        ],
        // Page Headings and Sub-Headings (SEO focused)
        "headings" => [
            "heading1" => "Gangtok — Monasteries, Viewpoints & Culture",
            "subheading" => "City walks, Tibetan monasteries and panoramic Himalayan views", 
        ],
        // tour headings and on-page SEO copy
        "tour_headings" => [
            "activity_content_heading" => 'Gangtok Highlights — Culture & Views',
            "activity_body_content" => 'Gangtok is the best base for East Sikkim sightseeing and one of the most searched destinations for travellers planning a Sikkim tour package from Bagdogra. The city blends Buddhist heritage, modern cafes, local markets and panoramic Himalayan viewpoints into an easy 2–4 day itinerary. Popular experiences include MG Marg evening walks, Rumtek and Enchey Monastery visits, Tashi View Point sunrise, Hanuman Tok, and full-day circuits to Tsomgo Lake, Baba Mandir and Nathula Pass (subject to permits). Our Gangtok packages are designed for comfort and clarity: private cab pickup from Bagdogra Airport/NJP, hotel options for couples and families, permit handling for restricted routes, and local guide support for culture-focused travelers. If you are searching for Gangtok trip cost, best time to visit Gangtok, or a custom Gangtok itinerary with North Sikkim add-on, this plan gives a practical, answer-first route with flexible pacing.',
            "assistant_snippet" => 'Best Gangtok itinerary from Bagdogra: MG Marg, Rumtek, Tsomgo Lake and Nathula with private cab, permit assistance and customizable hotel packages.',
            "location_slider_wrap" => 'Top Stops Around Gangtok',
            "highlights_tour" => 'Highlights — Gangtok & Surroundings',
            "Additional_Info" => 'Practical Travel Information',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'Gangtok city experiences include private transfers, local guide support and easy day trips to nearby attractions for a comfortable cultural stay.'
        ],
        "package_info_list" => [
            "rating_stars" => '3★ / 4★ city hotels and boutique stays',
            "breakfast_and_dinner" => 'Daily breakfast included; dinner on request',
            "transportation" => 'Private car transfers and local taxis as required',
            "group_size" => 'Private or small groups (2–12 travellers)',
            "language" => 'English, Hindi & local guides',
            "guide" => 'Local certified guide for city tours',
            "age_range" => 'Suitable for most ages',
            "season" => 'Year-round; best Oct–Dec & Mar–May',
            "category" => 'Culture • Sightseeing'
        ],
        // Features (Inclusions / Exclusions) tailored for search intent
        "features" => [
            "title" => "What's Included & Not Included",

            "included" => [
                "title" => "Included",
                "items" => [
                    "Private airport/railway pickup & drop (Bagdogra / NJP)",
                    "City transfers and sightseeing as per itinerary",
                    "Accommodation in Gangtok (as per package)",
                    "Daily breakfast",
                    "Local guide for cultural tours",
                    "Permit assistance where applicable"
                ]
            ],

            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Flight or train to Bagdogra/NJP",
                    "Personal travel insurance",
                    "Meals not mentioned and personal expenses",
                    "Optional activities"
                ]
            ]
        ],
        // Tour Highlights — answers common search queries
        "tour_highlights" => [
            "items" => [
                "Rumtek and Enchey Monasteries — Buddhist culture and rituals.",
                "MG Marg — Walk, shop and taste local cuisine.",
                "Tsomgo Lake day trip and Baba Mandir (seasonal).",
                "Hanuman Tok and Tashi Viewpoint for Himalayan panoramas."
            ]
        ],
        // Locations Slider — images and names must remain unchanged
        "location_slider" => [
            "heading" => 'Top Stops — Gangtok & Nearby',
            "image_and_names" => [
                ['name' => 'Gangtok', 'image' => '/assets/img/gangtok-experiences/Paragliding-in-Sikkim-Like.jpg'],
                ['name' => 'Rumtek Monastery', 'image' => '/assets/img/gangtok-experiences/gangtok-visit-changu-lake.jpg.imgw.1280.1280.jpg'],
                ['name' => 'Tsomgo Lake', 'image' => '/assets/img/gangtok-experiences/gangtok-ropeway.webp'],
                ['name' => 'Nathula Pass', 'image' => '/assets/img/gangtok-experiences/8th-image-1.jpg']
               
            ]
        ],
        // Additional Info — answers local-search intent
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                [
                    "highlight" => "Permits & ID",
                    "description" => "Gangtok local sightseeing usually does not need permits, but the most searched day trips from Gangtok such as Tsomgo Lake and Nathula often require approvals. Keep original government photo ID, recent photos and basic passenger details ready so permit filing is smooth and same-day travel delays are reduced."
                ],
                [
                    "highlight" => "Altitude & Health",
                    "description" => "Gangtok is at moderate hill altitude and is generally comfortable for families, couples and senior travellers. If you plan high-elevation add-ons, keep the first day light, hydrate well and add rest breaks, which directly answers common queries like is Gangtok safe for seniors and how to avoid altitude discomfort near Gangtok."
                ],
                [
                    "highlight" => "Weather & Packing",
                    "description" => "Gangtok weather shifts across morning, afternoon and evening even in peak season. Pack layers, walking shoes, sunscreen, rain protection and one warm outer layer, especially if your itinerary includes early departures and popular hill viewpoints where wind chill can feel stronger."
                ]
            ]
        ],
        // FAQs (AEO-friendly answers)
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "How far is Gangtok from Bagdogra?",
                    "answer" => "Gangtok is approximately a 4–5 hour drive from Bagdogra (Bagdogra Airport) depending on traffic and road conditions; we provide private transfers with experienced drivers."
                ],
                [
                    "question" => "Do I need permits to visit areas around Gangtok?",
                    "answer" => "Gangtok city does not require permits, but nearby attractions such as Tsomgo Lake, Nathula Pass and North Sikkim areas may need permits; we handle permit arrangements for guests."
                ],
                [
                    "question" => "What is the best time to visit Gangtok?",
                    "answer" => "The best months are March–June and September–December when skies are clear and temperatures are pleasant. Monsoon months (July–August) can bring rain and occasional landslips."
                ],
                [
                    "question" => "Is Gangtok suitable for families and seniors?",
                    "answer" => "Yes — Gangtok has easy walks, good accommodations and short excursions suitable for families and older travellers; we recommend allowing relaxed pacing for those sensitive to hills."
                ],
                [
                    "question" => "Can I do day trips to Tsomgo Lake and Nathula from Gangtok?",
                    "answer" => "Yes — Tsomgo Lake and Nathula Pass are popular day trips from Gangtok. Nathula requires permits and has restricted visiting windows; plan ahead and check permit availability."
                ],
                [
                    "question" => "What should I pack for Gangtok and nearby day trips?",
                    "answer" => "Bring layered clothing (mornings/evenings can be chilly), sunscreen, sunglasses, sturdy walking shoes, a light rain jacket and any personal medication. For high-altitude day trips include warm gloves and hats."
                ],
                [
                    "question" => "How long should I stay in Gangtok to explore nearby attractions?",
                    "answer" => "A 2–4 day stay in Gangtok is ideal for sightseeing within the city and a day-trip to Tsomgo or nearby viewpoints; combine with additional days for North or East Sikkim to see Yumthang, Lachen and Lachung."
                ]
            ]
        ],

        "inspiration_details" => [
            "quote" => ["text" => "The best views come after the simplest walks.", "name" => "TurboHills Team", "location" => "Gangtok • Sikkim"],
            "intro" => "Typical stops around Gangtok include viewpoint circuits, monastery visits, and short scenic drives.",
            "heading" => "Photo stops & short experiences",
            "sections" => [
                ["id" => "scenic-viewpoints", "title" => "1. Scenic Viewpoints", "description" => "These easy-access Gangtok viewpoints match top search intent like best places to see Kanchenjunga near Gangtok and sunrise photo points without long trekking.", "images" => [["src" => "/assets/img/gangtok-experiences/namchi-1.webp", "alt" => "Viewpoint", "col" => 7], ["src" => "/assets/img/gangtok-experiences/gangtok5.jpg", "alt" => "Mountains", "col" => 5]]],
                ["id" => "culture-heritage", "title" => "2. Culture & Heritage", "description" => "Visit monasteries, MG Marg markets and local neighborhoods to cover frequently asked travel questions on Gangtok culture, shopping and monastery etiquette in one compact route.", "image" => ["src" => "/assets/img/gangtok-experiences/gangtok.avif", "alt" => "Culture"], "tags" => ["title" => "Popular around Gangtok", "items" => [["label" => "Viewpoints", "url" => "#scenic-viewpoints"], ["label" => "Monastery Visits", "url" => "#culture-heritage"], ["label" => "Local Markets", "url" => "#culture-heritage"], ["label" => "Gangtok", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')]]]],
                ["id" => "short-scenic-drives", "title" => "3. Short Scenic Drives", "description" => "Comfortable private-cab circuits from Gangtok connect lakes, passes and valley viewpoints, ideal for families looking for low-walk itineraries and flexible weather-based planning.", "image" => ["src" => "/assets/img/gangtok-experiences/caption.jpg", "alt" => "Scenic drive"]]
            ],
            "page_tags" => [["label" => "Gangtok", "url" => (strtok($_SERVER['REQUEST_URI'] ?? '', '?') ?: '#')], ["label" => "Sikkim", "url" => "/pages/destinations/sikkim/sikkim-experiences.php"]]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "Book your Gangtok city experience — local guides and private transfers included."
        ] 
    ];
    

    // Header and constants
    include __DIR__ . '/../../../includes/header_constants.php';

    // Output structured data (JSON-LD) for AEO: WebPage, FAQPage, TouristDestination and TouristTrip
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
            "name" => "Sikkim, India"
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
                "name" => "Sikkim",
                "item" => (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/pages/destinations/sikkim/sikkim-experiences.php' : '/pages/destinations/sikkim/sikkim-experiences.php')
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
