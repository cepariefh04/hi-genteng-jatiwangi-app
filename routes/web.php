<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExecuteArtisanCommandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResgiterController;
use App\Http\Controllers\SettingController;
use App\Models\Product;
use App\Models\Setting;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/run-command/{command}', ExecuteArtisanCommandController::class);
Route::get('/', function () {
    return view('homepage.index', [
        'products' => Product::with('category')->get(),
        'settings' => Setting::get(),
        'title' => 'Home'
    ]);
});

Route::get('/detail-produk', [HomeController::class, 'index']);
Route::get('/detail-produk/{id}', [HomeController::class, 'detail']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [ResgiterController::class, 'index'])->middleware('guest');
Route::post('/register', [ResgiterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/produk', ProductController::class)->middleware('auth');
Route::resource('/dashboard/kategori', ProductCategoryController::class)->middleware('auth');
Route::resource('/dashboard/setting', SettingController::class)->middleware('auth');
