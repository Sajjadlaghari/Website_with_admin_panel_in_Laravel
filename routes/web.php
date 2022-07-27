<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


    Route::get('/',[TestController::class,'index'])->name('home');
    Route::get('about',[TestController::class,'about']);
    Route::get('/service',[TestController::class,'service']);
    Route::get('/portfolio',[TestController::class,'portfolio']);
    Route::get('/service',[TestController::class,'service']);
    Route::get('/team',[TestController::class,'team']);
    Route::get('/contact',[TestController::class,'contact']);
    Route::get('/blog',[TestController::class,'blog']);
    Route::get('/login',[TestController::class,'login'])->name('login');
    Route::post('/login',[TestController::class,'login_details'])->name('login');
    Route::post('/register',[TestController::class,'register']);
    Route::get('/registration',[TestController::class,'registration'])->name('registration');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin',[TestController::class,'admin'])->name('admin');
    Route::get('/user',[TestController::class,'user'])->name('user');
    Route::get('/logout',[TestController::class,'logout'])->name('logout');
    Route::get('/team',[TestController::class,'team_Page'])->name('team');
    Route::get('/contact',[TestController::class,'contact_page'])->name('contact');
    Route::get('/chat',[TestController::class,'chat_page'])->name('chat');
    Route::get('/user-info',[TestController::class,'user_info_page'])->name('userInfo');
    Route::get('/admin-profile/{id?}',[TestController::class,'admin_profile_page'])->name('AdminProfile');
    Route::get('/user',[TestController::class,'user_page'])->name('UserPage');
    Route::post('/update',[TestController::class,'update'])->name('UserPage');
});




