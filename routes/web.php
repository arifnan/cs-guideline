<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ContentItemController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function () {

    Route::resource('categories', CategoryController::class);

    Route::resource('contents', ContentController::class);

    Route::resource('content-items', ContentItemController::class);

});