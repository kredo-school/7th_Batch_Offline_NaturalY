<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Farm\FarmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/select-role', [ProfileController::class, 'selectRole'])->name('registerRole'); 
    Route::post('/register-form', [ProfileController::class, 'storeRole'])->name('storeRole');

    Route::get('/register-consumer', [ProfileController::class, 'showRegiserConsumer'])->name('showRegiserConsumer');
    Route::get('/register-farm', [ProfileController::class, 'showRegiserFarm'])->name('showRegiserFarm');
    Route::post('/store-profile', [ProfileController::class, 'storeProfile'])->name('storeProfile');
    Route::post('/register-farm', [ProfileController::class, 'registerFarm'])->name('registerFarm');

    // Update Profile for cnsumer and farm
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('editProfile');
    Route::patch('/profile/update', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');

    /**
     * Routes related to CONSUMER
     */
    Route::group(['prefix'=>'consumer', 'as'=>'consumer.'],function(){
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showProfile');

        // Pending Route
        Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
        Route::get('/order', [HomeController::class, 'order'])->name('order');
        Route::get('/order-confirm', [HomeController::class, 'orderConfirm'])->name('orderConfirm');
        Route::get('/order-success', [HomeController::class, 'orderSuccess'])->name('orderSuccess');
        Route::get('/favorites', [HomeController::class, 'favorites'])->name('favorites');
        Route::get('/purchase-history', [HomeController::class, 'purchaseHistory'])->name('purchaseHistory');
        Route::get('/review', [HomeController::class, 'review'])->name('review');
        Route::get('/followings', [HomeController::class, 'followings'])->name('followings');
    });

    /**
     * Routes related to FARM
     */
    Route::group(['prefix'=>'farm', 'as'=>'farm.', 'middleware'=>'auth'],function(){
        Route::get('/', [FarmController::class, 'index'])->name('index');
        Route::get('/list-item', [FarmController::class, 'createItem'])->name('createItem');
        Route::post('/store-item', [FarmController::class, 'storeItem'])->name('storeItem');
        Route::get('/item/{item_id}', [FarmController::class, 'showItem'])->name('showItem');
        Route::get('/item/edit/{item_id}', [FarmController::class, 'editItem'])->name('editItem');
        Route::patch('/item/update/{item_id}', [FarmController::class, 'updateItem'])->name('updateItem');
        
        // Pending Route
        Route::get('/item-update', [FarmController::class, 'itemUpdate'])->name('itemUpdate');
        Route::get('/order-management', [FarmController::class, 'orderMng'])->name('orderMng');
        Route::get('/analysis', [FarmController::class, 'analysis'])->name('analysis');
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
        Route::get('/analysis', [AdminHomeController::class, 'analysis'])->name('analysis');
    });

});
