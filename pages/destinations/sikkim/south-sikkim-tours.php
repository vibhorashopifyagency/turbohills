<?php

    // Variables
    $pageTitle = 'South Sikkim Tours — Namchi, Ravangla & Tea Gardens';
    $metaDescription = 'South Sikkim tours cover Namchi, Ravangla and Temi Tea Garden — cultural trails, panoramic viewpoints and easy treks. Day trips and short itineraries available.';
    // OpenGraph / Social
    $ogTitle = $pageTitle;
    $ogDescription = $metaDescription;
    $ogImage = '/assets/img/sikkim/south-sikkim-hero.jpg';

    $data = [
        "slider_details" => [
            "slider_heading" => 'South Sikkim — Cultural Trails & Tea Gardens',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg2.jpg',
                'assets/img/innerpages/breadcrumb-bg3.jpg'
            ]
        ],
        "headings" => [
            "heading1" => "South Sikkim — Namchi, Ravangla & Temi",
            "subheading" => "Easy-access cultural routes, viewpoints and tea-garden walks"
        ],
        "tour_headings" => [
            "activity_content_heading" => 'South Sikkim Highlights',
            "activity_body_content" => 'South Sikkim offers gentle walks, panoramic viewpoints and cultural experiences — ideal for relaxing short trips.',
            "assistant_snippet" => 'Explore Namchi, Ravangla and Temi Tea Garden on short South Sikkim tours with local guides.',
            "location_slider_wrap" => 'Top Stops — South Sikkim',
            "highlights_tour" => 'Highlights — South Sikkim',
            "Additional_Info" => 'Travel Notes',
            "package_info_heading" => 'Quick Facts & Package Snapshot',
            "package_info_message" => 'South Sikkim is lower altitude and accessible year-round; ideal for cultural short-breaks.'
        ],
        "package_info_list" => [
            "rating_stars" => 'Comfortable stays and cultural visits',
            "breakfast_and_dinner" => 'Meals as per itinerary',
            "transportation" => 'Private transfers or shared vehicles',
            "group_size" => 'Small groups or private departures',
            "language" => 'English & Hindi guides available',
            "guide" => 'Local guides for cultural walks',
            "age_range" => 'Family friendly',
            "season" => 'Year-round; monsoon can be wet',
            "category" => 'Culture • Tea Gardens • Short Trips'
        ],
        "features" => [
            "included" => [
                "title" => "Included",
                "items" => [
                    "Transfers and local guide",
                    "Accommodation as listed",
                    "Entrance fees where specified"
                ]
            ],
            "excluded" => [
                "title" => "Not Included",
                "items" => [
                    "Travel to starting point",
                    "Personal expenses"
                ]
            ]
        ],
        "tour_highlights" => [
            "items" => [
                "Scenic viewpoints at Ravangla.",
                "Temi Tea Garden walks and tea tastings.",
                "Cultural visits in Namchi and local markets."
            ]
        ],
        "location_slider" => [
            "heading" => 'South Sikkim Stops',
            "image_and_names" => [
                ['name' => 'Namchi', 'image' => '/assets/img/sikkim/namchi.jpg'],
                ['name' => 'Ravangla', 'image' => '/assets/img/sikkim/ravangla.jpg'],
                ['name' => 'Temi Tea Garden', 'image' => '/assets/img/sikkim/temi-tea-garden.jpg']
            ]
        ],
        "additional_info" => [
            "title" => "Important Travel Information",
            "items" => [
                ["highlight" => "Weather", "description" => "Lower altitude; pleasant most of the year."],
                ["highlight" => "Transport", "description" => "Well-connected by road from Gangtok and Siliguri."]
            ]
        ],
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                ["question" => "Is South Sikkim suitable for families?","answer" => "Yes — gentle walks and lower altitudes make it family-friendly."],
                ["question" => "Can I combine South and North Sikkim?","answer" => "Yes, but plan for travel time between regions and allow acclimatisation for North Sikkim." ]
            ]
        ],
        "single_feature_list" => ["single_feature" => "Short cultural itineraries around Namchi, Ravangla and Temi." ]
    ];

    include __DIR__ . '/../../../includes/header_constants.php';

    // Build JSON-LD
    $ld_graph = [];
    $page_url = '';
    if (isset($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'https');
        $page_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . ($_SERVER['REQUEST_URI'] ?? '') ;
    }
    $ld_graph[] = ["@type"=>"WebPage","name"=>$pageTitle,"description"=>$metaDescription,"url"=>$page_url];
    if (!empty($data['faq']['items'])) {
        $faq_entities = [];
        foreach ($data['faq']['items'] as $fq) {
            if (!empty($fq['question']) && !empty($fq['answer'])) {
                $faq_entities[] = ["@type"=>"Question","name"=>$fq['question'],"acceptedAnswer"=>["@type"=>"Answer","text"=>$fq['answer']]];
            }
        }
        if (!empty($faq_entities)) $ld_graph[] = ["@type"=>"FAQPage","mainEntity"=>$faq_entities];
    }
    $first_image = $data['location_slider']['image_and_names'][0]['image'] ?? $ogImage;
    $first_image_url = (defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($first_image, '/') : $first_image);
    $ld_graph[] = ["@type"=>"TouristTrip","name"=>$pageTitle,"description"=>$metaDescription,"image"=>$first_image_url];
    $ld = ["@context"=>"https://schema.org","@graph"=>$ld_graph];
    echo '<script type="application/ld+json">' . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';

    include BASE_PATH . '/includes/sections/breadcrumb-section.php';
    include BASE_PATH . '/includes/sections/enquiry-modal.php';
    include BASE_PATH . '/includes/sections/package-details-section.php';
    require_once BASE_PATH . '/includes/footer.php';

?>
