<?php

use App\Model\Paper\News;
use App\Model\Reference\Reference;
use App\Model\Slideshow\SlideshowPromotion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Front-end routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    $news = News::all()->sortByDesc('created_at');
    $references = Reference::all();
    $slides = SlideshowPromotion::all()->sortByDesc('created_at');
    $promotions = DB::table('promotions')->orderBy('created_at', 'desc')->limit(3)->get();

    return view('web.main.index', compact('news', 'references', 'slides', 'promotions'));
});
Route::get('/about-us', function () {
    return view('web.about.story');
});
Route::get('contact-us', 'Web\ContactsController@getContact')->name('web.contact-us.index');
Route::post('contact-us', 'Web\ContactsController@postContact');

Route::get('events', 'Web\EventsController@findEventAll');
Route::get('event/{eventId}/{eventTitle}', 'Web\EventsController@findEvent')->name('web.event.show');

Route::get('products', 'Web\ProductsController@index');
Route::get('product/philips', 'Web\ProductsController@allPhilipsProduct');
Route::get('product/philips/{id}', 'Web\ProductsController@findPhilipsProduct')->name('web.product.philips.show');
Route::get('product/download/philips', 'Web\ProductsController@philipsProductsDownload');
Route::get('product/download/winner-products', 'Web\ProductsController@winnerProductsDownload');
Route::get('product-main-category/{categoryId}/{categoryTitle}', 'Web\ProductsController@productsByMainCat')->name('web.product.category');
Route::get('product-sub-category/{subCategoryId}/{subCategoryTitle}', 'Web\ProductsController@productBySubCat')->name('web.product.subCategory');
Route::get('product/{Id}/{title}', 'Web\ProductsController@findProduct')->name('web.product.item');

Route::get('promotion', 'Web\PromotionController@all')->name('web.promotion.index');
Route::get('promotion/{id}/{title}', 'Web\PromotionController@findPromotion')->name('web.promotion.show');

Route::get('references', 'Web\ReferencesController@findReferenceAll');
Route::get('services', 'Web\ServicesController@findServiceAll');

Route::get('sitemap.xml', 'SitemapController@index');
Route::get('sitemap-products.xml', 'SitemapController@productList');

/*
|--------------------------------------------------------------------------
| Backend-end routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'Admin\Contact\ContactsController');
    Route::resource('download/philips', 'Admin\Download\PhilipsController');
    Route::resource('download/winner-products', 'Admin\Download\WinnerProductsController');
    Route::resource('news-categories', 'Admin\News\NewsCategoriesController');
    Route::resource('news', 'Admin\News\NewsController');
    Route::resource('product-main-categories', 'Admin\Product\ProductMainCategoriesController');
    Route::resource('product-sub-categories', 'Admin\Product\ProductSubCategoriesController');
    Route::resource('products', 'Admin\Product\ProductsController');
    Route::resource('philips-product', 'Admin\Product\PhilipsProductsController');
    Route::resource('promotions', 'Admin\Promotion\PromotionsController');
    Route::resource('service-categories', 'Admin\Service\ServiceCategoriesController');
    Route::resource('services', 'Admin\Service\ServicesController');
    Route::resource('slideshow/nav', 'Admin\Slideshow\SlideshowsController');
    Route::resource('slideshow/promotion', 'Admin\Slideshow\SlideshowPromotionsController');
    Route::resource('references', 'Admin\Reference\ReferencesController');
    Route::resource('posts', 'PostsController');
    Route::resource('users', 'AdminUsersController');
});

//Route::get('/', function () {
//    return view('welcome');
//});
