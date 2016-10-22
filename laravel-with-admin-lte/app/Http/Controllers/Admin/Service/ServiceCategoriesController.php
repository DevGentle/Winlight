<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Requests\ServiceCategoryRequest;
use App\Model\Photo\Photo;
use App\Model\Service\ServiceCategory;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;

class ServiceCategoriesController extends Controller
{
    public function index()
    {
        $grid = new Grid(
            (new GridConfig)
                ->setDataProvider(
                    new EloquentDataProvider(ServiceCategory::query())
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
                            $edit = action('Admin\Service\ServiceCategoriesController@edit', ['id' => $val]);
                            $remove = action('Admin\Service\ServiceCategoriesController@destroy', ['id' => $val]);
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

        return view('admin.serviceCategory.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.serviceCategory.create');
    }

    public function store(ServiceCategoryRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/serviceCategory/' . $file->getClientOriginalName();

            $file->move('images/serviceCategory', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        ServiceCategory::create($input);

        return redirect('admin/service-categories');
    }

    public function show($id)
    {
        $serviceCategories = ServiceCategory::findOrFail($id);

        return view('admin.serviceCategory.show', compact('serviceCategories'));
    }

    public function edit($id)
    {
        $serviceCategories = ServiceCategory::findOrFail($id);

        return view('admin.serviceCategory.edit', compact('serviceCategories'));
    }

    public function update(ServiceCategoryRequest $request, $id)
    {
        $serviceCategories = ServiceCategory::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/serviceCategory/' . $file->getClientOriginalName();

            $file->move('images/serviceCategory', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $serviceCategories->update($input);

        return redirect('admin/service-categories');
    }

    public function destroy($id)
    {
        ServiceCategory::whereId($id)->delete();

        return redirect('admin/service-categories');
    }
}
