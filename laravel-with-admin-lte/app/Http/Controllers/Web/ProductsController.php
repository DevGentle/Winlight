<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function findProductsByMainCat()
    {
        $productMainCategories = ProductMainCategory::all();

        $photoProducts = Product::all();

        return view('web.product.index', compact('productMainCategories', 'photoProducts'));
    }
}
