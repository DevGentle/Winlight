<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Photo\Photo;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Model\Product\ProductSubCategory;
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
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Product\ProductsController@edit', ['id' => $val]);
                            $remove = action('Admin\Product\ProductsController@destroy', ['id' => $val]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="' . $edit . '" class="glyphicon glyphicon-pencil"> Edit</a>
                                        </li>
                                        
                                    </ul>
                                </div>';

                            return $icon;
                        })
                ])
        );
        $grid = $grid->render();

        return view('admin.products.index', compact('grid'));
    }

    public function create()
    {
        $mainCat = ProductMainCategory::lists('title', 'id')->all();
        $subCat = ProductSubCategory::lists('title', 'id')->all();

        return view('admin.products.create', compact('mainCat', 'subCat'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        Product::create($input);

        return redirect('admin/products');
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);

        return view('admin.products.show', compact('products'));
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $mainCat = ProductMainCategory::lists('title', 'id')->all();
        $subCat = ProductSubCategory::lists('title', 'id')->all();

        return view('admin.products.edit', compact('products', 'mainCat', 'subCat'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        $products->update($input);

        return redirect('admin/products');
    }

    public function destroy($id)
    {
        Product::whereId($id)->delete();

        return redirect('admin/products');
    }
}
