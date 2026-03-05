<?php
/**
 * Dynamic sitemap — serves the correct domain for turbohills.com and turbohills.in
 * Accessed as /sitemap.xml via the .htaccess rewrite rule.
 */

$host = $_SERVER['HTTP_HOST'] ?? 'turbohills.com';
$comDomains = ['turbohills.com', 'www.turbohills.com'];
$inDomains  = ['turbohills.in',  'www.turbohills.in'];

if (in_array($host, $comDomains)) {
    $base = 'https://turbohills.com';
} elseif (in_array($host, $inDomains)) {
    $base = 'https://turbohills.in';
} else {
    $base = 'https://turbohills.com'; // fallback
}

// --------------------------------------------------------------------------
// Page definitions: [path, priority, changefreq]
// --------------------------------------------------------------------------
$pages = [
    // Core pages
    ['/',                                                     '1.0', 'weekly'],
    ['/about.php',                                            '0.8', 'monthly'],
    ['/contact.php',                                          '0.8', 'monthly'],
    ['/faq.php',                                              '0.7', 'monthly'],
    ['/privacy-policy.php',                                   '0.3', 'yearly'],
    ['/terms-and-conditions.php',                             '0.3', 'yearly'],

    // Sikkim hub
    ['/pages/destinations/sikkim/sikkim-experiences.php',     '0.9', 'weekly'],

    // Sikkim destinations
    ['/pages/destinations/sikkim/gangtok-experiences.php',    '0.9', 'weekly'],
    ['/pages/destinations/sikkim/pelling-experiences.php',    '0.9', 'weekly'],
    ['/pages/destinations/sikkim/lachen-experiences.php',     '0.8', 'weekly'],
    ['/pages/destinations/sikkim/lachung-experiences.php',    '0.8', 'weekly'],
    ['/pages/destinations/sikkim/tsomgo-experiences.php',     '0.8', 'weekly'],
    ['/pages/destinations/sikkim/nathula-experiences.php',    '0.8', 'weekly'],
    ['/pages/destinations/sikkim/gurudongmar-experiences.php','0.8', 'weekly'],
    ['/pages/destinations/sikkim/yuksom-experiences.php',     '0.7', 'monthly'],
    ['/pages/destinations/sikkim/rumtek-experiences.php',     '0.7', 'monthly'],
    ['/pages/destinations/sikkim/zuluk-experiences.php',      '0.7', 'monthly'],
    ['/pages/destinations/sikkim/sikkim-zeropoint-package.php','0.7','monthly'],

    // North Bengal hub
    ['/pages/destinations/north-bengal/north-bengal-experiences.php', '0.9', 'weekly'],

    // North Bengal destinations
    ['/pages/destinations/north-bengal/darjeeling.php',       '0.9', 'weekly'],
    ['/pages/destinations/north-bengal/sandakphu.php',        '0.8', 'weekly'],
    ['/pages/destinations/north-bengal/phalut.php',           '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/kurseong.php',         '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/mirik.php',            '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/lepchajagat.php',      '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/lolegaon.php',         '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/rishyap.php',          '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/tinchuley.php',        '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/takdah.php',           '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/lava.php',             '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/latpanchar.php',       '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/samsing.php',          '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/suntalekhola.php',     '0.7', 'monthly'],
    ['/pages/destinations/north-bengal/jhalong-buxa.php',     '0.7', 'monthly'],
];

// Map the web root to the filesystem
$docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

// Helper: get actual file last-modified date, fallback to today
function pageLastMod(string $docRoot, string $path): string {
    // Homepage maps to index.php
    $filePath = $docRoot . ($path === '/' ? '/index.php' : $path);
    return file_exists($filePath) ? date('Y-m-d', filemtime($filePath)) : date('Y-m-d');
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
<?php foreach ($pages as [$path, $priority, $changefreq]): ?>
    <url>
        <loc><?= htmlspecialchars($base . $path, ENT_XML1, 'UTF-8') ?></loc>
        <lastmod><?= pageLastMod($docRoot, $path) ?></lastmod>
        <xhtml:link rel="alternate" hreflang="en-IN" href="<?= htmlspecialchars('https://turbohills.in'  . $path, ENT_XML1, 'UTF-8') ?>"/>
        <xhtml:link rel="alternate" hreflang="en"    href="<?= htmlspecialchars('https://turbohills.com' . $path, ENT_XML1, 'UTF-8') ?>"/>
    </url>
<?php endforeach; ?>
</urlset>
