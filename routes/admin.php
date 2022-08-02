<?php

Route::group(['prefix'=>'admin', 'middleware'=>['auth:admin']], function(){
    // manage category route here 
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::post('/category_status', [App\Http\Controllers\Admin\CategoryController::class, 'categoryStatus'])->name('category.status');

  
          
});