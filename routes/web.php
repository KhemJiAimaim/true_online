<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\backoffice\BookingController;
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

\Artisan::call('cache:clear');
// \Artisan::call('route:clear');

// Route::get('/config/clear', function () {
//     \Artisan::call('cache:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//     return response([
//         'message' => 'ok'
//     ]);
// });




// Route::prefix('{language}')->group(function () {
//     Route::get('/', [HomeController::class, 'index']);
//     Route::get('/home', [HomeController::class, 'mainContent'])->name('home');
//     Route::get('/menu', [HomeController::class, 'contentMore']);
//     Route::get('/catering', [HomeController::class, 'contentMore']);
//     Route::get('/gallery', [HomeController::class, 'contentMore']);
//     Route::get('/delivery', [HomeController::class, 'contentSingle']);
//     Route::get('/aboutus', [HomeController::class, 'contentSingle']);
//     Route::get('/ourlocation', [HomeController::class, 'contentSingle']);
//     Route::get('/contactus', [HomeController::class, 'contentSingle']);
//     Route::get('/book', [HomeController::class, 'contentSingle']);
// });

// Route::post('/api/booking', [HomeController::class, 'booking']);
// Route::post('/api/sendContact', [HomeController::class, 'sendContact']);

// Route::get('/', function () {
//     return view('frontend.pages.pages_1.home');
// });

Route::get('/', function () {
    return view('frontend.pages.home');
});

//fiber
Route::get("/fiber", [HomeController::class, "homePage"]);
Route::get("/fiber/true_dtac", [HomeController::class, "true_dtac"]);
Route::get("/fiber/detail_true_dtac", [HomeController::class, "detail_true_dtac"]);
Route::get("/fiber/form_true_dtac", [HomeController::class, "form_true_dtac"]);
Route::get("/fiber/home_fiber_guarantee", [HomeController::class, "fiber_guarantee"]);
Route::get("/fiber/detail_fiber_guarantee", [HomeController::class, "detail_fiber_guarantee"]);
Route::get("/fiber/router_fiber", [HomeController::class, "fiber_router"]);
Route::get("/fiber/detail_router_fiber", [HomeController::class, "detail_fiber_router"]);
Route::get("/fiber/SME_fiber", [HomeController::class, "sme_fiber"]);
Route::get("/fiber/detail_SME_fiber", [HomeController::class, "detail_sme_fiber"]);
Route::get("/fiber/internet_basic", [HomeController::class, "internet_basic"]);
Route::get("/fiber/detail_internet_basic", [HomeController::class, "detail_internet_basic"]);
Route::get("/fiber/true_visions", [HomeController::class, "true_visions"]);
Route::get("/fiber/detail_true_visions", [HomeController::class, "detail_true_visions"]);
Route::get("/fiber/internet_game", [HomeController::class, "internet_games"]);
Route::get("/fiber/detail_internet_game", [HomeController::class, "detail_internet_game"]);

//ซิมเติมเงิน
Route::get("/prepaid_sim", [HomeController::class, "prepaid_sim"]);
Route::get("/prepaid_sim/buy_sim", [HomeController::class, "buy_sim"]);
Route::get("/prepaid_sim/sim_includ", [HomeController::class, "sim_includ"]);


Route::get("/thankyou ", [HomeController::class, "thankyou"]);

// เบอร์มงคลรายเดือน
Route::get('/bermonthly', [BerLuckyMonthlyController::class, "get_product_all"]);
Route::get('/fortune/{tel}', [BerLuckyMonthlyController::class, "fortune_page"]);
Route::get('/detailber/{tel}', [BerLuckyMonthlyController::class, "detailber_page"]);
Route::get('/cartproduct/{ber_id}', [BerLuckyMonthlyController::class, "cartproduct_pafe"]);