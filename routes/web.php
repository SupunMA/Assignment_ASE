<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\userController;
use App\Http\Controllers\Admin\adminController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user
Route::group(['prefix'=>'Account/Client','middleware'=>['checkUser','auth','lockBack']],function(){
    Route::get('/', [userController::class, 'homeUser'])->name('user.home');
    
});

//admin
Route::group(['prefix'=>'Admin','middleware'=>['checkAdmin','auth','lockBack']],function(){
    Route::get('/', [adminController::class, 'homeAdmin'])->name('admin.home');
 
});