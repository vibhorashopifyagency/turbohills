<?php
$pageTitle = 'Pelling Tours from Bagdogra — Turbo Hills';
$metaDescription = 'Pelling day trips and short stays from Bagdogra. Scenic views of the Kanchenjunga range, monasteries and peaceful hill walks with Turbo Hills.';
include __DIR__ . '/includes/header.php';
?>

<article>
  <h1>Pelling — Scenic views and Kanchenjunga from Bagdogra</h1>
  <p>Pelling is a peaceful hill destination in West Sikkim, popular for its panoramic views of the Kanchenjunga range. Turbo Hills arranges transfers from <strong>Bagdogra Airport</strong> with comfortable vehicles and local guides.</p>

  <h2>Highlights</h2>
  <ul>
    <li>Best viewpoint for sunrise over Kanchenjunga</li>
    <li>Rimbi Waterfall and Pemayangtse Monastery</li>
    <li>Short nature walks and village visits</li>
  </ul>

  <p><a href="/contact.php">Request a Pelling tour</a> starting from Bagdogra and we will prepare a tailored itinerary.</p>

  <!-- Breadcrumb + TouristDestination JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "BreadcrumbList",
        "itemListElement": [
          {"@type":"ListItem","position":1,"name":"Home","item":"https://turbohills.com/index.php"},
          {"@type":"ListItem","position":2,"name":"Pelling","item":"https://turbohills.com/destination-pelling.php"}
        ]
      },
      {
        "@type": "TouristDestination",
        "name": "Pelling, Sikkim",
        "description": "Pelling is a scenic hill destination in West Sikkim known for views of the Kanchenjunga range, monasteries and peaceful walks. Transferable from Bagdogra Airport."
      }
    ]
  }
  </script>

</article>

<?php include __DIR__ . '/includes/footer.php'; ?>
