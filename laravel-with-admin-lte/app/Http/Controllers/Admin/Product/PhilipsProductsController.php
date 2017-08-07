<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests\PhilipsProductRequest;
use App\Model\Photo\Photo;
use App\Model\Product\PhilipsProduct;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Http\Controllers\Controller;

class PhilipsProductsController extends Controller
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
                    new EloquentDataProvider(PhilipsProduct::query())
                )
                ->setName('philips_products')
                ->setPageSize(15)
                ->setColumns([
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('ID')
                        ->setSortable(true),
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
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Product\PhilipsProductsController@edit', ['id' => $val]);
                            $remove = action('Admin\Product\PhilipsProductsController@destroy', ['id' => $val]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="' . $edit . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                        </li>
                                        <li>
                                            <a data-token="'. csrf_token() .'" class="delete-btn text-red" href="'.$remove.'">
                                            <i class="glyphicon glyphicon-trash"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>';

                            return $icon;
                        })
                ])
        );
        $grid = $grid->render();

        return view('admin.philipsProduct.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.philipsProduct.create');
    }

    public function store(PhilipsProductRequest $request)
    {
        $input = $request->all();

        $philipsProduct = new PhilipsProduct();

        if ($file = $request->file('photo_id')) {

            $name = '/images/philips-product/' . time() . $file->getClientOriginalName();

            $file->move('images/philips-product', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        $philipsProduct->fill($input);

        $philipsProduct->save();

        return redirect('admin/philips-product');
    }

    public function edit($id)
    {
        $philipsProduct = PhilipsProduct::findOrFail($id);

        return view('admin.philipsProduct.edit', compact('philipsProduct'));
    }

    public function update(PhilipsProductRequest $request, $id)
    {
        $philipsProduct = PhilipsProduct::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/philips-product/' . time() . $file->getClientOriginalName();

            $file->move('images/philips-product', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $philipsProduct->update($input);

        return redirect('admin/philips-product');
    }

    public function destroy($id)
    {
        PhilipsProduct::whereId($id)->delete();

        return redirect('admin/philips-product');
    }
}
