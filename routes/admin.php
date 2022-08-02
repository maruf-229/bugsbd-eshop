<?php

Route::group(['prefix'=>'admin', 'middleware'=>['auth:admin']], function(){
    // manage category route here 
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::post('/category_status', [App\Http\Controllers\Admin\CategoryController::class, 'categoryStatus'])->name('category.status');

     // manage slider route here 
     Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class);
     Route::post('/slider_status', [App\Http\Controllers\Admin\SliderController::class, 'sliderStatus'])->name('slider.status');

     // manage slider route here 
     Route::resource('/product', App\Http\Controllers\Admin\ProductController::class);
     Route::post('/product_status', [App\Http\Controllers\Admin\ProductController::class, 'ProductStatus'])->name('product.status');

    // setting slider route here 
    Route::resource('/setting', App\Http\Controllers\Admin\SettingController::class);

  
          
});