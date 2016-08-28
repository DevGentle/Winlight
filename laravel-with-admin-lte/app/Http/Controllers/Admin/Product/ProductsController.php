<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Illuminate\Http\Request;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;
use App\Model\Product\ProductMainCategory as MainCategory;
use App\Model\Product\ProductSubCategory as SubCategory;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grid = new Grid(
            (new GridConfig)
                ->setDataProvider(
                    new EloquentDataProvider(Product::query())
                )
                ->setName('products')
                ->setPageSize(15)
                ->setColumns([
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('ID')
                        ->setSortable(true),
                    (new FieldConfig)
                        ->setName('code')
                        ->setLabel('Code')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('code')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        ),
                    (new FieldConfig)
                        ->setName('title')
                        ->setLabel('Title')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                            ->setName('title')
                            ->setOperator(FilterConfig::OPERATOR_LIKE)
                        ),
                    (new FieldConfig)
                        ->setName('category_main_id')
                        ->setLabel('Category Main')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('category_main_id')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $mainCat = MainCategory::find($val);
                            return $mainCat->title;
                        }),
                    (new FieldConfig)
                        ->setName('category_sub_id')
                        ->setLabel('Category Sub')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('category_sub_id')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $subCat = SubCategory::find($val);
                            return $subCat->title;
                        }),
                    (new FieldConfig)
                        ->setName('action')
                        ->setLabel('Action')
                        ->setCallback(function () {
                            $icon = '<div class="btn-group">
                                <a href="#" class="glyphicon glyphicon-cog" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu" style="width: 50px">
                                <li><a href="#" class="glyphicon glyphicon-pencil" style="width: 50px></a></li>
                                <li><a href="#" class="glyphicon glyphicon-trash red" style="width: 50px"></a></li>
                                </ul>
                                </div>';

                            return
                                $icon
                            ;
                        })
                ])
        );
        $grid = $grid->render();

        return view('admin.products.index', compact('grid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testing = ProductMainCategory::lists('title', 'id')->all();
        return view('admin.products.create', compact('testing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect('admin/product-main-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
