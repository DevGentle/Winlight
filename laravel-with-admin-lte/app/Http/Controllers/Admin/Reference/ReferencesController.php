<?php

namespace App\Http\Controllers\Admin\Reference;

use App\Http\Requests\ReferenceRequest;
use App\Model\Photo\Photo;
use App\Model\Photo\PhotoReference;
use App\Model\Reference\Reference;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;

class ReferencesController extends Controller
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
                    new EloquentDataProvider(Reference::query())
                )
                ->setName('products')
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
                        ->setName('link')
                        ->setLabel('Link')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('link')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        ),
                    (new FieldConfig)
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Actions')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Reference\ReferencesController@edit', ['id' => $val]);
                            $remove = action('Admin\Reference\ReferencesController@destroy', ['id' => $val]);
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

        return view('admin.projectReference.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.projectReference.create');
    }

    public function store(ReferenceRequest $request)
    {
        $input = $request->all();

        $reference = new Reference();

        if ($image = $request->file('cover')) {

            $name = '/images/reference/' . time() . $image->getClientOriginalName();

            $image->move('images/reference', $name);

            $input['cover'] = $name;
        }

        $reference->fill($input);

        $reference->save();

        if ($files = $request->file('file')) {

            $photos = [];

            foreach ($files as $file) {
                $name = '/images/reference/' . time() . $file->getClientOriginalName();

                $file->move('images/reference', $name);

                $photo = PhotoReference::create(['file' => $name]);

                $photos[] = $photo;
            }
            $reference->photos()->saveMany($photos);
        }

        return redirect('admin/references');
    }

    public function show($id)
    {
        $references = Reference::findOrFail($id);

        return view('admin.projectReference.show', compact('references'));
    }

    public function edit($id)
    {
        $references = Reference::findOrFail($id);

        return view('admin.projectReference.edit', compact('references'));
    }

    public function update(ReferenceRequest $request, $id)
    {
        $references = Reference::findOrFail($id);

        $input = $request->all();

        if (count($request->input('delete-photo')) > 0 ) {
            foreach ($request->input('delete-photo') as $photo) {
                $p = PhotoReference::find($photo);
                $p->delete();
            }
        }

        if ($image = $request->file('cover')) {

            $name = '/images/reference/' . time() . $image->getClientOriginalName();

            $image->move('images/reference', $name);

            $input['cover'] = $name;
        }

        if ($files = $request->file('file')) {

            $photos = [];

            foreach ($files as $file) {
                $name = '/images/reference/' . time() . $file->getClientOriginalName();

                $file->move('images/reference', $name);

                $photo = PhotoReference::create(['file' => $name]);

                $photos[] = $photo;
            }
            $references->photos()->saveMany($photos);
        }

        $references->update($input);

        return redirect('admin/references');
    }

    public function destroy($id)
    {
        Reference::whereId($id)->delete();

        return redirect('admin/references');
    }
}
