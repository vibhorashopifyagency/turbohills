<?php
$aboutVideoSection = [
  'wrapperClass' => 'about-video-section mb-100',
  'image' => [
    'src' => BASE_URL . '/assets/img/innerpages/about-video-img.jpg',
    'alt' => 'Sikkim and North Bengal tour experience with Turbo Hills',
  ],
  'video' => [
    'fancyboxGroup' => 'video-player',
    'url' => 'https://www.youtube.com/watch?v=u31qwQUeGuM',
  ],
];
?>

<!-- About Video Section Start-->
<div class="<?= htmlspecialchars($aboutVideoSection['wrapperClass'], ENT_QUOTES, 'UTF-8') ?>">
  <div class="container">
    <div class="video-wrap">
      <img
        src="<?= htmlspecialchars($aboutVideoSection['image']['src'], ENT_QUOTES, 'UTF-8') ?>"
        alt="<?= htmlspecialchars($aboutVideoSection['image']['alt'], ENT_QUOTES, 'UTF-8') ?>"
      >
      <a
        data-fancybox="<?= htmlspecialchars($aboutVideoSection['video']['fancyboxGroup'], ENT_QUOTES, 'UTF-8') ?>"
        href="<?= htmlspecialchars($aboutVideoSection['video']['url'], ENT_QUOTES, 'UTF-8') ?>"
        class="play-btn"
      >
        <i class="bi bi-play-fill"></i>
        <div class="waves-block">
          <div class="waves wave-1"></div>
          <div class="waves wave-2"></div>
          <div class="waves wave-3"></div>
        </div>
      </a>
    </div>
  </div>
</div>
<!-- About Video Section End-->