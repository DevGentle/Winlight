<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Requests\PromotionRequest;
use App\Model\Photo\Photo;
use App\Model\Promotion\Promotion;
use App\Model\Product\Product;
use Intervention\Image\Facades\Image;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
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
                    new EloquentDataProvider(Promotion::query())
                )
                ->setName('promotions')
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
                        ->setName('product_id')
                        ->setLabel('Product Name')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('product_id')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $product = Product::find($val);
                            return $product->title;
                        }),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Promotion\PromotionsController@edit', ['id' => $val]);
                            $remove = action('Admin\Promotion\PromotionsController@destroy', ['id' => $val]);
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

        return view('admin.promotion.index', compact('grid'));
    }

    public function create()
    {
        $product = Product::pluck('title', 'id')->all();

        return view('admin.promotion.create', compact('product'));
    }

    public function store(PromotionRequest $request)
    {
        $input = $request->all();

        $promotion = new Promotion();

        if ($file = $request->file('photo_id')) {

            $name = '/images/promotion/' . time() . $file->getClientOriginalName();

            $file->move('images/promotion', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        $promotion->fill($input);

        $promotion->save();

//        Session::flash('success', 'Yes !');

        return redirect('admin/promotions');
    }

    public function edit($id)
    {
        $product = Product::pluck('title', 'id')->all();

        $promotion = Promotion::findOrFail($id);

        return view('admin.promotion.edit', compact('product', 'promotion'));
    }

    public function update(PromotionRequest $request, $id)
    {
        $promotion = Promotion::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/promotion/' . time() . $file->getClientOriginalName();

            $file->move('images/promotion', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $promotion->update($input);

        return redirect('admin/promotions');
    }

    public function destroy($id)
    {
        Promotion::whereId($id)->delete();

        return redirect('admin/promotions');
    }
}
