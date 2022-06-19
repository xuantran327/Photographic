<?php

use App\Http\Controllers\Admin\Users\CrawnCotroller;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\MainController;
use App\Http\Controllers\FrontController;
use App\Mail\WelcomeMai;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


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
Route::get('users/demo',[LoginController::class,'demo'])->name('demo');
Route::get('users/about',[LoginController::class,'about'])->name('about');
Route::get('users/blog',[LoginController::class,'blog'])->name('blog');
Route::get('users/help',[LoginController::class,'help'])->name('help');
Route::get('admin/users/login',[LoginController::class,'index'])->name('DangNhap');
Route::get('signup',[LoginController::class,'signup'])->name('DangKi');
Route::post('processSignup',[LoginController::class,'processSignup'])->name('process');
Route::post('admin/users/login/store',[LoginController::class,'store']);
Route::get('admin/main',[MainController::class,'index'])->name('main');
Route::get('users/Ghim',[MainController::class,'GhimAnh'])->name('GhimAnh');
Route::get('detail/{id}',[MainController::class,'ImgDetail']);
Route::get('users/Ghim1',[MainController::class,'GhimAnh1']);
Route::get('users',[MainController::class,'users'])->name('users');
Route::get('admin/users/crawn',[CrawnCotroller::class,'crawn']);
Route::get('test',[CrawnCotroller::class,'test']);
Route::get('/email',function(){
    return new WelcomeMai();
});
Route::post('/message/send', [FrontController::class, 'send']);
Route::get('/test1', function () {
    return view('form');
});
// Route:get('mail',[LoginController@sendMail:class]);


