<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminLogController;

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
Route::get('/',[HomeController::class, 'index'])->name('home');

//--Admin--//
Route::get('/dashboard',[AdminController::class, 'index']);
//-- Banner--//
Route::get('/home',[AdminController::class, 'home'])->name('banner');
Route::post('/store-banner',[AdminController::class, 'store_banner'])->name('store_banner');
//--Job Category--//
Route::get('/job-type',[AdminController::class, 'job_type'])->name('job_type');
Route::post('/store-category',[AdminController::class, 'store_category'])->name('store_category');
//--company circular --//
Route::get('/company-circular',[CompanyController::class, 'company_circular'])->name('company_circular');
Route::post('/store-circular',[CompanyController::class, 'store_circular'])->name('store_circular');
//--Contact Controller--//
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/store-contactUs',[ContactController::class, 'contactUs'])->name('contactUs');
Route::post('/store-contact',[ContactController::class, 'store_contact'])->name('store_contact');
//--About--//
Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::post('/store-about',[AboutController::class, 'store_about'])->name('store_about');
//--Blog--//
Route::get('/blog',[AboutController::class, 'blog'])->name('blog');
Route::post('/store-blog',[AboutController::class, 'store_blog'])->name('store_blog');
//Admin Login--//
Route::get('/admin-register',[AdminlogController::class, 'register'])->name('admin-register');
Route::post('/admin_register',[AdminlogController::class, 'adminRegister'])->name('admin_register');
Route::get('/admin-login',[AdminlogController::class, 'login'])->name('admin-login');
Route::post('/admin_login',[AdminlogController::class, 'adminlogin'])->name('admin_login');