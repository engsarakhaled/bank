<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DocumentController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

//admin pages 
 Route::group(['prefix' => 'admin'], function () {
    Route::group([
        'controller' => WorkController::class,
        'prefix' => 'works',
        'as' => 'works.',
      // 'middleware' => 'verified',

    ], function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('index', 'index')->name('index');
        Route::get('{id}/show', 'show')->name('show');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::put('{id}/update', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
     
    });
    Route::group([
        'controller' => EmployeeController::class,
        'prefix' => 'employees',
        'as' => 'employees.',
      // 'middleware' => 'verified',
    ], function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('index', 'index')->name('index');
        Route::get('{id}/show', 'show')->name('show');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::put('{id}/update', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
     
    });
    Route::group([
        'controller' => DocumentController::class,
        'prefix' => 'documents',
        'as' => 'documents.',
      // 'middleware' => 'verified',
    ], function () {
        Route::get('create', 'create')->name('create');
        Route::get('index', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/show', 'show')->name('show');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::put('{id}/update', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
  
    // Route::group([
    //     'controller' => UserController::class,
    //     'prefix' => 'users',
    //     'as' => 'users.',
    //   //  'middleware' => 'verified',
    // ], function () {
    //     Route::get('create', 'create')->name('create');
    //     Route::post('store', 'store')->name('store');
    //     Route::get('index', 'index')->name('index');
    //     Route::get('{id}/show', 'show')->name('show');
    //     Route::get('{id}/edit', 'edit')->name('edit');
    //     Route::put('{id}/update', 'update')->name('update');
    // });


});


Auth::routes(['verify' => true]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
