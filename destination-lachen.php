<?php
$pageTitle = 'Lachen — Gateway to Gurudongmar & North Sikkim — Turbo Hills';
$metaDescription = 'Lachen tours and transfers from Bagdogra. Explore Gurudongmar Lake, Chopta Valley, and high-altitude landscapes with experienced local guides.';
include __DIR__ . '/includes/header.php';
?>

<article>
  <h1>Lachen — North Sikkim gateway from Bagdogra</h1>
  <p>Lachen is a mountain village used as a base for accessing high-altitude lakes and passes in North Sikkim. We plan safe transfers from <strong>Bagdogra</strong> with appropriate acclimatisation stops and experienced guides.</p>

  <h2>Highlights</h2>
  <ul>
    <li>Gurudongmar Lake day visits (permit required)</li>
    <li>Chopta Valley views and alpine scenery</li>
    <li>Local culture and village trails</li>
  </ul>

  <p>High-altitude travel requires acclimatisation; we normally recommend an overnight in Gangtok for most travellers arriving from Bagdogra.</p>

  <!-- Breadcrumb + TouristDestination JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {"@type":"ListItem","position":1,"name":"Home","item":"https://turbohills.com/index.php"},
          {"@type":"ListItem","position":2,"name":"Lachen","item":"https://turbohills.com/destination-lachen.php"}
        ]
      },
      {
        "@type": "TouristDestination",
        "name": "Lachen, Sikkim",
        "description": "Lachen is a high-altitude village in North Sikkim serving as base for Gurudongmar Lake and Chopta Valley. Transfers available from Bagdogra with local guides."
      }
    ]
  }
  </script>

</article>

<?php include __DIR__ . '/includes/footer.php'; ?>
