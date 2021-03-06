<?php

namespace App\Http\Controllers\Admin\Slideshow;

use App\Http\Requests\SlideShowRequest;
use App\Model\Slideshow\Slideshow;
use App\Model\Photo\Photo;
use Illuminate\Support\Facades\DB;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;

class SlideshowsController extends Controller
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
                    new EloquentDataProvider(Slideshow::query())
                )
                ->setName('slideshows')
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
                        ->setName('created_at')
                        ->setLabel('Created at'),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Actions')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\Slideshow\SlideshowsController@edit', ['id' => $val]);
                            $remove = action('Admin\Slideshow\SlideshowsController@destroy', ['id' => $val]);
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

        return view('admin.slideshow.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.slideshow.create');
    }

    public function store(SlideShowRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {
            
            $name = '/images/slideShow/' . time() . $file->getClientOriginalName();

            $file->move('images/slideShow', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        Slideshow::create($input);

        return redirect('admin/slideshow/nav');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slide = Slideshow::findOrFail($id);

        return view('admin.slideshow.edit', compact('slide'));
    }

    public function update(SlideShowRequest $request, $id)
    {
        $slide = Slideshow::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/slideShow/' . time() . $file->getClientOriginalName();

            $file->move('images/slideShow', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $slide->update($input);

        return redirect('admin/slideshow/nav');
    }

    public function destroy($id)
    {
        Slideshow::whereId($id)->delete();

        return "Done";
    }

    public function findAll()
    {
        $slidesShow = DB::table('slideshows')->get();

        return view('web.main.nav', compact('slidesShow'));
    }
}
