<?php

use App\Http\Controllers\Admin\FarmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Admin\CommodityController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/map-google', [LandingController::class, 'viewGoogle'])->name('view.google');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        
        Route::get('/user/index', [UsersController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');
        Route::post('/user/store', [UsersController::class, 'store'])->name('user.store');
        Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UsersController::class, 'destroy'])->name('user.delete');

        Route::get('/farm/index', [FarmController::class, 'index'])->name('farm.index');
        Route::get('/farm/create', [FarmController::class, 'create'])->name('farm.create');
        Route::post('/farm/store', [FarmController::class, 'store'])->name('farm.store');
        Route::get('/farm/edit/{id}', [FarmController::class, 'edit'])->name('farm.edit');
        Route::post('/farm/update/{id}', [FarmController::class, 'update'])->name('farm.update');
        Route::get('/farm/delete/{id}', [FarmController::class, 'destroy'])->name('farm.delete');

        Route::get('/commodity/index', [CommodityController::class, 'index'])->name('commodity.index');
        Route::get('/commodity/create', [CommodityController::class, 'create'])->name('commodity.create');
        Route::post('/commodity/store', [CommodityController::class, 'store'])->name('commodity.store');
        Route::get('/commodity/edit/{id}', [CommodityController::class, 'edit'])->name('commodity.edit');
        Route::post('/commodity/update/{id}', [CommodityController::class, 'update'])->name('commodity.update');
        Route::get('/commodity/delete/{id}', [CommodityController::class, 'destroy'])->name('commodity.delete');
    });
});


