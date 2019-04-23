<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>{{ route('trangchu.menu.master') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>

</urlset>
