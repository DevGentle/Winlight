<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Requests\NewsRequest;
use App\Model\Paper\News;
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

class NewsController extends Controller
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
                    new EloquentDataProvider(News::query())
                )
                ->setName('news')
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
                        ->setName('news_category_id')
                        ->setLabel('News category')
                        ->setSortable(true)
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('news_category_id')
                                ->setOperator(FilterConfig::OPERATOR_LIKE)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $newsCategory = NewsCategory::find($val);
                            return $newsCategory->title;
                        }),
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
                            $edit = action('Admin\News\NewsController@edit', ['id' => $val]);
                            $remove = action('Admin\News\NewsController@destroy', ['id' => $val]);
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

        return view('admin.news.index', compact('grid'));
    }

    public function create()
    {
        $newsCategory = NewsCategory::lists('title', 'id')->all();

        return view('admin.news.create', compact('newsCategory'));
    }

    public function store(NewsRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/news/' . $file->getClientOriginalName();

            $file->move('images/news', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo->id;

        }

        News::create($input);

        return redirect('admin/news');
    }

    public function edit($id)
    {
        $newsCategory = NewsCategory::lists('title', 'id')->all();

        $news = News::findOrFail($id);

        return view('admin.news.edit', compact('news', 'newsCategory'));
    }

    public function update(NewsRequest $request, $id)
    {
        $news = News::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('photo_id')) {

            $name = '/images/news/' . $file->getClientOriginalName();

            $file->move('images/news', $name);

            $photo = new Photo();

            $photo->file = $name;

            $photo->save();

            $input['photo_id'] = $photo->id;

        }

        $news->update($input);

        return redirect('admin/news');
    }

    public function destroy($id)
    {
        News::whereId($id)->delete();

        return redirect('admin/news');
    }
}
