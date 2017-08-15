<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>http://www.winnerlight.co.th/</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.winnerlight.co.th/about-us</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.winnerlight.co.th/promotion</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach($promotions as $promotion)
        <url>
            <loc>http://www.winnerlight.co.th/promotion/{{ $promotion->id }}/{{ $promotion->title }}</loc>
            {{--<lastmod>{{ date('Y-m-dTh:m:s.sTZD', strtotime($promotion->updated_at)) }}</lastmod>--}}
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>http://www.winnerlight.co.th/products</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach($productMainCategories as $productMainCategory)
        <url>
            <loc>http://www.winnerlight.co.th/product-main-category/{{ $productMainCategory->id }}/{{ $productMainCategory->getSlug() }}</loc>
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    @foreach($productSubCategories as $productSubCategory)
        <url>
            <loc>http://www.winnerlight.co.th/product-sub-category/{{ $productSubCategory->id }}/{{ $productSubCategory->getSlug() }}</loc>
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>http://www.winnerlight.co.th/events</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach($news as $n)
        <url>
            <loc>http://www.winnerlight.co.th/event/{{ $n->id }}/{{ $n->title }}</loc>
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>http://www.winnerlight.co.th/services</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.winnerlight.co.th/references</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>http://www.winnerlight.co.th/contact-us</loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
