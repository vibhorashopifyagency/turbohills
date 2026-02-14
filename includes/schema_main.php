<!-- Site-wide JSON-LD: Organization + WebSite -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TravelAgency",
    "@id": "<?= $siteDomain; ?>#localbusiness",
    "name": "Turbo Hills",
    "url": "<?= $siteDomain; ?>",
    "logo": "<?= $siteDomain; ?>/<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png",
    "image": "<?= $siteDomain; ?>/<?= BASE_URL ?>/assets/img/Turbo-Hills-Logo.png",
    "description": "Turbo Hills is a trusted travel agency in Bagdogra providing Sikkim and North Bengal tour packages, cab services with permits, and customized itineraries for Indian and international travelers.",
    "telephone": "<?= $phone_number; ?>",
    "priceRange": "₹₹",

    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Bagdogra",
        "addressRegion": "West Bengal",
        "postalCode": "734014",
        "addressCountry": "IN"
    },

    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 26.6997,
        "longitude": 88.3286
    },

    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
        "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
        ],
        "opens": "09:00",
        "closes": "22:00"
    },

    "areaServed": [
        "Sikkim",
        "North Bengal",
        "Darjeeling",
        "Gangtok",
        "Kalimpong",
        "Siliguri",
        "Bagdogra",
        "Dooars",
        "Mirik",
        "Gopaldhara",
        "Jaldapara",
        "Lataguri"
        "Sandakphu",
        "Yuksom",
        "Lachung",
        "Lachen",
        "Pelling",
        "Yumthang Valley",
        "Nathula Pass",
        "Gurudongmar Lake",
        "Zero Point",
        "Nathula Pass",
        "Mangan",
        "Ravangla",
        "Namchi",
        "Suntalekhola",
        "Jorepokhri",
        "Kalijhora",
        "Sittong",
        "West Sikkim",
        "East Sikkim",
        "North Sikkim",
        "South Sikkim"
    ],

    "sameAs": [
        "https://www.facebook.com/turbohills",
        "https://www.instagram.com/turbohills",
        "https://www.tripadvisor.com/"
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "@id": "<?= $siteDomain; ?>#website",
    "url": "<?= $siteDomain; ?>",
    "name": "Turbo Hills - Sikkim & North Bengal Tours",
    "publisher": {
        "@id": "<?= $siteDomain; ?>#localbusiness"
    },
    "potentialAction": {
        "@type": "SearchAction",
        "target": "<?= $siteDomain; ?>/?s={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristAttraction",
    "@id": "<?= $siteDomain; ?>#bagdogra-airport-landing",
    "name": "Bagdogra Airport Tours & Transfers by Turbo Hills",
    "description": "Turbo Hills provides Sikkim and North Bengal tour packages with airport pickup from Bagdogra Airport (IXB). Expert drivers, permits, and seamless mountain travel.",
    "url": "<?= $siteDomain; ?>/bagdogra-airport-tours/",
    "isAccessibleForFree": false,

    "touristType": [
        "Domestic Tourists",
        "International Tourists",
        "Honeymoon Travelers",
        "Family Travelers",
        "Adventure Travelers",
        "Solo Travelers",
        "Group Travelers",
        "Senior Citizens",
        "Backpackers",
        "Nature Lovers",
        "Photography Enthusiasts",
        "Cultural Enthusiasts",
        "Wildlife Enthusiasts",
        "Eco-tourists",
        "Luxury Travelers",
        "Budget Travelers",
        "Religious Tourists",
        "Wellness Tourists",
        "Food Enthusiasts",
        "History Buffs",
        "Trekking Enthusiasts",
        "Bird Watchers",
        "Festival Goers",
        "Road Trippers",
        "Offbeat Travelers",
        "Weekend Getaway Travelers",
        "Corporate Travelers",
        "Educational Tourists"
    ],

    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 26.6812,
        "longitude": 88.3286
    },

    "location": {
        "@type": "Place",
        "name": "Bagdogra Airport",
        "sameAs": "https://en.wikipedia.org/wiki/Bagdogra_Airport",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bagdogra",
            "addressRegion": "West Bengal",
            "postalCode": "734014",
            "addressCountry": "IN"
        }
    },

    "provider": {
        "@type": ["LocalBusiness", "TravelAgency"],
        "@id": "<?= $siteDomain; ?>#localbusiness"
    },

    "areaServed": [
        {
            "@type": "Place",
            "name": "Sikkim"
        },
        {
            "@type": "Place",
            "name": "North Bengal"
        },
        {
            "@type": "Place",
            "name": "Gangtok"
        },
        {
            "@type": "Place",
            "name": "Darjeeling"
        },
        {
            "@type": "Place",
            "name": "Gurudongmar Lake"
        },
        {
            "@type": "Place",
            "name": "Yumthang Valley"
        },
        {
            "@type": "Place",
            "name": "Nathula Pass"
        },
        {
            "@type": "Place",
            "name": "Lachung"
        },
        {
            "@type": "Place",
            "name": "Lachen"
        },
        {
            "@type": "Place",
            "name": "Pelling"
        },
        {
            "@type": "Place",
            "name": "Yuksom"
        },
        {
            "@type": "Place",
            "name": "Kalimpong"
        },
        {
            "@type": "Place",
            "name": "Siliguri"
        },
        {
            "@type": "Place",
            "name": "Dooars"
        },
        {
            "@type": "Place",
            "name": "Mirik"
        },
        {
            "@type": "Place",
            "name": "Sandakphu"
        },
        {
            "@type": "Place",
            "name": "Jaldapara"
        },
        {
            "@type": "Place",
            "name": "Lataguri"
        }
    ],

    "availableLanguage": ["English", "Hindi", "Bengali"]
}
</script>
<?php if (isset($schemaType) && $schemaType === 'terms'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Terms & Conditions",
        "url": "<?php echo htmlspecialchars($canonical); ?>",
        "publisher": {
        "@type": "Organization",
        "name": "Turbo Hills",
        "url": "https://turbohills.com"
        }
    }
    </script>
<?php elseif (isset($schemaType) && $schemaType === 'privacy'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Privacy Policy",
        "url": "<?php echo htmlspecialchars($canonical); ?>",
        "publisher": {
        "@type": "Organization",
        "name": "Turbo Hills",
        "url": "https://turbohills.com"
        }
    }
    </script>
<?php endif; ?>