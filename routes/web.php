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
    Route::patch('/profile-update/form', [ProfileController::class, 'UpdateProfile'])->name('UpdateProfile');
    Route::get('/profile-update', [ProfileController::class, 'showUpdateProfile'])->name('showUpdateProfile');

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
        Route::get('/farm-profile-update', [FarmController::class, 'showUpdateFarmProfile'])->name('showUpdateFarmProfile');
        
        // Pending Route
        Route::get('/profile-update', [FarmController::class, 'profileUpdate'])->name('profileUpdate');
        Route::get('/list-item', [FarmController::class, 'itemList'])->name('itemList');
        Route::get('/item-update', [FarmController::class, 'itemUpdate'])->name('itemUpdate');
        Route::get('/order-management', [FarmController::class, 'orderMng'])->name('orderMng');
        Route::get('/analysis', [FarmController::class, 'analysis'])->name('analysis');
    });

    /**
     * Routes related to ADMIN
     */
    Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'admin'],function(){
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        Route::get('/consumer-management/{status?}', [AdminHomeController::class, 'consumerManagement'])->name('consumer.management');
        Route::get('/consumer/{id}/profile', [AdminHomeController::class, 'consumerProfile'])->name('consumer.profile');
        Route::delete('/consumer/{user}/deactivate', [AdminHomeController::class, 'consumerDeactivate'])->name('consumer.deactivate');
        Route::patch('/consumer/{user}/activate', [AdminHomeController::class, 'consumerActivate'])->withTrashed()->name('consumer.activate');
        Route::get('/consumer/search', [AdminHomeController::class, 'consumerSearch'])->name('consumer.search');

        Route::get('/farm-management', [AdminHomeController::class, 'farmManagement'])->name('farm.management');
        Route::get('/farm/profile', [AdminHomeController::class, 'farmProfile'])->name('farm.profile');

        Route::get('/item-management', [AdminHomeController::class, 'itemManagement'])->name('item.management');
        Route::get('/item/show', [AdminHomeController::class, 'showItem'])->name('item.show');

        Route::get('/analysis', [AdminHomeController::class, 'analysis'])->name('analysis');
    });

});
