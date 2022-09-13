<?php

use App\Http\Controllers\Admin\CityController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\DocController;

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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', [DocController::class, 'index'])->name('home');
Route::get('/prtners', [DocController::class, 'prtners'])->name('partners');
Route::get('/about-us', [DocController::class, 'us'])->name('about_us');
Route::get('/form', [DocController::class, 'form'])->name('form');
Route::post('/form/create', [DocController::class, 'store'])->name('form.create');


Auth::routes();
Route::get('/welcome', function(){
    return view('welcome');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {

    // Users
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/user/create', [UsersController::class, 'create'])->name('admin.user.create');
    Route::post('/user/store', [UsersController::class, 'store'])->name('admin.user.store');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
    Route::get('/user/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.user.destroy');

    // Cities
    Route::get('/cities', [CityController::class, 'index'])->name('admin.cities');
    Route::get('/city/create', [CityController::class, 'create'])->name('admin.city.create');
    Route::post('/city/store', [CityController::class, 'store'])->name('admin.city.store');
    Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('admin.city.edit');
    Route::post('/city/update/{id}', [CityController::class, 'update'])->name('admin.city.update');
    Route::get('/city/destroy/{id}', [CityController::class, 'destroy'])->name('admin.city.destroy');

    // Banners
    Route::get('/banners', [BannersController::class, 'index'])->name('admin.banners');
    Route::get('/banner/create', [BannersController::class, 'create'])->name('admin.banner.create');
    Route::post('/banner/store', [BannersController::class, 'store'])->name('admin.banner.store');
    Route::get('/banner/edit/{id}', [BannersController::class, 'edit'])->name('admin.banner.edit');
    Route::post('/banner/update/{id}', [BannersController::class, 'update'])->name('admin.banner.update');
    Route::get('/banner/destroy/{id}', [BannersController::class, 'destroy'])->name('admin.banner.destroy');

    // Partners
    Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partners');
    Route::get('/partner/create', [PartnerController::class, 'create'])->name('admin.partner.create');
    Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::get('/partner/destroy/{id}', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');

    //Requests
    Route::get('home/requests', ['uses' => 'App\Http\Controllers\Admin\RequestsController@index'])->name('admin.requests');

});
