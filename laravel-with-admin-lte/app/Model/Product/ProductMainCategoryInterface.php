<?php

namespace App\Model\Product;

interface ProductMainCategoryInterface
{
    public function productSubCategories();

    public function products();

    public function photo();
}
