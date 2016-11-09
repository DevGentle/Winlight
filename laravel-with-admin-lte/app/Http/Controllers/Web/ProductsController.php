<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);

        return view('web.product.index', compact('products'));
    }

    public function findProduct($Id)
    {
        $product = Product::findOrFail($Id);

        return view('web.product.item', compact('product'));
    }

    public function productsByMainCat($categoryId)
    {
        $productMainCategories = ProductMainCategory::findOrFail($categoryId);
        $products = $productMainCategories->products()->paginate(15);

        return view('web.product.index', compact('products'));
    }
}
