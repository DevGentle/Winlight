<?php

use App\Tag;
use App\Taggable;
use App\User;
use App\Country;
use App\Post;
use App\Photo;
use Carbon\Carbon;
use App\Model\Product\Product;
use App\Model\Product\ProductMainCategory;
use App\Model\Product\ProductSubCategory;
use App\Http\Controllers\Admin\Slideshow\SlideshowsController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Front-end routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('web.main.index');
});
Route::get('/about-us', function () {
    return view('web.about.story');
});
//Route::get('/product/{id}', function ($id) {
//    return view('web.product.item');
//});

Route::get('contact-us', 'Web\ContactsController@findContactAll');
Route::get('category/{id}', 'Web\ProductsController@findProductsByMainCat');
Route::get('reference', 'Web\ReferencesController@findReferenceAll');
Route::get('service', 'Web\ServicesController@findServiceAll');

/*
|--------------------------------------------------------------------------
| Backend-end routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'Admin\Contact\ContactsController');
    Route::resource('news-categories', 'NewsCategoriesController');
    Route::resource('news', 'NewsController');
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


//Route::group(['products'], function () {
//    Route::get('category-main/{id}', function ($id) {
//        return ProductMainCategory::find($id);
//    });
//
//    Route::get('category-sub/{id}', function ($id) {
//        return ProductSubCategory::find($id);
//    });
//
//    Route::get('/product/{id}', function ($id) {
//        return Product::find($id);
//    });
//});

//Route::resource('product-main-categories', 'ProductMainCategoriesController');
//
//Route::resource('product-sub-categories', 'ProductSubCategoriesController');
//
//Route::resource('products', 'ProductsController');
//
//Route::resource('posts', 'PostsController');
//
//    Route::get('dates', function () {
//
//        $date = new DateTime('+1 week');
//
//        echo $date->format('m-d-Y');
//
//        echo '<br>';
//
//        echo Carbon::now()->addDays(10)->diffForHumans();
//
//        echo '<br>';
//
//        echo Carbon::now()->addMonths(10)->diffForHumans();
//
//        echo '<br>';
//
//        echo Carbon::now()->yesterday()->diffForHumans();
//    });
//
//    Route::get('getname', function () {
//
//        $user = User::find(1);
//
//        echo $user->name;
//
//    });
//
//    Route::get('setname', function () {
//
//        $user = User::find(1);
//
//        $user->name = 'godoak';
//
//        $user->save();
//
//    });
//});

//Route::get('/test/{id}/{name}', function ($id, $name) {
//
//    return "My number is ". $id . " " . $name;
//
//});
//
//Route::get('/test/new/new/again', array('as' => 'admin.test', function () {
//
//    $url = route('admin.test');
//
//    return $url;
//
//}));
//
//Route::get('/post/{id}', 'PostsController@index');
//
//Route::resource('test', 'PostsController');
//
//Route::get('/contact', 'PostsController@contactView');

//Route::get('post/{id}/{name}/{test}', 'PostsController@showPost');

/* ------------------------------------------------------
 *| CRUD by route
 * ------------------------------------------------------
 */

//Route::get('/insert', function() {
//
//    DB::insert('insert into product_main_categories(title) values(?)', ['LED']);
//
//});
//
//Route::get('/read', function() {
//
//    $results = DB::select('select * from product_main_categories');
//
//    return $results;
//
//});
//
//Route::get('/update', function() {
//
//    $updated = DB::update('update product_main_categories set title = "LED" where id = ?', [1]);
//
//    return $updated;
//
//});
//
//Route::get('/delete', function() {
//
//    $deleted = DB::delete('delete from product_main_categories where id = ?', [1]);
//
//    return $deleted;
//
//});

/*
|------------------------------------------------------
| ELOQUENT
|------------------------------------------------------
 */

//Route::get('/find', function() {
//
//    $categories = ProductMainCategory::all();
//
//    foreach($categories as $category) {
//
//        return $category->title;
//
//    }
//
//});

//Route::get('/find', function() {
//
//    $categories = ProductMainCategory::find(2);
//
//    return $categories->title;
//
//    foreach($categories as $category) {
//
//        return $category->title;
//
//    }
//
//});
//
//Route::get('/findbyid', function() {
//
//    $categories = ProductMainCategory::where('id', 2)->orderBy('id', 'asc')->take(1)->get();
//
//    return $categories;
//
//});
//
//Route::get('/findall', function() {
//
//    $categories = ProductMainCategory::all();
//
//    return $categories;
//
//});
//
//Route::get('/findmore', function() {
//
////    $categories = ProductMainCategory::findOrFail(2);
//
//    $categories = ProductMainCategory::where('id', '<', 50)->firstOrFail();
//
//    return $categories;
//
//});

