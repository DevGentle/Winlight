<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Requests\ServiceRequest;
use App\Model\Photo\Photo;
use App\Model\Service\Service;
use App\Model\Service\ServiceCategory;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="' . $edit . '"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
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

        return view('admin.service.index', compact('grid'));
    }

    public function create()
    {
        $serviceCategory = ServiceCategory::pluck('title', 'id')->all();

        return view('admin.service.create', compact('serviceCategory'));
    }

    public function store(ServiceRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/service/' . time() . $file->getClientOriginalName();

            $file->move('images/service', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

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
        $serviceCategory = ServiceCategory::pluck('title', 'id')->all();

        return view('admin.service.edit', compact('services', 'serviceCategory'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $services = Service::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/service/' . time() . $file->getClientOriginalName();

            $file->move('images/service', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

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
