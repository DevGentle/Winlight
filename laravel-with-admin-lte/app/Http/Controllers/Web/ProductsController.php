<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Download\Philips;
use App\Model\Download\ProductCatalogs;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Http\Controllers\Controller;
use App\Model\Product\ProductSubCategory;

class ProductsController extends Controller
{
    public function index()
    {
        $productMainCategories = ProductMainCategory::all();

        return view('web.product.index', compact('productMainCategories'));
    }

    public function findProduct($Id)
    {
        $product = Product::findOrFail($Id);

        return view('web.product.item', compact('product'));
    }

    public function productBySubCat($subCategoryId)
    {
        $productSubCategories = ProductSubCategory::findOrFail($subCategoryId);

        $products = $productSubCategories->products()->paginate(9);

        return view('web.product.product_by_sub', compact('products', 'productSubCategories'));
    }

    public function productsByMainCat($categoryId)
    {
        $productMainCategories = ProductMainCategory::findOrFail($categoryId);

        $subCat = $productMainCategories->productSubCategories();

        if($subCat->count()){
            $subCats = $subCat->paginate(9);

            return view('web.product.sub', compact('subCats', 'productMainCategories'));
        } else {
            $products = $productMainCategories->products()->paginate(9);

            return view('web.product.nosub', compact('products', 'productMainCategories'));
        }
    }

    public function philipsDownload()
    {
        $philips = Philips::all();

        return view('web.download.philips.download', compact('philips'));
    }

    public function winnerProductsDownload()
    {
        $catalogs = ProductCatalogs::all();

        return view('web.download.product.download', compact('catalogs'));
    }
}
