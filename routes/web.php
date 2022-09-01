<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LearnController;

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

Route::get('/country', function () {
    return view('country');
})->middleware('country');


Route::get('/all.category', [App\Http\Controllers\CategoryController::class, 'category_page'])->name('all.category');
Route::post('/add_category', [App\Http\Controllers\CategoryController::class, 'add_page'])->name('add_category');
Route::get('/my_login', [App\Http\Controllers\MyController::class, 'login_page'])->name('my_login');
Route::get('/my_signup', [App\Http\Controllers\MyController::class, 'signup_page'])->name('my_signup');
Route::post('/data_store', [App\Http\Controllers\MyController::class, 'store'])->name('data_store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//__invokable route__//
Route::get('/test', LearnController::class);