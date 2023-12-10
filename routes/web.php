<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\user\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('user_portfolio', 'user_portfolio')->name('user_portfolio');
    Route::get('user_about', 'user_about')->name('user_about');
    Route::get('user_portfolio_details', 'user_portfolio_details')->name('user_portfolio_details');
    Route::get('user_contact', 'user_contact')->name('user_contact');
    Route::get('user_resume', 'user_resume')->name('user_resume');
    Route::get('bio_data', 'bio_data')->name('bio_data');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/admin_dashboard', 'admin_dashboard')->name('admin_dashboard');
    Route::get('/profile', 'profile')->name('profile');
});

//---------------Admin Group Routes----------------
Route::group(['prefix' => 'admin'], function(){
    
    //-------------Resources Route------------
    Route::resources([
        'project' => ProjectController::class,
    ]);
});

