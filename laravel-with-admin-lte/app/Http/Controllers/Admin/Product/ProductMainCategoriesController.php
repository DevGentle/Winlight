<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests\ProductMainCategoryRequest;
use App\Model\Photo\Photo;
use App\Model\Product\ProductMainCategory as MainCategory;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $grid = new Grid(
            (new GridConfig)
                ->setDataProvider(
                    new EloquentDataProvider(MainCategory::query())
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
                                    <img height="50" src="'.$path.'">
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
                        ->setName('id')
                        ->setLabel('Actions')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Product\ProductMainCategoriesController@edit', ['id' => $val]);
                            $remove = action('Admin\Product\ProductMainCategoriesController@destroy', ['id' => $val]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="' . $edit . '" class="glyphicon glyphicon-pencil"> Edit</a>
                                        </li>
                                        <li>
                                            <a data-token="'. csrf_token() .'" class="delete-btn text-red" href="'.$remove.'">Delete</a>
                                        </li>
                                    </ul>
                                </div>';

                            return $icon;
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

            $name = '/images/productMainCategory/' . $file->getClientOriginalName();

            $file->move('images/productMainCategory', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        MainCategory::create($input);

        return redirect('admin/product-main-categories');
    }

    public function show($id)
    {
        $productMainCategories = MainCategory::findOrFail($id);

        return view('admin.productMainCategory.show', compact('productMainCategories'));
    }

    public function edit($id)
    {
        $productMainCategories = MainCategory::findOrFail($id);

        return view('admin.productMainCategory.edit', compact('productMainCategories'));
    }

    public function update(ProductMainCategoryRequest $request, $id)
    {
        $productMainCategories = MainCategory::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/productMainCategory/' . $file->getClientOriginalName();

            $file->move('images/productMainCategory', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $productMainCategories->update($input);

        return redirect('admin/product-main-categories');
    }

    public function destroy($id)
    {
        MainCategory::whereId($id)->delete();

        return redirect('admin/product-main-categories');
    }
}
