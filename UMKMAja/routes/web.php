<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Dashboard;

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

Route::get('/',  [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('home', 'App\Http\Controllers\HomeController');
Route::resource('about', 'App\Http\Controllers\AboutController');
Route::resource('category', 'App\Http\Controllers\CategoriesController');
Route::resource('event', 'App\Http\Controllers\EventsController');
Route::resource('dashboard', 'App\Http\Controllers\DashboardController');
Route::resource('product', 'App\Http\Controllers\ProductController');

Route::group(['middleware'=>['admin']], function(){
    Route::resource('admin', 'App\Http\Controllers\DashadminController');
    Route::get('/event2', [App\Http\Controllers\EventsController::class, 'index2']);
    Route::get('logout', [App\Http\Controllers\DashadminController::class, 'logout']);
});

Route::get('admin/login', [App\Http\Controllers\DashadminController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\DashadminController::class, 'login']);
Route::get('store/register', [App\Http\Controllers\VendorController::class, 'loginRegister']);
Route::post('store/register', [App\Http\Controllers\VendorController::class, 'vendorRegister']);
Route::post('/reset', [App\Http\Controllers\VendorController::class, 'reset']);


Route::get('/food&drink', [App\Http\Controllers\CategoriesController::class, 'food']);
Route::get('/art', [App\Http\Controllers\CategoriesController::class, 'art']);
Route::get('/beauty&health', [App\Http\Controllers\CategoriesController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\CategoriesController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\CategoriesController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\CategoriesController::class, 'furniture']);

Route::get('/food&drink/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);
Route::get('/art/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);
Route::get('/clothes/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);
Route::get('/furniture/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);
Route::get('/electronic/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);
Route::get('/beauty&health/{id}', [App\Http\Controllers\CategoriesController::class, 'showStore']);

Route::get('/product/store/{id}', [App\Http\Controllers\CategoriesController::class, 'index2']);

Auth::routes();
