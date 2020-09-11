<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index' //function () {
    //return view('main');}
);

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('comment', 'ThreadCommentController', ['only' => ['update', 'destroy']]);
Route::post('comment/create', 'ThreadCommentController@addThreadComment')->name('threadcomment.store');
Route::get('/product', 'ProductController@products')->name('products');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');


Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::get('/guestcheckout', 'CheckoutController@index')->name('guestcheckout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('empty', function () {
    Cart::destroy();
});



//Posts Url
Route::get('/blog/single/{id}/', 'PostController@post')->name('post');

//Route::get('/blog', 'PostController@blog')->name('blog');
Route::get('/blog', 'BlogController@index')->name('blog');



// Post Routes
Route::get('admin/posts', 'PostController@index')->name('admin.posts.index');
Route::get('admin/posts/create', 'PostController@create')->name('admin.posts.create');
Route::post('admin/posts/create', 'PostController@store')->name('admin.posts.store');
Route::get('admin/posts/{id}/edit', 'PostController@edit')->name('admin.posts.edit');
Route::patch('admin/posts/{id}/edit', 'PostController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{id}', 'PostController@destroy')->name('admin.posts.update');

//Admin Threads
Route::get('admin/threads', 'ThreadController@index')->name('admin.threads.index');
Route::get('admin/threads/create', 'ThreadController@create')->name('admin.threads.create');
Route::post('admin/threads/create', 'ThreadController@store')->name('admin.threads.store');
Route::get('admin/threads/{id}/edit', 'ThreadController@edit')->name('admin.threads.edit');
Route::patch('admin/threads/{id}/edit', 'ThreadController@update')->name('admin.threads.update');
Route::delete('/admin/threads/{id}', 'ThreadController@destroy')->name('admin.threads.update');

Route::get('/thread', 'ThreadController@threads')->name('thread.index');
Route::get('thread/create', 'ThreadController@createThread')->name('thread.create');
Route::post('thread/create', 'ThreadController@storeThread')->name('thread.store');
Route::get('thread/{id}/edit', 'ThreadController@editThread')->name('thread.edit');
Route::patch('thread/{id}/edit', 'ThreadController@updateThread')->name('thread.update');
Route::get('thread/{id}/show', 'ThreadController@show')->name('thread.show');

Route::get('/news', 'NewsletterContactscontroller@index')->name('news.index');
Route::post('/news', 'NewsletterContactsController@store')->name('news.store');
Route::get('news/{id}/destroy', 'NewsletterContactsController@destroy')->name('news.destroy');

Route::get('/tell', 'TellCompassController@index')->name('tell.index');
Route::post('/tell', 'TellCompassController@store')->name('tell.store');
Route::get('/tell/{id}/show', 'TellCompassController@destroy')->name('tell.destroy');

Route::get('/message', 'MessageController@index')->name('message.index');
Route::post('/contact', 'MessageController@store')->name('message.store');
Route::get('/message/{id}/show', 'MessageController@destroy')->name('message.destroy');

//Route::resource('/thread', 'ThreadController');

//Product Category Routes
// Route::get('admin/productcategory', 'ProductCategoryController@index')->name('admin.productcategory.index');
// Route::get('admin/productcategory', 'ProductCategoryController@create')->name('admin.productcategory.create');
// Route::post('admin/productcategory', 'ProductCategoryController@store')->name('admin.productcategory.store');
// Route::get('admin/productcategory/{id}/edit', 'ProductCategoryController@edit')->name('admin.productcategory.edit');
// Route::patch('admin/productcategory/{id}/edit', 'ProductCategoryController@update')->name('admin.productcategory.update');
// Route::delete('/admin/productcategory/{id}', 'ProductCategoryController@destroy')->name('admin.productcategory.destroy');

// Admin Product
Route::get('admin/products', 'ProductController@index')->name('admin.products.index');
Route::get('admin/products/create', 'ProductController@create')->name('admin.products.create');
Route::post('admin/products/create', 'ProductController@store')->name('admin.products.store');
Route::get('admin/products/{id}/edit', 'ProductController@edit')->name('admin.products.edit');
Route::patch('admin/products/{id}/edit', 'ProductController@update')->name('admin.products.update');
Route::delete('/admin/products/{id}', 'ProductController@destroy')->name('admin.products.destroy');


Route::get('/products', 'ProductController@products')->name('products.index');
Route::get('/product', 'ProductController@products')->name('products.show');

// Front End Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop#boosters', 'ShopController@businessboosters')->name('shop.boosters');
Route::get('/shop#launchpads', 'ShopController@businesslaunchpads')->name('shop.launchpads');
Route::get('/shop#business-solutions', 'ShopController@businesssolutions')->name('shop.business-solutions');


Route::resource('/admin/postcategory', 'CategoryController');
Route::resource('/admin/productcategory', 'ProductCategoryController');


//Admin Routes
/*
Route::group(['middleware' => 'admin'], function () {
    Route::resource('/admin/blog/posts', 'PostController', ['names' => [
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]]);
});
*/


Route::resource('/comment', 'CommentController');

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/failed', function () {
    return view('failed');
});

Route::match(['GET','POST'],'/pay', 'RaveController@initialize')->name('pay');
Route::match(['GET','POST'],'/rave/callback', 'RaveController@callback')->name('callback');