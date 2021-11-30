<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/page/{id}', [App\Http\Controllers\MainController::class, 'post'])->name('post_page');
Route::get('/category/{id}', [App\Http\Controllers\MainController::class, 'category'])->name('category_page');
Route::get('/tag/{id}', [App\Http\Controllers\MainController::class, 'tag'])->name('tag_page');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/cart', [App\Http\Controllers\MainController::class, 'cart'])->name('cart');

Route::get('/search' , [App\Http\Controllers\SearchControlle::class, 'search'])->name('search');



Auth::routes();

Route::any('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('commend');

Route::middleware('checkrole')->prefix('/admin')->group(function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/search' ,[App\Http\Controllers\SearchControlle::class, 'AdminSearch'])->name('admin_search');

    Route::get('chart/user' , [App\Http\Controllers\ChartController::class, 'UserChart'])->name('user_chart');

    Route::get('chart/post' , [App\Http\Controllers\ChartController::class, 'PostChart'])->name('post_chart');

    Route::get('/calendar' , [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

    Route::get('/calendar/fetch', [App\Http\Controllers\CalendarController::class, 'fetch'])->name('fetch');

    Route::post('calendar/action' , [App\Http\Controllers\CalendarController::class, 'action'])->name('create_events');

    Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');

    Route::post('/setting/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('up_setting');

    Route::get('/management', [App\Http\Controllers\ManagementController::class, 'index'])->name('management');

    Route::post('/management/{id}', [App\Http\Controllers\ManagementController::class, 'update'])->name('up_management');

    Route::resource('posts', App\Http\Controllers\PostController::class);

    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');

    Route::resource('categories', App\Http\Controllers\CategoryController::class);

    Route::resource('tags', App\Http\Controllers\TagController::class);

    Route::resource('comments', App\Http\Controllers\CommentController::class);

    Route::get('en', [App\Http\Controllers\LangController::class, 'en'])->name('en');

    Route::get('fa', [App\Http\Controllers\LangController::class, 'fa'])->name('fa');

    Route::get('sun', [App\Http\Controllers\SettingController::class, 'sun'])->name('sun');

    Route::get('moon', [App\Http\Controllers\SettingController::class, 'moon'])->name('moon');

    Route::get('/online_user', [App\Http\Controllers\HomeController::class, 'online_user'])->name('online_user');

    Route::get('/visits', [App\Http\Controllers\HomeController::class, 'visit'])->name('visit');

    Route::get('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');

    Route::resource('works', App\Http\Controllers\WorkController::class);
});
