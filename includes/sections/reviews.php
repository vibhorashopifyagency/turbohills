<?php
$home2TestimonialSection = [
    'title' => 'Real Reviews from Turbo Hills Travelers',
    'subtitle' => 'Looking for the best Sikkim tour package, Darjeeling getaway, or North Bengal family trip? Here’s what our travelers felt—joyful, cared for, and truly connected throughout the journey.',
    'sliderClass' => 'home1-testimonial-slider',
    'testimonials' => [
        [
            'rating' => ['type' => 'circle', 'full' => 5, 'half' => false],
            'heading' => 'Our Sikkim honeymoon felt magical',
            'text' => 'Turbo Hills planned our Gangtok–Lachung–Yumthang Valley honeymoon perfectly. From permits to hotel stays and punctual transfers, everything was smooth—so we could just be present, laugh more, and make real memories together.',
            'author' => [
                'name' => 'Rohan & Neha',
                'role' => 'Sikkim Honeymoon Couple',
                'image' => BASE_URL . '/assets/img/home1/testimonial-author-img1.png',
                'imageAlt' => 'Happy couple sharing Sikkim honeymoon review',
            ],
        ],
        [
            'rating' => ['type' => 'circle', 'full' => 5, 'half' => false],
            'heading' => 'Best Darjeeling & Kalimpong trip—stress free',
            'text' => 'We booked a Darjeeling tour package with Kalimpong and it was genuinely peaceful. Clean stays, great views, and a driver who felt like family. Turbo Hills kept checking in, so even with elders along, we felt safe and supported.',
            'author' => [
                'name' => 'Ananya S.',
                'role' => 'Darjeeling Family Traveler',
                'image' => BASE_URL . '/assets/img/home1/testimonial-author-img3.png',
                'imageAlt' => 'Family traveler review for Darjeeling and Kalimpong',
            ],
        ],
        [
            'rating' => ['type' => 'trustpilot', 'stars' => 5],
            'heading' => 'North Bengal + Dooars—pure joy with kids',
            'text' => 'We wanted a North Bengal tour package that worked for kids, and Turbo Hills nailed it. Short drives, fun stops, and thoughtful planning—our children were excited every day. The whole trip felt warm, personal, and beautifully organized.',
            'author' => [
                'name' => 'Meera K.',
                'role' => 'North Bengal Traveler',
                'image' => BASE_URL . '/assets/img/home1/testimonial-author-img2.png',
                'imageAlt' => 'Parent sharing emotional North Bengal family trip review',
            ],
        ],
        [
            'rating' => ['type' => 'circle', 'full' => 5, 'half' => false],
            'heading' => 'Local support made our Sikkim trip effortless',
            'text' => 'From airport pickup to daily sightseeing, everything ran on time. We did Gangtok, Tsomgo Lake, and a relaxed city day—no rushing. Turbo Hills handled the details so well that we felt cared for, not “processed”.',
            'author' => [
                'name' => 'Siddharth P.',
                'role' => 'Gangtok Sightseeing Traveler',
                'image' => BASE_URL . '/assets/img/home1/testimonial-author-img4.png',
                'imageAlt' => 'Traveler testimonial about Gangtok sightseeing and transfers',
            ],
        ],
        [
            'rating' => ['type' => 'trustpilot', 'stars' => 5],
            'heading' => 'Exactly what we wanted—custom Sikkim itinerary',
            'text' => 'We asked for a custom Sikkim itinerary with good hotels, clean cars, and realistic travel times. Turbo Hills listened and built a plan that matched our pace. It felt like traveling with a trusted friend—and we came back genuinely refreshed.',
            'author' => [
                'name' => 'Priya R.',
                'role' => 'Custom Tour Traveler',
                'image' => BASE_URL . '/assets/img/home1/testimonial-author-img5.png',
                'imageAlt' => 'Traveler sharing joyful review of a custom Sikkim tour',
            ],
        ],
    ],
    'badges' => [
        'trustpilot' => [
            'url' => 'https://www.trustpilot.com/',
            'score' => '4.8',
            'logo' => [
                'src' => BASE_URL . '/assets/img/home1/icon/trustpilot-logo.svg',
                'alt' => 'Trustpilot',
            ],
            'star' => [
                'src' => BASE_URL . '/assets/img/home1/icon/trustpilot-star.svg',
                'alt' => 'Trustpilot rating',
            ],
            'reviewsText' => '(Traveler reviews)',
        ],
        'tripadvisor' => [
            'url' => 'https://www.tripadvisor.com/',
            'score' => '4.8',
            'logo' => [
                'src' => BASE_URL . '/assets/img/home1/icon/tripadvisor-logo.svg',
                'alt' => 'Tripadvisor',
            ],
            'star' => [
                'src' => BASE_URL . '/assets/img/home1/icon/tripadvisor-start.svg',
                'alt' => 'Tripadvisor rating',
            ],
            'label' => 'Reviews',
        ],
    ],
];

