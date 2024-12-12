<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


/**
 * Controller for regular users
 */
Route::get('/all-farms', [HomeController::class, 'allFarms'])->name('allFarms');
Route::get('/farm-profile', [HomeController::class, 'farmProfile'])->name('farmProfile');
Route::get('/show-item', [HomeController::class, 'showItem'])->name('showItem');
Route::get('/all-items', [HomeController::class, 'allItems'])->name('allItems');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/register-role', [HomeController::class, 'registerRole'])->name('home');
    Route::get('/register-consumer', [HomeController::class, 'registerConsumer'])->name('registerConsumer');
    Route::get('/register-farm', [HomeController::class, 'registerFarm'])->name('registerFarm');
    Route::get('/register-home', [HomeController::class, 'registerHome'])->name('registerHome');
    /**
     * Routes related to CONSUMER
     */
    Route::group(['prefix'=>'consumer', 'as'=>'consumer.'],function(){
        Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
        Route::get('/order', [HomeController::class, 'order'])->name('order');
        Route::get('/order-confirm', [HomeController::class, 'orderConfirm'])->name('orderConfirm');
        Route::get('/order-success', [HomeController::class, 'orderSuccess'])->name('orderSuccess');
    });


    /**
     * Routes related to FARM
     */
    Route::group(['prefix'=>'farm', 'as'=>'farm.', 'middleware'=>'farm'],function(){

    });

    /**
     * Routes related to ADMIN
     */
    Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'admin'],function(){
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/consumer-management', [AdminHomeController::class, 'consumerManagement'])->name('consumer.management');
        Route::get('/consumer/profile', [AdminHomeController::class, 'consumerProfile'])->name('consumer.profile');
        Route::get('/farm-management', [AdminHomeController::class, 'farmManagement'])->name('farm.management');
        Route::get('/farm/profile', [AdminHomeController::class, 'farmProfile'])->name('farm.profile');
        Route::get('/item-management', [AdminHomeController::class, 'itemManagement'])->name('item.management');
        Route::get('/item/show', [AdminHomeController::class, 'showItem'])->name('item.show');
    });

});
