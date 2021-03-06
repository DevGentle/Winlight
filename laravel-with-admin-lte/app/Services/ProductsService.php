<?php

namespace App\Services;

use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;

class ProductsService
{
    public function findProductMainCategories()
    {
        $productMainCategories = ProductMainCategory::all();

        return view('web.product.index', compact('productMainCategories'));
    }

    public function findProductByMainCategory()
    {
        $products = Product::all();

        return view('web.product.index', compact('products'));
    }
}
