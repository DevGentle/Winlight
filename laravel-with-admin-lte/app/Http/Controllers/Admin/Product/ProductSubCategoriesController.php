<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests;
use App\Http\Requests\ProductSubCategoryRequest;
use App\Model\Product\ProductSubCategory as SubCategory;
use App\Model\Product\ProductMainCategory as MainCategory;
use App\Http\Controllers\Controller;
use App\Model\Photo\Photo;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\ObjectDataRow;

class ProductSubCategoriesController extends Controller
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
                    new EloquentDataProvider(SubCategory::query())
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
                            if ($photo = Photo::find($val)) {
                                $path = $photo->file;

                                $img =
                                    '<div>
                                        <img height="50" src="'.$path.'">
                                    </div>'
                                ;

                                return $img;
                            }

                            $img = '<div>No image</div>';

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
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Actions')
                        ->setCallback(function ($id) {
                            $edit = action('Admin\Product\ProductSubCategoriesController@edit', ['id' => $id]);
                            $remove = action('Admin\Product\ProductSubCategoriesController@destroy', ['id' => $id]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog" 
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="'.$edit.'"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a data-token="'. csrf_token() .'" class="delete-btn text-red" href="'.$remove.'"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>';

                            return $icon;
                        })
                ])
        );
        $grid = $grid->render();

        return view('admin.productSubCategory.index', compact('grid'));
    }

    public function create()
    {
        $productMainCategory = MainCategory::pluck('title', 'id')->all();
        return view('admin.productSubCategory.create', compact('productMainCategory'));
    }

    public function store(ProductSubCategoryRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/productSubCategory/' . time() . $file->getClientOriginalName();

            $file->move('images/productSubCategory', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

//        dump($request->input('category_main_id'));exit;

        SubCategory::create($input);

        return redirect('admin/product-sub-categories');
    }

    public function show($id)
    {
        $productSubCategories = SubCategory::findOrFail($id);

        return view('admin.productSubCategory.show', compact('productSubCategories'));
    }

    public function edit($id)
    {
        $productMainCategory = MainCategory::pluck('title', 'id')->all();
        $productSubCategories = SubCategory::findOrFail($id);

        return view('admin.productSubCategory.edit', compact('productSubCategories', 'productMainCategory'));
    }

    public function update(ProductSubCategoryRequest $request, $id)
    {
        $productSubCategories = SubCategory::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/productSubCategory/' . time() . $file->getClientOriginalName();

            $file->move('images/productSubCategory', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $productSubCategories->update($input);

        return redirect('admin/product-sub-categories');
    }

    public function destroy($id)
    {
        SubCategory::whereId($id)->delete();

        return redirect('admin/product-sub-categories');
    }
}