function renderHome2TestimonialRating(array $rating): void
{
    $type = $rating['type'] ?? 'circle';

    if ($type === 'trustpilot') {
        $stars = (int)($rating['stars'] ?? 5);
        $stars = max(0, min(5, $stars));

        $svg = '<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg"><path d="M5.25 7.57409L7.53125 6.99627L8.48437 9.93221L5.25 7.57409ZM10.5 3.77924H6.48437L5.25 0L4.01562 3.77924H0L3.25 6.12174L2.01562 9.90097L5.26562 7.55847L7.26562 6.12174L10.5 3.77924Z"/></svg>';

        echo '<ul class="rating-area trustpilot">';
        for ($i = 0; $i < $stars; $i++) {
            echo '<li>' . $svg . '</li>';
        }
        echo '</ul>';
        return;
    }

    $full = (int)($rating['full'] ?? 5);
    $full = max(0, min(5, $full));
    $half = (bool)($rating['half'] ?? false);

    echo '<ul class="rating-area">';
    for ($i = 0; $i < $full; $i++) {
        echo '<li><i class="bi bi-circle-fill"></i></li>';
    }
    if ($half) {
        echo '<li><i class="bi bi-circle-half"></i></li>';
    }
    echo '</ul>';
}
?>

<!-- home2 testimonial Section Start-->
<div class="home2-testimonial-section">
    <div class="container">
        <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <h2><?= htmlspecialchars($home2TestimonialSection['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <p><?= htmlspecialchars($home2TestimonialSection['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        </div>
        <div class="row mb-40">
            <div class="col-lg-12">
                <div class="swiper <?= htmlspecialchars($home2TestimonialSection['sliderClass'], ENT_QUOTES, 'UTF-8') ?>">
                    <div class="swiper-wrapper">
                        <?php foreach ($home2TestimonialSection['testimonials'] as $testimonial) : ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card three">
                                    <?php renderHome2TestimonialRating($testimonial['rating'] ?? []); ?>
                                    <h5><?= htmlspecialchars($testimonial['heading'] ?? '', ENT_QUOTES, 'UTF-8') ?></h5>
                                    <p><?= htmlspecialchars($testimonial['text'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
                                    <div class="author-area">
                                        <!-- <div class="author-img">
                                            <img src="<?= htmlspecialchars($testimonial['author']['image'] ?? '', ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($testimonial['author']['imageAlt'] ?? '', ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                                        </div> -->
                                        <div class="author-info">
                                            <h5><?= htmlspecialchars($testimonial['author']['name'] ?? '', ENT_QUOTES, 'UTF-8') ?></h5>
                                            <span><?= htmlspecialchars($testimonial['author']['role'] ?? '', ENT_QUOTES, 'UTF-8') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-and-slider-btn wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="<?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['url'], ENT_QUOTES, 'UTF-8') ?>" class="single-rating">
                <strong><?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['score'], ENT_QUOTES, 'UTF-8') ?></strong>
                <div class="trustpilot-rating">
                    <img src="<?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['logo']['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['logo']['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                    <div class="rating-area">
                        <img src="<?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['star']['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['star']['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                        <span><?= htmlspecialchars($home2TestimonialSection['badges']['trustpilot']['reviewsText'], ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                </div>
            </a>
            <div class="slider-btn-grp">
                <div class="slider-btn testimonial-slider-prev">
                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M11.002 13.0005C10.002 10.5005 5.00195 8.00049 2.00195 7.00049C5.00195 6.00049 9.50195 4.50049 11.002 1.00049" stroke-width="1.5" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
                <div class="slider-btn testimonial-slider-next">
                    <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M2.99805 13.0005C3.99805 10.5005 8.99805 8.00049 11.998 7.00049C8.99805 6.00049 4.49805 4.50049 2.99805 1.00049" stroke-width="1.5" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
            </div>
            <a href="<?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['url'], ENT_QUOTES, 'UTF-8') ?>" class="single-rating">
                <strong><?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['score'], ENT_QUOTES, 'UTF-8') ?></strong>
                <div class="tripadvisor-rating">
                    <img src="<?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['logo']['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['logo']['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                    <div class="rating-area">
                        <span><?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['label'], ENT_QUOTES, 'UTF-8') ?></span>
                        <img src="<?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['star']['src'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($home2TestimonialSection['badges']['tripadvisor']['star']['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- home2 testimonial Section End-->