<?php

use App\Http\Controllers\Admin\FarmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\BlockController;

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
Route::get('/tentang-kami', [LandingController::class, 'about'])->name('about.me');
Route::get('/tentang-kami/sejarah-perusahaan', [LandingController::class, 'history'])->name('about.history');
Route::get('/tentang-kami/profil-perusahaan', [LandingController::class, 'profile'])->name('about.profile');
Route::get('/map-leaflet', [LandingController::class, 'viewLeaflet'])->name('view.leaflet');
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

        Route::get('/section/get-section', [SectionController::class, 'getSection'])->name('section.getSection');
        Route::get('/section/index', [SectionController::class, 'index'])->name('section.index');
        Route::get('/section/create', [SectionController::class, 'create'])->name('section.create');
        Route::post('/section/store', [SectionController::class, 'store'])->name('section.store');
        Route::get('/section/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
        Route::post('/section/update/{id}', [SectionController::class, 'update'])->name('section.update');
        Route::get('/section/delete/{id}', [SectionController::class, 'destroy'])->name('section.delete');

        Route::get('/block/index', [BlockController::class, 'index'])->name('block.index');
        Route::get('/block/create', [BlockController::class, 'create'])->name('block.create');
        Route::post('/block/store', [BlockController::class, 'store'])->name('block.store');
        Route::get('/block/edit/{id}', [BlockController::class, 'edit'])->name('block.edit');
        Route::post('/block/update/{id}', [BlockController::class, 'update'])->name('block.update');
        Route::get('/block/delete/{id}', [BlockController::class, 'destroy'])->name('block.delete');
    });
});


