<!-- home5 destination Section Start-->
<div class="home5-destination-section mb-100">
    <div class="container">
        <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <h2>Top Destinations</h2>
                </div>
            </div>
        </div>
        <div class="row g-xl-4 g-lg-3 gy-4">
            <?php
            $home5_destinations = [
                [
                    'col' => 'col-lg-5 col-md-7',
                    'delay' => '200ms',
                    'label' => 'Explore',
                    'title' => 'Darjeeling',
                    'url' => BASE_URL . '/pages/destinations/north-bengal/darjeeling.php',
                    'image' => BASE_URL . '/assets/img/darjeeling/train-darjeeling.webp',
                ],
                [
                    'col' => 'col-lg-3 col-md-5',
                    'delay' => '400ms',
                    'label' => 'Explore',
                    'title' => 'Gangtok',
                    'url' => BASE_URL . '/pages/destinations/sikkim/gangtok-experiences.php',
                    'image' => BASE_URL . '/assets/img/innerpages/breadcrumb-bg3.jpg',
                ],
                [
                    'col' => 'col-lg-4 col-md-7',
                    'delay' => '600ms',
                    'label' => 'Explore',
                    'title' => 'Pelling',
                    'url' => BASE_URL . '/pages/destinations/sikkim/pelling-experiences.php',
                    'image' => BASE_URL . '/assets/img/innerpages/breadcrumb-bg4.jpg',
                ],
                [
                    'col' => 'col-lg-4 col-md-5',
                    'delay' => '600ms',
                    'label' => 'Explore',
                    'title' => 'Sandakphu',
                    'url' => BASE_URL . '/pages/destinations/north-bengal/sandakphu.php',
                    'image' => BASE_URL . '/assets/img/sandakphu/Sandakphu-Phalut-trek-Indiahikes-26-scaled-1.webp',
                ],
                [
                    'col' => 'col-lg-3 col-md-7',
                    'delay' => '400ms',
                    'label' => 'Explore',
                    'title' => 'Lachung',
                    'url' => BASE_URL . '/pages/destinations/sikkim/lachung-experiences.php',
                    'image' => BASE_URL . '/assets/img/innerpages/experience-breadcrumb-bg.jpg',
                ],
                [
                    'col' => 'col-lg-5 col-md-5',
                    'delay' => '200ms',
                    'label' => 'Explore',
                    'title' => 'Sikkim',
                    'url' => BASE_URL . '/pages/destinations/sikkim/sikkim-experiences.php',
                    'image' => BASE_URL . '/assets/img/innerpages/sikkim-himalayan-mountains.jpg',
                ],
            ];
            ?>

            <?php foreach ($home5_destinations as $destination): ?>
                <div class="<?= $destination['col'] ?> wow animate fadeInDown" data-wow-delay="<?= $destination['delay'] ?>" data-wow-duration="1500ms">
                    <div class="destination-card2 four">
                        <div class="destination-img">
                            <img src="<?= $destination['image'] ?>" alt="<?= htmlspecialchars($destination['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                        </div>
                        <div class="destination-content-wrap">
                            <div class="destination-content">
                                <span><?= $destination['label'] ?></span>
                                <h5><a href="<?= $destination['url'] ?>"><?= $destination['title'] ?></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <img src="<?= BASE_URL ?>/assets/img/home3/vector/home3-travel-package-vector1.svg" alt="" class="vector1" loading="lazy">
</div>
<!-- home5 destination Section End-->