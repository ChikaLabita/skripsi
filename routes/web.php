<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TesteeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('theme:dashboard')->name('admin.')->group(function(){

    Route::middleware(['auth:admin'])->group(function(){    
        Route::get('/dashboard',[AdminController::class,'dashboard']);
        Route::post('/register' ,[RegisteredUserController::class, 'store']);
        Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);
    });

});

Route::prefix('testee')->middleware('theme:dashboard')->name('testee.')->group(function(){

    Route::middleware(['auth:web'])->group(function(){    
        Route::get('/dashboard',[TesteeController::class,'dashboard']);
        Route::post('/register' ,[RegisteredUserController::class, 'store']);
        Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);
    });

});

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');*/

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';