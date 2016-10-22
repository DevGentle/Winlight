<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Product\ProductMainCategory;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function findProductsByMainCat($id)
    {
        $productMainCategories = ProductMainCategory::find($id);

        return view('web.product.index', compact('productMainCategories'));
    }
}
