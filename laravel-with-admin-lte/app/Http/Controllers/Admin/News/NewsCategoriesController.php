<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Requests\NewsCategoryRequest;
use App\Model\Paper\NewsCategory;
use App\Model\Photo\Photo;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use App\Http\Requests;
use Nayjest\Grids\ObjectDataRow;
use App\Http\Controllers\Controller;

class NewsCategoriesController extends Controller
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
                    new EloquentDataProvider(NewsCategory::query())
                )
                ->setName('news_categories')
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
                        ->setName('created_at')
                        ->setLabel('Created at')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('created_at')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        ),
                    (new FieldConfig)
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $edit = action('Admin\News\NewsCategoriesController@edit', ['id' => $val]);
                            $remove = action('Admin\News\NewsCategoriesController@destroy', ['id' => $val]);
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

        return view('admin.newsCategory.index', compact('grid'));
    }

    public function create()
    {
        return view('admin.newsCategory.create');
    }

    public function store(NewsCategoryRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/newsCategory/' . time() . $file->getClientOriginalName();

            $file->move('images/newsCategory', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        NewsCategory::create($input);

        return redirect('admin/news-categories');
    }

    public function edit($id)
    {
        $newsCategories = NewsCategory::findOrFail($id);

        return view('admin.newsCategory.edit', compact('newsCategories'));
    }

    public function update(NewsCategoryRequest $request, $id)
    {
        $newsCategories = NewsCategory::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/newsCategory/' . time() . $file->getClientOriginalName();

            $file->move('images/newsCategory', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $newsCategories->update($input);

        return redirect('admin/news-categories');
    }

    public function destroy($id)
    {
        NewsCategory::whereId($id)->delete();

        return redirect('admin/news-categories');
    }
}
