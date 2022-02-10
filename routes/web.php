<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EcommrceedgelargeController;
use App\Http\Controllers\Admin\EcommrceedgesmallController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MainlogoController;
use App\Http\Controllers\Admin\VideoarearightController;
use App\Http\Controllers\Admin\VideoposterController;
use App\Http\Controllers\Frontend\ViewController;
use Illuminate\Support\Facades\Route;

//for dashboard

Route::get('/login',[AdminController::class,'login'])->name('login');

//for-mainlogo

Route::group(['prefix' => 'admin'], function() {
   Route::get('mainlogo-index',[MainlogoController::class,'mainlogoIndex'])->name('mainlogo.index');
   Route::get('mainlogo-create',[MainlogoController::class,'mainlogoCreate'])->name('mainlogo.create');
   Route::post('mainlogo-store',[MainlogoController::class,'mainlogoStore'])->name('mainlogo.store');
   Route::get('mainlogo-edit/{id}',[MainlogoController::class,'mainlogoEdit'])->name('mainlogo.edit');
   Route::post('mainlogo-update',[MainlogoController::class,'mainlogoUpdate'])->name('mainlogo.update');
   Route::get('mainlogo-delete/{id}',[MainlogoController::class,'mainlogoDelete'])->name('mainlogo.delete');
});

//

//for-home-controller


Route::group(['prefix' => 'admin'], function() {
    Route::get('home-index',[HomeController::class,'homeIndex'])->name('home.index');
    Route::get('home-create',[HomeController::class,'homeCreate'])->name('home.create');
    Route::post('home-store',[HomeController::class,'homeStore'])->name('home.store');
    Route::get('home-edit/{id}',[HomeController::class,'homeEdit'])->name('home.edit');
    Route::post('home-update',[HomeController::class,'homeUpdate'])->name('home.update');
    Route::get('home-delete/{id}',[HomeController::class,'homeDelete'])->name('home.delete');
 });

 //

 //for-videoposter

 Route::group(['prefix' => 'admin'], function() {
    Route::get('videoposter-index',[VideoposterController::class,'videoposterIndex'])->name('videoposter.index');
    Route::get('videoposter-create',[VideoposterController::class,'videoposterCreate'])->name('videoposter.create');
    Route::post('videoposter-store',[VideoposterController::class,'videoposterStore'])->name('videoposter.store');
    Route::get('videoposter-edit/{id}',[VideoposterController::class,'videopostereEdit'])->name('videoposter.edit');
    Route::post('videoposter-update',[VideoposterController::class,'videoposterUpdate'])->name('videoposter.update');
    Route::get('videoposter-delete/{id}',[VideoposterController::class,'videoposterDelete'])->name('videoposter.delete');
 });

 //

 //for-videoarearight
 Route::group(['prefix' => 'admin'], function() {
    Route::get('videoarea-index',[VideoarearightController::class,'videoareaIndex'])->name('videoarea.index');
    Route::get('videoarea-create',[VideoarearightController::class,'videoareaCreate'])->name('videoarea.create');
    Route::post('videoarea-store',[VideoarearightController::class,'videoareaStore'])->name('videoarea.store');
    Route::get('videoarea-edit/{id}',[VideoarearightController::class,'videoareaEdit'])->name('videoarea.edit');
    Route::post('videoarea-update',[VideoarearightController::class,'videoareaUpdate'])->name('videoarea.update');
    Route::get('videoarea-delete/{id}',[VideoarearightController::class,'videoareaDelete'])->name('videoarea.delete');
 });

 //

 //for-ecommrceedge large

 Route::group(['prefix' => 'admin'], function() {
    Route::get('ecommrceedgelarge-index',[EcommrceedgelargeController::class,'ecommrceedgelargeIndex'])->name('ecommrceedgelarge.index');
    Route::get('ecommrceedgelarge-create',[EcommrceedgelargeController::class,'ecommrceedgelargeCreate'])->name('ecommrceedgelarge.create');
    Route::post('ecommrceedgelarge-store',[EcommrceedgelargeController::class,'ecommrceedgelargeStore'])->name('ecommrceedgelarge.store');
    Route::get('ecommrceedgelarge-edit/{id}',[EcommrceedgelargeController::class,'ecommrceedgelargeEdit'])->name('ecommrceedgelarge.edit');
    Route::post('ecommrceedgelarge-update',[EcommrceedgelargeController::class,'ecommrceedgelargeUpdate'])->name('ecommrceedgelarge.update');
    Route::get('ecommrceedgelarge-delete/{id}',[EcommrceedgelargeController::class,'ecommrceedgelargeDelete'])->name('ecommrceedgelarge.delete');
 });

 //

  //for-ecommrceedge small

  Route::group(['prefix' => 'admin'], function() {
    Route::get('ecommrceedgesmall-index',[EcommrceedgesmallController::class,'ecommrceedgesmallIndex'])->name('ecommrceedgesmall.index');
    Route::get('ecommrceedgesmall-create',[EcommrceedgesmallController::class,'ecommrceedgesmallCreate'])->name('ecommrceedgesmall.create');
    Route::post('ecommrceedgesmall-store',[EcommrceedgesmallController::class,'ecommrceedgesmallStore'])->name('ecommrceedgesmall.store');
    Route::get('ecommrceedgesmall-edit/{id}',[EcommrceedgesmallController::class,'ecommrceedgesmallEdit'])->name('ecommrceedgesmall.edit');
    Route::post('ecommrceedgesmall-update',[EcommrceedgesmallController::class,'ecommrceedgesmallUpdate'])->name('ecommrceedgesmall.update');
    Route::get('ecommrceedgesmall-delete/{id}',[EcommrceedgesmallController::class,'ecommrceedgesmallDelete'])->name('ecommrceedgesmall.delete');
 });

 //

 //for-about
 Route::group(['prefix' => 'admin'], function() {
    Route::get('about-index',[AboutController::class,'aboutIndex'])->name('about.index');
    Route::get('about-create',[AboutController::class,'aboutCreate'])->name('about.create');
    Route::post('about-store',[AboutController::class,'aboutStore'])->name('about.store');
    Route::get('about-edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
    Route::post('about-update',[AboutController::class,'aboutUpdate'])->name('about.update');
    Route::get('about-delete/{id}',[AboutController::class,'aboutDelete'])->name('about.delete');
 });

 //




//FOR-forntend

Route::get('/',[ViewController::class,'view'])->name('view');
