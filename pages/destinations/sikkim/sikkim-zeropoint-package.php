<?php

    // Variables
    $pageTitle = 'Contact Turbo Hills — Book Sikkim tours from Bagdogra';
    $metaDescription = 'Contact Turbo Hills for Sikkim tours starting at Bagdogra. Fast quotes, custom itineraries and airport transfers.';
    
    // Breadcrumb variablles
    $slider_heading = 'Sikkim Zero-Point Package';
    $slider_images = [
        'assets/img/innerpages/breadcrumb-bg3.jpg',
        'assets/img/innerpages/breadcrumb-bg4.jpg',
        'assets/img/innerpages/experience-breadcrumb-bg.jpg'
    ];
    // heading of our tours
    $activity_content_heading = ' Ride Safey';
    $location_slider_wrap = 'Touring Places';
    $highlights_tour = 'Highlights of our Tour';
    $Additional_Info = 'Additional Info of our Tour';
    $package_info_heading = 'Overview Packages';
    $package_info_message =  'Paris, the City of Lights, and the surrounding Île-de-France region offer a perfect blend of history, culture, luxury, and romance. Whether you’re exploring iconic landmarks, indulging in French cuisine, or enjoying the charming countryside, this region has something for every traveler.';

    
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