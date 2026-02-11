<?php

    // Variables
    $pageTitle = 'Contact Turbo Hills — Book Sikkim tours from Bagdogra';
    $metaDescription = 'Contact Turbo Hills for Sikkim tours starting at Bagdogra. Fast quotes, custom itineraries and airport transfers.';
    
    // Breadcrumb variablles
    
    
    // All data Group
    $data = [
        // Slider Details and images
        "slider_details" => [
            "slider_heading" =>  'Sikkim Zero-Point Package',
            "slider_images" => [
                "image_1" => 'assets/img/innerpages/breadcrumb-bg3.jpg',
                "image_2" => 'assets/img/innerpages/breadcrumb-bg4.jpg',
                "image_3" => 'assets/img/innerpages/experience-breadcrumb-bg.jpg',
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
        "page_details" => [
            "pageTitle" => 'Contact Turbo Hills — Book Sikkim tours from Bagdogra',
            "metaDescription" => 'Contact Turbo Hills for Sikkim tours starting at Bagdogra. Fast quotes, custom itineraries and airport transfers.',
        ],
        "feature_list" =>   [
            "feature_list_area" => 'package_fiture',
            "including_features" => 'including_features',
            "single_feature_list" => 'excucive featuer',
        ],
        "location_slider" => [
            "location_slider" => 'location_slider',
        ],
        "additional_info" => [
            "additional_info_wrap" => 'additional information'
        ],
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