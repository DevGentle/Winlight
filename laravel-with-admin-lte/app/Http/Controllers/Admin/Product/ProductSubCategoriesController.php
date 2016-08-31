<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests;
use App\Model\Product\ProductMainCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Photo\Photo;
use App\Model\Product\ProductSubCategory;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\ObjectDataRow;

class ProductSubCategoriesController extends Controller
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
                    new EloquentDataProvider(ProductSubCategory::query())
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
//                    (new FieldConfig)
//                        ->setName('category_main_id')
//                        ->setLabel('Category Main')
//                        ->setSortable(true)
//                        ->addFilter(
//                            (new FilterConfig)
//                                ->setName('category_main_id')
//                                ->setOperator(FilterConfig::OPERATOR_LIKE)
//                        )
//                        ->setCallback(function ($val, ObjectDataRow $row) {
//                            $mainCat = ProductMainCategory::find($val);
//                            return $mainCat->title;
//                        }),
                    (new FieldConfig)
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('action')
                        ->setLabel('Actions')
                        ->setCallback(function ($id) {
                            $edit = action('Admin\Product\ProductSubCategoriesController@edit', ['id' => $id]);
                            $remove = action('Admin\Product\ProductSubCategoriesController@destroy', ['id' => $id]);
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

        return view('admin.productSubCategory.index', compact('grid'));
    }

    public function create()
    {
        $productMainCategory = ProductMainCategory::lists('title', 'id')->all();
        return view('admin.productSubCategory.create', compact('productMainCategory'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        dump($input);
//        exit();

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        ProductSubCategory::create($input);

        return redirect('admin/product-sub-categories');
    }

    public function show($id)
    {
        $productSubCategories = ProductSubCategory::findOrFail($id);

        return view('admin.productSubCategory.show', compact('productSubCategories'));
    }

    public function edit($id)
    {
        $productSubCategories = ProductSubCategory::findOrFail($id);

        return view('admin.productSubCategory.edit', compact('productSubCategories'));
    }

    public function update(Request $request, $id)
    {
        $productSubCategories = ProductSubCategory::findOrFail($id);

        $productSubCategories->update($request->all());

        return redirect('admin/product-sub-categories');
    }

    public function destroy($id)
    {
        ProductSubCategory::whereId($id)->delete();

        return redirect('admin/product-sub-categories');
    }
}
