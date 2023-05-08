<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AuthenticatedSessionAdminController;
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
        Route::get('/profile',[AdminController::class,'profile']);
        Route::get('/testee',[AdminController::class,'testee']);
        Route::get('/faktor',[AdminController::class,'faktor']);
        Route::get('/ciri',[AdminController::class,'ciri']);
        Route::get('/soaltes',[AdminController::class,'soaltes']);
        Route::get('/riwayat',[AdminController::class,'riwayat']);
        Route::get('/rules',[AdminController::class,'rules']);
        Route::get('/change-password',[AdminController::class,'changepw']);
        Route::post('/register' ,[RegisteredUserController::class, 'store']);
    });

});

Route::prefix('testee')->middleware('theme:dashboard')->name('testee.')->group(function(){

    Route::middleware(['auth:web'])->group(function(){    
        Route::get('/dashboard',[TesteeController::class,'dashboard']);
        Route::get('/profile',[TesteeController::class,'profile']);
        Route::get('/change-password',[TesteeController::class,'changepw']);
        Route::post('/register' ,[RegisteredUserController::class, 'store']);
        Route::get('/tes',[TesteeController::class,'tes']);
        Route::get('/result',[TesteeController::class,'result']);
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