<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests\ProductMainCategoryRequest;
use App\Model\Photo\Photo;
use App\Model\Product\ProductMainCategory;
use Illuminate\Http\Request;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;

class ProductMainCategoriesController extends Controller
{
    public function index()
    {
        $grid = new Grid(
            (new GridConfig)
                ->setDataProvider(
                    new EloquentDataProvider(ProductMainCategory::query())
                )
                ->setName('products')
                ->setPageSize(15)
                ->setColumns([
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('ID')
                        ->setSortable(true),
                    (new FieldConfig)
                        ->setName('photo_id')
                        ->setLabel('Image')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $photo = Photo::find($val);
                            $path = $photo->file;

                            $img =
                                '<div>
                                    <img height="50" src="/images/'.$path.'">
                                </div>'
                            ;

                            return $img;
                        }),
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
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('action')
                        ->setLabel('Actions')
                        ->setCallback(function ($id) {
                            $edit = action('Admin\Product\ProductMainCategoriesController@edit', ['id' => $id]);
                            $remove = action('Admin\Product\ProductMainCategoriesController@destroy', ['id' => $id]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog" 
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="'.$edit.'" class="glyphicon glyphicon-pencil"> Edit</a>
                                        </li>
                                        <li>
                                            <a href="'.$remove.'" class="glyphicon glyphicon-trash text-red"> Delete</a>
                                        </li>
                                    </ul>
                                </div>';

                            return
                                $icon
                                ;
                        })
                ])
        );
        $grid = $grid->render();

        return view('admin.productMainCategory.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.productMainCategory.create');
    }

    public function store(ProductMainCategoryRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        ProductMainCategory::create($input);

        return redirect('admin/product-main-categories');
    }

    public function show($id)
    {
        $productMainCategories = ProductMainCategory::findOrFail($id);

        return view('admin.productMainCategory.show', compact('productMainCategories'));
    }

    public function edit($id)
    {
        $productMainCategories = ProductMainCategory::findOrFail($id);

        return view('admin.productMainCategory.edit', compact('productMainCategories'));
    }

    public function update(Request $request, $id)
    {
        $productMainCategories = ProductMainCategory::findOrFail($id);

        $productMainCategories->update($request->all());

        return redirect('admin/product-main-categories');
    }

    public function destroy($id)
    {
        ProductMainCategory::whereId($id)->delete();

        return redirect('admin/product-main-categories');
    }
}
