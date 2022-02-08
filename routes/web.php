<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MainlogoController;
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



//FOR-forntend

Route::get('/',[ViewController::class,'view'])->name('view');
