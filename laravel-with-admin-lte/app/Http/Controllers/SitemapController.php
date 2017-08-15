<?php

namespace App\Http\Controllers;

use App\Model\Paper\News;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Model\Product\ProductSubCategory;
use App\Model\Promotion\Promotion;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $promotion = Promotion::all()->sortByDesc('created_at');
        $productMainCat = ProductMainCategory::all();
        $productSubCat = ProductSubCategory::all();
        $news = News::all()->sortByDesc('created_at');

        return response()->view('web.sitemap.index', [
            'promotions' => $promotion,
            'productMainCategories' => $productMainCat,
            'productSubCategories' => $productSubCat,
            'news' => $news
        ])->header('Content-Type', 'text/xml');
    }

    public function productList()
    {
        $product = Product::all();

        return response()->view('web.sitemap.product', [
            'products' => $product
        ])->header('Content-Type', 'text/xml');
    }
}
