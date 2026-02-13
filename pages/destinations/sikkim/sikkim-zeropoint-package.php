<?php

    // Variables
    $pageTitle = 'Contact Turbo Hills — Book Sikkim tours from Bagdogra';
    $metaDescription = 'Contact Turbo Hills for Sikkim tours starting at Bagdogra. Fast quotes, custom itineraries and airport transfers.';
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Sikkim Zero-Point Package',
            "slider_images" => [
                'assets/img/innerpages/breadcrumb-bg3.jpg',
                'assets/img/innerpages/breadcrumb-bg4.jpg',
                'assets/img/innerpages/experience-breadcrumb-bg.jpg',
            ]
        ],
        // Page Headings and Sub-Headings
        "headings" => [
            "heading1" => "This is Heading",
            "subheading" => "This is Sub-Heading",
        ],
        // heading of our tours
        "tour_headings" => [
            "activity_content_heading" => 'Ride Safey',
            "activity_body_content" => 'Experience the breathtaking beauty of the ocean like never before! With <span>35% OFF</span> on scuba diving experiences across all destinations',
            "location_slider_wrap" => 'Touring Places',
            "highlights_tour" => 'Highlights of our Tour',
            "Additional_Info" => 'Additional Info of our Tour',
            "package_info_heading" => 'Overview Packages',
            "package_info_message" => 'Paris, the City of Lights, and the surrounding Île-de-France region offer a perfect blend of history, culture, luxury, and romance. Whether you€re exploring iconic landmarks, indulging in French cuisine, or enjoying the charming countryside, this region has something for every traveler.'
        ],
        "package_info_list" => [
            "rating_stars" => '55 star hotel',
            "breakfast_and_dinner" => 'Breakfast Lunch Dinner',
            "transportation" => 'taxi and bus',
            "group_size" => '20-25',
            "language" => 'english hindi',
            "guide" => 'local guide',
            "age_range" => '18 to 60',
            "season" => 'winter summer',
            "category" => 'Adventure',
        ],
        // Features List
        "features" => [
            "title" => "What's Included & Excluded",

            "included" => [
                "title" => "Included in the Package",
                "items" => [
                    "Accommodation (Hotel, Resort, Villa, Camping, etc.)",
                    "Meals (Breakfast, Lunch, Dinner - specify type)",
                    "Guided Tours & Excursions",
                    "Entry Tickets to Attractions",
                    "Adventure Activities & Travel Insurance"
                ]
            ],
            "excluded" => [
                "title" => "Not Included in the Package",
                "items" => [
                    "Visa Fees & Processing",
                    "Personal Expenses (Shopping, Souvenirs, Tips, etc.)",
                    "Optional Excursions & Activities",
                    "Meals Not Mentioned in Itinerary"
                ]
            ]
        ],
        // Tour Highlights
        "tour_highlights" => [
            "items" => [
                "Zero Point - Experience snow covered Himalayan landscape.",
                "Yumthang Valley - Valley of Flowers of Sikkim.",
                "Gurudongmar Lake - One of the highest lakes in the world.",
                "Lachen & Lachung - Traditional mountain villages stay.",
                "Scenic mountain drive with waterfalls & rivers.",
                "Local Sikkimese food & culture experience."
            ]
        ],
        // Locations Slider
        "location_slider" => [
            "heading" => 'Location Slider',
            "image_and_names" => [
                ['name' => 'Lachung', 'image' => '/assets/img/sikkim/lachung.jpg'],
                ['name' => 'Yumthang Valley', 'image' => '/assets/img/sikkim/Yumthang-valley-Sikkim.jpg'],
                ['name' => 'Yume Samdong (Zero Point)', 'image' => '/assets/img/sikkim/Yume-Samdong.jpg'],
                ['name' => 'Gurudongmar Lake', 'image' => '/assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg'],
                ['name' => 'Lachen', 'image' => '/assets/img/sikkim/Lachen-Sikkim-768x512.jpg']
            ]
        ],
        // Additional Info
        "additional_info" => [
            "title" => "Additional Information",
            "items" => [
                [
                    "highlight" => "Free Cancellation",
                    "description" => "Some tours offer free cancellation up to 24-48 hours before departure."
                ],
                [
                    "highlight" => "Health & Travel Requirements",
                    "description" => "COVID-19 regulations, vaccinations, or travel restrictions may apply."
                ],
                [
                    "highlight" => "Minimum Participants",
                    "description" => "Tour requires minimum 4 travelers to operate."
                ]
            ]
        ],
        // FAQs
        "faq" => [
            "title" => "Frequently Asked Questions",
            "items" => [
                [
                    "question" => "What are the must-visit places in Sikkim?",
                    "answer" => "Top attractions include Tsomgo Lake, Nathula Pass, Baba Mandir, Yumthang Valley and Gangtok MG Marg."
                ],
                [
                    "question" => "Are entry permits included?",
                    "answer" => "Yes, all required local permits are arranged by us. Only ID proof is required from traveler."
                ],
                [
                    "question" => "What hotels are provided?",
                    "answer" => "We provide 3★ / 4★ category hotels depending on package selected."
                ],
                [
                    "question" => "Is the booking refundable?",
                    "answer" => "Yes, free cancellation available before 7 days of travel date."
                ],
                [
                    "question" => "What documents should I carry?",
                    "answer" => "Carry original Aadhaar/Passport and 2 passport photos for permits."
                ]
            ]
        ],

        // Single Feature List
        "single_feature_list" =>[
            "single_feature" => "single_feature"
        ] 
    ];
    

    // $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    // echo $jsonData;

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

    
    // Header and constants
    include __DIR__ . '/../../../includes/header_constants.php';

    // Breadcrumbs
    // echo "Base Path - " . BASE_PATH . "<br />";
    // echo "__DIR__ - " . __DIR__;
    include BASE_PATH . '/includes/sections/breadcrumb-section.php';
    // include BASE_PATH . '/includes/sections/packages-booking-modal.php';
    include BASE_PATH . '/includes/sections/enquiry-modal.php';
    include BASE_PATH . '/includes/sections/package-details-section.php';
    // include BASE_PATH . '/includes/sections/demo-package-details-section.php';
    require_once BASE_PATH . '/includes/footer.php';

?>