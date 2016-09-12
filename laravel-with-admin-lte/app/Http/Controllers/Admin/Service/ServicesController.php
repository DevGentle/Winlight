<?php

namespace App\Http\Controllers\Admin\Service;

use App\Model\Photo\Photo;
use App\Model\Service\Service;
use App\Model\Service\ServiceCategory;
use Illuminate\Http\Request;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;

class ServicesController extends Controller
{
    public function index()
    {
        $grid = new Grid(
            (new GridConfig)
                ->setDataProvider(
                    new EloquentDataProvider(Service::query())
                )
                ->setName('products')
                ->setPageSize(15)
                ->setColumns([
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('ID')
                        ->setSortable(true),
                    (new FieldConfig)
                        ->setName('image_id')
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
                        ->setName('service_category_id')
                        ->setLabel('Service category')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('service_category_id')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $serviceCat = ServiceCategory::find($val);
                            return $serviceCat->title;
                        }),
                    (new FieldConfig)
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Actions')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Service\ServicesController@edit', ['id' => $val]);
                            $remove = action('Admin\Service\ServicesController@destroy', ['id' => $val]);
                            $icon =
                                '<div class="btn-group">
                                    <a href="#" class="glyphicon glyphicon-cog"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="' . $edit . '">Edit</a>
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

        return view('admin.service.index', compact('grid'));
    }

    public function create()
    {
        $serviceCategory = ServiceCategory::lists('title', 'id')->all();

        return view('admin.service.create', compact('serviceCategory'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($file = $request->file('image_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['image_id'] = $photo->id;

        }

        Service::create($input);

        return redirect('admin/services');
    }

    public function show($id)
    {
        $services = Service::findOrFail($id);

        return view('admin.service.show', compact('services'));
    }

    public function edit($id)
    {
        $services = Service::findOrFail($id);
        $serviceCategory = ServiceCategory::lists('title', 'id')->all();

        return view('admin.service.edit', compact('services', 'serviceCategory'));
    }

    public function update(Request $request, $id)
    {
        $services = Service::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('image_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $photo = Photo::create(['file'=> $name]);

            $input['image_id'] = $photo->id;

        }

        $services->update($input);

        return redirect('admin/services');
    }

    public function destroy($id)
    {
        Service::whereId($id)->delete();

        return "Done";
    }
}