//Route::get('/basicinsert', function() {
//
//    $categories = new ProductMainCategory();
//    $categories->title = 'new ELOQUENT ORM';
//
//    $categories->save();
//
//});

//Route::get('/basicinsert', function() {
//
//    $categories = ProductMainCategory::find(2);
//    $categories->title = 'new ELOQUENT ORM insert 2';
//
//    $categories->save();
//
//});

//Route::get('/create', function () {
//
//    ProductMainCategory::create(['title'=>'555']);
//
//});

//Route::get('/update', function() {
//    ProductMainCategory::where('id', 2)->update(['title'=>'5555']);
//});

//Route::get('/delete', function() {
//    $categories = ProductMainCategory::where('id', '<', 7);
//    $categories->delete();
//});

//Route::get('/softdelete', function () {
//
//    ProductMainCategory::find(2)->delete();
//
//});

//Route::get('/readsd', function () {
//
//    $categories = ProductMainCategory::withTrashed()->where('id', 1)->get();
//
////    $categories = ProductMainCategory::onlyTrashed()->where('id', 1)->get();
//
//    return $categories;
//
//});

//Route::get('/restore', function () {
//
//    ProductMainCategory::withTrashed()->where('id', 1)->restore();
//
//});

//Route::get('/forcedelete', function () {
//
//    ProductMainCategory::withTrashed()->where('id', 2)->forceDelete();
//
//});


/*
|------------------------------------------------------
| ELOQUENT One To One
|------------------------------------------------------
 */

//Route::get('/maincategory/{id}/subcategory', function ($id) {
//
//    return ProductMainCategory::find($id)->ProductSubCategory->title;
//
//});
//
//Route::get('/subcategory/{id}/maincategory', function ($id) {
//
//    return ProductSubCategory::find($id)->ProductMainCatergory;
//
//});

/*
|------------------------------------------------------
| ELOQUENT One To Many
|------------------------------------------------------
 */

//Route::get('/product-main-categories', function () {
//
//    $productMainCategory = ProductMainCategory::find(1);
//
//    foreach ($productMainCategory->productSubCategories as $productSubCategory){
//
//        echo $productSubCategory->title . "<br>";
//
//    }
//
//});

/*
|------------------------------------------------------
| ELOQUENT Many To Many
|------------------------------------------------------
 */

//Route::get('/user/{id}/role', function ($id) {
//
//    $user = User::find($id);
//
//    foreach ($user->roles as $role){
//
//        return $role;
//
//    }
//
//});

/*
|------------------------------------------------------
| Accessing the intermediate table / pivot
|------------------------------------------------------
 */

//Route::get('user/pivot', function () {
//
//    $user = User::find(1);
//
////    return $user;
//
//    foreach ($user->roles as $role) {
//
//        echo $role->pivot->created_at;
//    }
//
//});

//Route::get('user/country', function () {
//
//    $country = Country::find(4);
//
//    foreach ($country->products as $product) {
//        return $product;
//    }
//});

/*
|------------------------------------------------------
| Polymorphic Relations
|------------------------------------------------------
 */

//Route::get('user/photos', function () {
//
//    $user = User::find(1);
//
//    foreach ($user->photos as $photo) {
//
//        return $photo;
//
//    }
//
//});
//
//Route::get('post/photos', function () {
//
//    $post = Post::find(1);
//
//    foreach ($post->photos as $photo) {
//
//        echo $photo;
//
//    }
//
//});

//Route::get('photo/{id}/post', function ($id) {
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});
//
///*
//|------------------------------------------------------
//| Polymorphic Relations Many To Many
//|------------------------------------------------------
// */
//
//Route::get('post/tag', function () {
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag) {
//
//        return $tag;
//
//    }
//
//});
//
//Route::get('tag/post', function () {
//
//    $tag = Tag::find(2);
//
//    foreach ($tag->posts as $post) {
//
//        return $post;
//
//    }
//});

/*
|------------------------------------------------------
| CRUD
|------------------------------------------------------
 */
