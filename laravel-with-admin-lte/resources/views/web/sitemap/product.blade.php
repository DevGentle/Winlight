<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    @foreach($products as $product)
        <url>
            <loc>http://www.winnerlight.co.th/product/{{ $product->id }}/{{ $product->getSlug() }}</loc>
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
</urlset>

