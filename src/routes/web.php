<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Menu2Controller;

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

//ユーザー新規登録
Route::get('/register',[RegisterController::class, 'create'])->name('register.create');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
Route::get('/thanks',[RegisterController::class, 'completePage'])->name('register.complete');

// ユーザーログイン/ログアウト
Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

//メニュー
Route::get('/menu', [MenuController::class, 'show'])->name('menu');
Route::get('/menu2', [Menu2Controller::class, 'show'])->name('menu2');

//飲食店一覧
Route::get('/', [ShopController::class, 'index'])->name('shop');
Route::get('/{id}', [ShopController::class, 'show'])->name('shop.show');
Route::post('/shop/{id}/like', [ShopController::class, 'like'])->name('shop.like');
Route::get('/detail/{id}', [ShopController::class, 'show'])->name('detail');
// 検索用のルートを追加
Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');

// 予約
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/done', [ReservationController::class, 'done'])->name('done');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

// いいね
Route::post('/like/{shopId}', [LikeController::class, 'toggleLike'])->middleware('auth');

//マイページ
Route::get('/mypage', [MypageController::class, 'myPage'])->name('mypage');