<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function findProductCategoriesAll()
    {
        $productMainCategories = DB::table('product_main_categories')->get();

        return view('web.product.index', compact('productMainCategories'));
    }
}
