<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){

    /**
     * Routes related to CONSUMER
     */
    Route::get('/register-role', [HomeController::class, 'registerRole'])->name('home');
    Route::get('/register-consumer', [HomeController::class, 'registerConsumer'])->name('registerConsumer');
    Route::get('/register-farm', [HomeController::class, 'registerFarm'])->name('registerFarm');
    Route::get('/register-home', [HomeController::class, 'registerHome'])->name('registerHome');
    Route::get('/all-items', [HomeController::class, 'allitems'])->name('allitems');

    /**
     * Routes related to FARM
     */
    Route::group(['prefix'=>'farm', 'as'=>'farm.', 'middleware'=>'farm'],function(){

    });

    /**
     * Routes related to ADMIN
     */
    Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>'admin'],function(){
        Route::get('/', [HomeController::class, 'index'])->name('index');
    });

});
