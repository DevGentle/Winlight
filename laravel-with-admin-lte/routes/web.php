<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Tag;
use App\Taggable;
use App\User;
use App\Country;
use App\Post;
use App\Photo;
use Carbon\Carbon;
use App\Model\Paper\News;
use App\Model\Product\ProductMainCategory;
use App\Model\Product\ProductSubCategory;
use App\Http\Controllers\Admin\Slideshow\SlideshowsController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Front-end routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', function () {
    $news = News::all()->sortByDesc('created_at');

    return view('web.main.index', compact('news'));
});
Route::get('/about-us', function () {
    return view('web.about.story');
});
Route::get('contact-us', 'Web\ContactsController@getContact');
Route::post('contact-us', 'Web\ContactsController@postContact');
Route::get('events', 'Web\EventsController@findEventAll');
Route::get('event/{eventId}', 'Web\EventsController@findEvent')->name('web.event.show');
Route::get('products', 'Web\ProductsController@index');
Route::get('product/download/philips', 'Web\ProductsController@philipsDownload');
Route::get('product/download/winner-products', 'Web\ProductsController@winnerProductsDownload');
Route::get('product-category/{categoryId}', 'Web\ProductsController@productsByMainCat')->name('web.product.category');
Route::get('product-sub-category/{subCategoryId}', 'Web\ProductsController@productBySubCat')->name('web.product.subCategory');
Route::get('products/{Id}', 'Web\ProductsController@findProduct')->name('web.product.item');
Route::get('references', 'Web\ReferencesController@findReferenceAll');
Route::get('services', 'Web\ServicesController@findServiceAll');

/*
|--------------------------------------------------------------------------
| Backend-end routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'Admin\Contact\ContactsController');
    Route::resource('download/philips', 'Admin\download\PhilipsController');
    Route::resource('download/winner-products', 'Admin\download\WinnerProductsController');
    Route::resource('news-categories', 'Admin\News\NewsCategoriesController');
    Route::resource('news', 'Admin\News\NewsController');
    Route::resource('product-main-categories', 'Admin\Product\ProductMainCategoriesController');
    Route::resource('product-sub-categories', 'Admin\Product\ProductSubCategoriesController');
    Route::resource('products', 'Admin\Product\ProductsController');
    Route::resource('service-categories', 'Admin\Service\ServiceCategoriesController');
    Route::resource('services', 'Admin\Service\ServicesController');
    Route::resource('slideshows', 'Admin\Slideshow\SlideshowsController');
    Route::resource('references', 'Admin\Reference\ReferencesController');
    Route::resource('posts', 'PostsController');
    Route::resource('users', 'AdminUsersController');
});

//Route::get('/', function () {
//    return view('welcome');
//});
