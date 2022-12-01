<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api as PathApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::post('login', [PathApiController\AuthController::class, 'login'])->name("login");
// Route::post('register', [PathApiController\AuthController::class, 'register'])->name("register");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('spa/category', [PathApiController\CategorySpaController::class, 'index'])->name('loadCategorySpa');
// Route::get('spa/category/{id}', [PathApiController\CategorySpaController::class, 'show'])->name('loadDetailCategorySpa');
// Route::get('spa/favorite', [PathApiController\SpaController::class, 'loadFavorite'])->name('loadFavoriteSpa')
//     ->middleware('auth:sanctum');
// Route::post('spa/rekomendasi', [PathApiController\SpaController::class, 'loadRekomendasi'])->name('loadRekomendasiSpa');
// Route::get('spa/pilihan', [PathApiController\SpaController::class, 'loadPilihan'])->name('loadPilihanSpa');
// Route::get('spa', [PathApiController\SpaController::class, 'index'])->name('loadSpa');
// Route::get('spa/{id}', [PathApiController\SpaController::class, 'show'])->name('loadDetailSpa');

// Route::get('franchise', [PathApiController\FranchiseController::class, 'index'])->name('loadFranchise');
// Route::get('franchise/{id}', [PathApiController\FranchiseController::class, 'show'])->name('loadDetailFranchise');
// Route::get('tips', [PathApiController\TipController::class, 'index'])->name('loadTips');
// Route::get('tips/{id}', [PathApiController\TipController::class, 'show'])->name('loadDetailTips');
// Route::get('coupon/active', [PathApiController\CouponController::class, 'active'])->name('loadCouponActive');
// Route::get('coupon/{id}', [PathApiController\CouponController::class, 'show'])->name('loadDetailCoupon');

Route::get('/users', [App\Http\Controllers\Api\UsersController::class, 'index']);
Route::get('/places', [App\Http\Controllers\Api\PlacesController::class, 'index']);
Route::post('/places', [App\Http\Controllers\Api\PlacesController::class, 'store']);
Route::get('/franchise', [App\Http\Controllers\Api\PagesController::class, 'index']);
Route::post('/franchise', [App\Http\Controllers\Api\ReviewsController::class, 'franchise']);
Route::get('/config', [App\Http\Controllers\Api\ConfigController::class, 'index']);
Route::get('/contact_msgs', [App\Http\Controllers\Api\Contact_msgsController::class, 'index']);
Route::get('/email_templates', [App\Http\Controllers\Api\EmailTemplateController::class, 'index']);
Route::get('/language', [App\Http\Controllers\Api\LanguageController::class, 'index']);
Route::get('/loggedin', [App\Http\Controllers\Api\LoggedinController::class, 'index']);
Route::get('/photo', [App\Http\Controllers\Api\PhotoController::class, 'index']);
Route::get('/plans', [App\Http\Controllers\Api\PlansController::class, 'index']);
Route::get('/plan_types', [App\Http\Controllers\Api\Plan_typesController::class, 'index']);
Route::get('/rel_place_cat', [App\Http\Controllers\Api\rel_place_catController::class, 'index']);
Route::get('/reviews', [App\Http\Controllers\Api\ReviewsController::class, 'index']);
Route::get('/signup_confirm', [App\Http\Controllers\Api\ReviewsController::class, 'signup_confirm']);
Route::get('/states', [App\Http\Controllers\Api\ReviewsController::class, 'state']);
Route::get('/statistics', [App\Http\Controllers\Api\ReviewsController::class, 'statistics']);
Route::get('/tmp_photos', [App\Http\Controllers\Api\ReviewsController::class, 'tmp_photos']);
Route::get('/transactions', [App\Http\Controllers\Api\ReviewsController::class, 'transactions']);
Route::get('/translation_cf', [App\Http\Controllers\Api\ReviewsController::class, 'translation_cf']);
Route::get('/videos', [App\Http\Controllers\Api\ReviewsController::class, 'videos']);
Route::get('/tips', [App\Http\Controllers\Api\ReviewsController::class, 'tips']);
Route::post('/tips_store', [App\Http\Controllers\Api\ReviewsController::class, 'tips_store']);
Route::get('/coupons', [App\Http\Controllers\Api\ReviewsController::class, 'coupons']);
Route::post('/coupons_store', [App\Http\Controllers\Api\ReviewsController::class, 'coupons_store']);
