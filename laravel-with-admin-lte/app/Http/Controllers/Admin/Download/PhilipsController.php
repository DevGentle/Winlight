<?php

namespace App\Http\Controllers\Admin\Download;

use App\Http\Requests\PhilipsRequest;
use App\Model\Download\Philips;
use App\Model\Photo\Photo;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;
use App\Http\Controllers\Controller;

class PhilipsController extends Controller
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
                    new EloquentDataProvider(Philips::query())
                )
                ->setName('philips')
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
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Download\PhilipsController@edit', ['id' => $val]);
                            $remove = action('Admin\Download\PhilipsController@destroy', ['id' => $val]);
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

        return view('admin.philips.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.philips.create');
    }

    public function store(PhilipsRequest $request)
    {
        $input = $request->all();

        $philips = new Philips();

        if ($pdf = $request->file('file')) {

            $name = '/download/philips/' . time() . $pdf->getClientOriginalName();

            $pdf->move('download/philips', $name);

            $input['file'] = $name;
        }

        if ($file = $request->file('photo_id')) {

            $name = '/images/download/philips/' . time() . $file->getClientOriginalName();

            $file->move('images/download/philips', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        $philips->fill($input);

        $philips->save();

        return redirect('admin/download/philips');
    }

    public function edit($id)
    {
        $philips = Philips::findOrFail($id);

        return view('admin.philips.edit', compact('philips'));
    }

    public function update(PhilipsRequest $request, $id)
    {
        $philips = Philips::findOrFail($id);

        $input = $request->all();

        if ($pdf = $request->file('file')) {

            $name = '/download/philips/' . time() . $pdf->getClientOriginalName();

            $pdf->move('download/philips', $name);

            $input['file'] = $name;
        }

        if ($file = $request->file('photo_id')) {

            $name = '/images/download/philips/' . time() . $file->getClientOriginalName();

            $file->move('images/download/philips', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;
        }

        $philips->update($input);

        return redirect('admin/download/philips');
    }

    public function destroy($id)
    {
        Philips::whereId($id)->delete();

        return redirect('admin/download/philips');
    }
}
