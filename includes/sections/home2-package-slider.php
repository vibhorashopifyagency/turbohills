<!-- home2 package slider Section Start-->
<div class="home2-package-slider-section mb-100">
    <div class="container">
        <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <h2>Popular Package</h2>
                    <p>A curated list of the most popular travel packages based on different destinations.</p>
                </div>
            </div>
        </div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <div class="swiper home1-trip-slider">
                    <div class="swiper-wrapper">
                        <?php
                        $home2_packages = [
                            [
                                'title' => 'Lachung',
                                'url' => BASE_URL . '/pages/destinations/sikkim/lachung-experiences.php',
                                'location' => 'Sikkim, India',
                                'duration' => '03 Days/02 Nights',
                                'badge' => '',
                                'images' => [
                                    BASE_URL . '/assets/img/lachung-experiences/Img_9288_202305031055_Lachung.jpg',
                                ]
                            ],
                            [
                                'title' => 'Gangtok',
                                'url' => BASE_URL . '/pages/destinations/sikkim/gangtok-experiences.php',
                                'location' => 'Sikkim, India',
                                'duration' => '07 Days',
                                'badge' => 'Hot Sale!',
                                'images' => [
                                    BASE_URL . '/assets/img/gangtok-experiences/gangtok-bnnr.jpg', 
                                ]
                            ],
                            [
                                'title' => 'Pelling',
                                'url' => BASE_URL . '/pages/destinations/sikkim/pelling-experiences.php',
                                'location' => 'Sikkim, India',
                                'duration' => '03 Days/02 Nights',
                                'badge' => '',
                                'images' => [
                                    BASE_URL . '/assets/img/pelling-experiences/gangtok-pelling-tour-bannnr.jpg',
                                ]
                            ],
                            [
                                'title' => 'Sandakphu',
                                'url' => BASE_URL . '/pages/destinations/north-bengal/sandakphu.php',
                                'location' => 'West Bengal, India',
                                'duration' => '07 Days',
                                'badge' => 'Hot Sale!',
                                'images' => [BASE_URL . '/assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp']
                            ],
                            [
                                'title' => 'Darjeeling',
                                'url' => BASE_URL . '/pages/destinations/north-bengal/darjeeling.php',
                                'location' => 'West Bengal, India',
                                'duration' => '05 Days',
                                'badge' => 'Sale on!',
                                'images' => [BASE_URL . '/assets/img/darjeeling/train-darjeeling.webp']
                            ]
                        ];
                        ?>

                        <?php foreach ($home2_packages as $package): ?>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img-wrap">
                                        <?php if (count($package['images']) > 1): ?>
                                            <div class="swiper package-card-img-slider">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($package['images'] as $image): ?>
                                                        <div class="swiper-slide">
                                                            <a href="<?= $package['url'] ?>" class="package-img">
                                                                <img src="<?= $image ?>" alt="" loading="lazy">
                                                            </a>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="slider-pagi-wrap">
                                                <div class="package-card-img-pagi paginations"></div>
                                            </div>
                                        <?php else: ?>
                                            <a href="<?= $package['url'] ?>" class="package-img">
                                                <img src="<?= $package['images'][0] ?>" alt="" loading="lazy">
                                            </a>
                                        <?php endif; ?>

                                        <?php if (!empty($package['badge'])): ?>
                                            <div class="batch">
                                                <span><?= $package['badge'] ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="package-content">
                                        <h5><a href="<?= $package['url'] ?>"><?= $package['title'] ?></a></h5>
                                        <div class="location-and-time">
                                            <div class="location">
                                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.83615 0C3.77766 0 1.28891 2.48879 1.28891 5.54892C1.28891 7.93837 4.6241 11.8351 6.05811 13.3994C6.25669 13.6175 6.54154 13.7411 6.83615 13.7411C7.13076 13.7411 7.41561 13.6175 7.6142 13.3994C9.04821 11.8351 12.3834 7.93833 12.3834 5.54892C12.3834 2.48879 9.89464 0 6.83615 0ZM7.31469 13.1243C7.18936 13.2594 7.02008 13.3342 6.83615 13.3342C6.65222 13.3342 6.48295 13.2594 6.35761 13.1243C4.95614 11.5959 1.69584 7.79515 1.69584 5.54896C1.69584 2.7134 4.00067 0.406933 6.83615 0.406933C9.67164 0.406933 11.9765 2.7134 11.9765 5.54896C11.9765 7.79515 8.71617 11.5959 7.31469 13.1243Z"/>
                                                    <path d="M6.83618 8.54554C8.4624 8.54554 9.7807 7.22723 9.7807 5.60102C9.7807 3.9748 8.4624 2.65649 6.83618 2.65649C5.20997 2.65649 3.89166 3.9748 3.89166 5.60102C3.89166 7.22723 5.20997 8.54554 6.83618 8.54554Z"/>
                                                </svg>
                                                <a href="travel-package-01.html"><?= $package['location'] ?></a>
                                            </div>
                                            <!-- <svg class="arrow" width="25" height="6" viewBox="0 0 25 6" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 3L5 5.88675V0.113249L0 3ZM25 3L20 0.113249V5.88675L25 3ZM4.5 3.5H20.5V2.5H4.5V3.5Z"/>
                                            </svg>
                                            <span><?= $package['duration'] ?></span> -->
                                        </div>
                                        <div class="btn-and-price-area">
                                            <a href="<?= $package['url'] ?>" class="primary-btn1">
                                                <span>
                                                    Book Now
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"/>
                                                    </svg>
                                                </span>
                                                <span>
                                                    Book Now
                                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"/>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="swiper-pagination2 paginations"></div>
            </div>
        </div>
    </div>
    <img src="<?= BASE_URL ?>/assets/img/home2/vector/home2-package-slider-vector1.svg" alt="" class="vector1" loading="lazy">
    <img src="<?= BASE_URL ?>/assets/img/home2/vector/home2-package-slider-vector2.svg" alt="" class="vector2" loading="lazy">
    <img src="<?= BASE_URL ?>/assets/img/home2/vector/home2-package-slider-vector3.svg" alt="" class="vector3" loading="lazy">
</div>
<!-- home2 package slider Section End-->