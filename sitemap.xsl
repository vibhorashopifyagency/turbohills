<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="sm xhtml">

  <xsl:output method="html" encoding="UTF-8" indent="yes"/>

  <xsl:template match="/">
    <html lang="en">
      <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Sitemap — Turbo Hills</title>
        <style>
          *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
          body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: #f5f5f5;
            color: #333;
            padding: 2rem 1rem;
          }
          .wrapper { max-width: 900px; margin: 0 auto; }
          h1 {
            font-size: 1.5rem;
            margin-bottom: 0.25rem;
            color: #111;
          }
          .meta {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1.5rem;
          }
          table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,.08);
          }
          thead tr { background: #1a1a2e; color: #fff; }
          th, td {
            padding: 0.75rem 1rem;
            text-align: left;
            font-size: 0.875rem;
          }
          tbody tr:nth-child(even) { background: #f9f9f9; }
          tbody tr:hover { background: #eef2ff; }
          td a {
            color: #2563eb;
            text-decoration: none;
            word-break: break-all;
          }
          td a:hover { text-decoration: underline; }
          .badge {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            background: #e0e7ff;
            color: #3730a3;
          }
        </style>
      </head>
      <body>
        <div class="wrapper">
          <h1>Turbo Hills — XML Sitemap</h1>
          <p class="meta">
            <xsl:value-of select="count(sm:urlset/sm:url)"/> URLs indexed.
            This sitemap is for search engines; it is automatically generated.
          </p>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>URL</th>
                <th>Last Modified</th>
                <th>hreflang</th>
              </tr>
            </thead>
            <tbody>
              <xsl:for-each select="sm:urlset/sm:url">
                <tr>
                  <td><xsl:value-of select="position()"/></td>
                  <td>
                    <a href="{sm:loc}">
                      <xsl:value-of select="sm:loc"/>
                    </a>
                  </td>
                  <td><xsl:value-of select="sm:lastmod"/></td>
                  <td>
                    <xsl:for-each select="xhtml:link">
                      <span class="badge"><xsl:value-of select="@hreflang"/></span>&#160;
                    </xsl:for-each>
                  </td>
                </tr>
              </xsl:for-each>
            </tbody>
          </table>
        </div>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
