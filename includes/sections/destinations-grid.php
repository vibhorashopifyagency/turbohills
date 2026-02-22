<!-- destination Page Start-->
<div class="destination-page pt-20 mb-100">
    <div class="container">
        <ul class="nav nav-pills mb-60" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-europe-tab" data-bs-toggle="pill" data-bs-target="#pills-europe" type="button" role="tab" aria-controls="pills-europe" aria-selected="true">North Bengal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-asia-tab" data-bs-toggle="pill" data-bs-target="#pills-asia" type="button" role="tab" aria-controls="pills-asia" aria-selected="false">Sikkim</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-middle-east-tab" data-bs-toggle="pill" data-bs-target="#pills-middle-east" type="button" role="tab" aria-controls="pills-middle-east" aria-selected="false">Experiences</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-africa-tab" data-bs-toggle="pill" data-bs-target="#pills-africa" type="button" role="tab" aria-controls="pills-africa" aria-selected="false">Lakes & Passes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-north-america-tab" data-bs-toggle="pill" data-bs-target="#pills-north-america" type="button" role="tab" aria-controls="pills-north-america" aria-selected="false">Popular</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-oceania-tab" data-bs-toggle="pill" data-bs-target="#pills-oceania" type="button" role="tab" aria-controls="pills-oceania" aria-selected="false">Offbeat</button>
            </li>
        </ul>

        <?php
        $destination_grid_default_images = [
            'assets/img/home1/destination-img1.jpg',
            'assets/img/home1/destination-img2.jpg',
            'assets/img/home1/destination-img3.jpg',
            'assets/img/home1/destination-img4.jpg',
            'assets/img/home1/destination-img5.jpg',
            'assets/img/home1/destination-img6.jpg',
            'assets/img/innerpages/destination-img1.jpg',
            'assets/img/innerpages/destination-img2.jpg',
            'assets/img/innerpages/destination-img3.jpg',
            'assets/img/innerpages/destination-img4.jpg',
            'assets/img/innerpages/destination-img5.jpg',
            'assets/img/innerpages/destination-img6.jpg',
        ];

        $destination_grid_default_meta = 'Custom tour packages | Cab pickup from Bagdogra & NJP.';

        // Place-specific images (fallback remains $destination_grid_default_images).
        // Keep paths relative; render will prefix with BASE_URL.
        $destination_grid_place_images = [
            // North Bengal
            'Darjeeling' => 'assets/img/darjeeling/darjeeling-view.webp',
            'Mirik' => 'assets/img/north-bengal/fog-mirik.webp',
            'Kurseong' => 'assets/img/kurseong/kurseong-banner.webp',
            'Lava' => 'assets/img/lava/lava.jpg',
            'Lolegaon' => 'assets/img/lava/lava-4.jpg',
            'Sandakphu' => 'assets/img/sandakphu/sandakphu.jpg',
            'Takdah' => 'assets/img/darjeeling/Darjeeling-Tea-Fields.jpg',
            'Tinchuley' => 'assets/img/darjeeling/Darjeeling-Tea-Fields.jpg',
            'Lepchajagat' => 'assets/img/lepchajagat/road-to-Lepchajagat-930x620.jpeg',
            'Rishyap' => 'assets/img/lava/lava-2.jpg',
            'Latpanchar' => 'assets/img/latpanchar/latpanchar-banner.jpg',
            'Suntalekhola' => 'assets/img/north-bengal/Gopaldhara1.jpg',
            'Phalut' => 'assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp',
            'Jhalong & Buxa' => 'assets/img/jhalong-buxa/buxa-banner.jpg',
            'Pankhabari Tea Gardens' => 'assets/img/north-bengal/mirik-gopaldhara.jfif',
            'Samsing' => 'assets/img/jhalong-buxa/jhalong.jpg',
            'North Bengal Experiences' => 'assets/img/darjeeling/Darjeeling-Tea-Fields.jpg',

            // Sikkim
            'Gangtok' => 'assets/img/sikkim/sikkim-hero-banner-1.jpg',
            'Pelling' => 'assets/img/sikkim/pelling-2.jpg',
            'Lachung' => 'assets/img/sikkim/lachung.jpg',
            'Lachen' => 'assets/img/sikkim/Lachen-Sikkim-768x512.jpg',
            'Yuksom' => 'assets/img/sikkim/sikkim-hero-banner-2.jpg',
            'Rumtek' => 'assets/img/sikkim/awesome-place.jpg',
            'Zuluk' => 'assets/img/sikkim/zuluk.jpg',
            'Tarey Bhir' => 'assets/img/sikkim/tarey-bhir.webp',
            'Tsomgo Lake' => 'assets/img/sikkim/banner-img1.jpg',
            'Gurudongmar Lake' => 'assets/img/sikkim/Gurudongmar-Lake-Sikkim.jpg',
            'Nathula Pass' => 'assets/img/sikkim/north-sikkim.jpg',
            'North Sikkim Tours' => 'assets/img/sikkim/north-sikkim.jpg',
            'South Sikkim Tours' => 'assets/img/sikkim/Singtham-Village-Homestay.jpg',
            'Sikkim Experiences' => 'assets/img/sikkim/Sikkim-Offbeat.jpg',
            'Zero Point (Sikkim)' => 'assets/img/sikkim/sikkimi-zeropoint.jpg',
            'Yumthang Valley (Lachung)' => 'assets/img/sikkim/Yumthang-Valley-Sikkim.jpg',
        ];

        $destination_grid_tabs = [
            'pills-europe' => [
                ['title' => 'Darjeeling', 'url' => BASE_URL . '/pages/destinations/north-bengal/darjeeling.php'],
                ['title' => 'Mirik', 'url' => BASE_URL . '/pages/destinations/north-bengal/mirik.php'],
                ['title' => 'Kurseong', 'url' => BASE_URL . '/pages/destinations/north-bengal/kurseong.php'],
                ['title' => 'Lava', 'url' => BASE_URL . '/pages/destinations/north-bengal/lava.php'],
                ['title' => 'Lolegaon', 'url' => BASE_URL . '/pages/destinations/north-bengal/lolegaon.php'],
                ['title' => 'Sandakphu', 'url' => BASE_URL . '/pages/destinations/north-bengal/sandakphu.php'],
                ['title' => 'Takdah', 'url' => BASE_URL . '/pages/destinations/north-bengal/takdah.php'],
                ['title' => 'Tinchuley', 'url' => BASE_URL . '/pages/destinations/north-bengal/tinchuley.php'],
                ['title' => 'Lepchajagat', 'url' => BASE_URL . '/pages/destinations/north-bengal/lepchajagat.php'],
                ['title' => 'Rishyap', 'url' => BASE_URL . '/pages/destinations/north-bengal/rishyap.php'],
                ['title' => 'Latpanchar', 'url' => BASE_URL . '/pages/destinations/north-bengal/latpanchar.php'],
                ['title' => 'Suntalekhola', 'url' => BASE_URL . '/pages/destinations/north-bengal/suntalekhola.php'],
            ],
            'pills-asia' => [
                ['title' => 'Gangtok', 'url' => BASE_URL . '/pages/destinations/sikkim/gangtok-experiences.php'],
                ['title' => 'Pelling', 'url' => BASE_URL . '/pages/destinations/sikkim/pelling-experiences.php'],
                ['title' => 'Lachung', 'url' => BASE_URL . '/pages/destinations/sikkim/lachung-experiences.php'],
                ['title' => 'Lachen', 'url' => BASE_URL . '/pages/destinations/sikkim/lachen-experiences.php'],
                ['title' => 'Yuksom', 'url' => BASE_URL . '/pages/destinations/sikkim/yuksom-experiences.php'],
                ['title' => 'Rumtek', 'url' => BASE_URL . '/pages/destinations/sikkim/rumtek-experiences.php'],
                ['title' => 'Zuluk', 'url' => BASE_URL . '/pages/destinations/sikkim/zuluk-experiences.php'],
                ['title' => 'Tarey Bhir', 'url' => BASE_URL . '/pages/destinations/sikkim/tarey-bhir-experiences.php'],
                ['title' => 'Tsomgo Lake', 'url' => BASE_URL . '/pages/destinations/sikkim/tsomgo-experiences.php'],
                ['title' => 'Gurudongmar Lake', 'url' => BASE_URL . '/pages/destinations/sikkim/gurudongmar-experiences.php'],
                ['title' => 'Nathula Pass', 'url' => BASE_URL . '/pages/destinations/sikkim/nathula-experiences.php'],
                ['title' => 'North Sikkim Tours', 'url' => BASE_URL . '/pages/destinations/sikkim/north-sikkim-tours.php'],
                ['title' => 'South Sikkim Tours', 'url' => BASE_URL . '/pages/destinations/sikkim/south-sikkim-tours.php'],
            ],
            'pills-middle-east' => [
                ['title' => 'North Bengal Experiences', 'url' => BASE_URL . '/pages/destinations/north-bengal/north-bengal-experiences.php'],
                ['title' => 'Sikkim Experiences', 'url' => BASE_URL . '/pages/destinations/sikkim/sikkim-experiences.php'],
                ['title' => 'Phalut', 'url' => BASE_URL . '/pages/destinations/north-bengal/phalut.php'],
                ['title' => 'Jhalong & Buxa', 'url' => BASE_URL . '/pages/destinations/north-bengal/jhalong-buxa.php'],
                ['title' => 'Pankhabari Tea Gardens', 'url' => BASE_URL . '/pages/destinations/north-bengal/pankhabari-tea-gardens.php'],
                ['title' => 'Samsing', 'url' => BASE_URL . '/pages/destinations/north-bengal/samsing.php'],
                ['title' => 'Lava', 'url' => BASE_URL . '/pages/destinations/north-bengal/lava.php'],
                ['title' => 'Lolegaon', 'url' => BASE_URL . '/pages/destinations/north-bengal/lolegaon.php'],
                ['title' => 'Kurseong', 'url' => BASE_URL . '/pages/destinations/north-bengal/kurseong.php'],
                ['title' => 'Mirik', 'url' => BASE_URL . '/pages/destinations/north-bengal/mirik.php'],
                ['title' => 'Takdah', 'url' => BASE_URL . '/pages/destinations/north-bengal/takdah.php'],
                ['title' => 'Tinchuley', 'url' => BASE_URL . '/pages/destinations/north-bengal/tinchuley.php'],
            ],
            'pills-africa' => [
                ['title' => 'Zero Point (Sikkim)', 'url' => BASE_URL . '/pages/destinations/sikkim/sikkim-zeropoint-package.php'],
                ['title' => 'Yumthang Valley (Lachung)', 'url' => BASE_URL . '/pages/destinations/sikkim/lachung-experiences.php'],
                ['title' => 'Gurudongmar Lake', 'url' => BASE_URL . '/pages/destinations/sikkim/gurudongmar-experiences.php'],
                ['title' => 'Tsomgo Lake', 'url' => BASE_URL . '/pages/destinations/sikkim/tsomgo-experiences.php'],
                ['title' => 'Nathula Pass', 'url' => BASE_URL . '/pages/destinations/sikkim/nathula-experiences.php'],
                ['title' => 'Gangtok', 'url' => BASE_URL . '/pages/destinations/sikkim/gangtok-experiences.php'],
                ['title' => 'Pelling', 'url' => BASE_URL . '/pages/destinations/sikkim/pelling-experiences.php'],
                ['title' => 'Yuksom', 'url' => BASE_URL . '/pages/destinations/sikkim/yuksom-experiences.php'],
                ['title' => 'Zuluk', 'url' => BASE_URL . '/pages/destinations/sikkim/zuluk-experiences.php'],
                ['title' => 'Tarey Bhir', 'url' => BASE_URL . '/pages/destinations/sikkim/tarey-bhir-experiences.php'],
                ['title' => 'Rumtek', 'url' => BASE_URL . '/pages/destinations/sikkim/rumtek-experiences.php'],
                ['title' => 'Lachen', 'url' => BASE_URL . '/pages/destinations/sikkim/lachen-experiences.php'],
                ['title' => 'North Sikkim Tours', 'url' => BASE_URL . '/pages/destinations/sikkim/north-sikkim-tours.php'],
            ],
            'pills-north-america' => [
                ['title' => 'Darjeeling', 'url' => BASE_URL . '/pages/destinations/north-bengal/darjeeling.php'],
                ['title' => 'Sandakphu', 'url' => BASE_URL . '/pages/destinations/north-bengal/sandakphu.php'],
                ['title' => 'Gangtok', 'url' => BASE_URL . '/pages/destinations/sikkim/gangtok-experiences.php'],
                ['title' => 'Lachung', 'url' => BASE_URL . '/pages/destinations/sikkim/lachung-experiences.php'],
                ['title' => 'Pelling', 'url' => BASE_URL . '/pages/destinations/sikkim/pelling-experiences.php'],
                ['title' => 'Mirik', 'url' => BASE_URL . '/pages/destinations/north-bengal/mirik.php'],
                ['title' => 'Kurseong', 'url' => BASE_URL . '/pages/destinations/north-bengal/kurseong.php'],
                ['title' => 'Lava', 'url' => BASE_URL . '/pages/destinations/north-bengal/lava.php'],
                ['title' => 'Sikkim Experiences', 'url' => BASE_URL . '/pages/destinations/sikkim/sikkim-experiences.php'],
                ['title' => 'North Bengal Experiences', 'url' => BASE_URL . '/pages/destinations/north-bengal/north-bengal-experiences.php'],
                ['title' => 'North Sikkim Tours', 'url' => BASE_URL . '/pages/destinations/sikkim/north-sikkim-tours.php'],
                ['title' => 'South Sikkim Tours', 'url' => BASE_URL . '/pages/destinations/sikkim/south-sikkim-tours.php'],
            ],
            'pills-oceania' => [
                ['title' => 'Lolegaon', 'url' => BASE_URL . '/pages/destinations/north-bengal/lolegaon.php'],
                ['title' => 'Takdah', 'url' => BASE_URL . '/pages/destinations/north-bengal/takdah.php'],
                ['title' => 'Tinchuley', 'url' => BASE_URL . '/pages/destinations/north-bengal/tinchuley.php'],
                ['title' => 'Lepchajagat', 'url' => BASE_URL . '/pages/destinations/north-bengal/lepchajagat.php'],
                ['title' => 'Tarey Bhir', 'url' => BASE_URL . '/pages/destinations/sikkim/tarey-bhir-experiences.php'],
                ['title' => 'Rumtek', 'url' => BASE_URL . '/pages/destinations/sikkim/rumtek-experiences.php'],
                ['title' => 'Yuksom', 'url' => BASE_URL . '/pages/destinations/sikkim/yuksom-experiences.php'],
                ['title' => 'Lachen', 'url' => BASE_URL . '/pages/destinations/sikkim/lachen-experiences.php'],
                ['title' => 'Samsing', 'url' => BASE_URL . '/pages/destinations/north-bengal/samsing.php'],
                ['title' => 'Jhalong & Buxa', 'url' => BASE_URL . '/pages/destinations/north-bengal/jhalong-buxa.php'],
                ['title' => 'Pankhabari Tea Gardens', 'url' => BASE_URL . '/pages/destinations/north-bengal/pankhabari-tea-gardens.php'],
                ['title' => 'Phalut', 'url' => BASE_URL . '/pages/destinations/north-bengal/phalut.php'],
            ],
        ];
        ?>

        <div class="tab-content" id="pills-tabContent">
            <?php foreach ($destination_grid_tabs as $tab_id => $destinations): ?>
                <div class="tab-pane fade <?= ($tab_id === 'pills-europe') ? 'show active' : '' ?>" id="<?= $tab_id ?>" role="tabpanel" aria-labelledby="<?= $tab_id ?>-tab">
                    <div class="row gy-md-5 gy-4">
                        <?php foreach ($destinations as $index => $destination): ?>
                            <?php
                            $delay_ms = (200 + (($index % 4) * 200)) . 'ms';
                            $title = $destination['title'];
                            $image_path = $destination['image']
                                ?? ($destination_grid_place_images[$title] ?? null)
                                ?? $destination_grid_default_images[$index % count($destination_grid_default_images)];
                            $image_url = defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/' . ltrim($image_path, '/') : $image_path;
                            $url = $destination['url'];
                            $meta = $destination['meta'] ?? $destination_grid_default_meta;
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 wow animate fadeInDown" data-wow-delay="<?= $delay_ms ?>" data-wow-duration="1500ms">
                                <div class="destination-card">
                                    <a href="<?= $url ?>" class="destination-img">
                                        <img src="<?= $image_url ?>" alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                                    </a>
                                    <div class="destination-content">
                                        <a href="<?= $url ?>" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
                                        </a>
                                        <div class="content">
                                            <p><?= htmlspecialchars($meta, ENT_QUOTES, 'UTF-8') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- detination Page End-->