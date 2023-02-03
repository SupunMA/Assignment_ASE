<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\userController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\admin_Client_Controller;

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


//Preventing go back
Route::middleware(['middleware'=>'lockBack'])->group(function(){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user
Route::group(['prefix'=>'Account/Client','middleware'=>['checkUser','auth','lockBack']],function(){
    Route::get('/', [userController::class, 'homeUser'])->name('user.home');
    
});

//admin
Route::group(['prefix'=>'Admin','middleware'=>['checkAdmin','auth','lockBack']],function(){
    Route::get('/', [adminController::class, 'homeAdmin'])->name('admin.home');
    Route::get('/AddClient', [admin_Client_Controller::class, 'addClient'])->name('admin.addClient');
 
});


//Disabled User Registration
Route::get('/register', function() {
    return redirect('/login');
});

Route::post('/register', function() {
    return redirect('/login');
});
